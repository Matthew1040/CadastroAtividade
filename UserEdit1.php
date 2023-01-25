<!DOCTYPE html>
<html lang="pt-br">

<head>
     <meta charset="UTF-8">
    <link rel="stylesheet" href="Estilo.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        .menu {
            float: left;
            width: 20%;
        }

        .menuitem {
            padding: 8px;
            margin-top: 7px;
            border-bottom: 1px solid #f1f1f1;
        }

        .main {
            float: left;
            width: 60%;
            padding: 0 20px;
            overflow: hidden;
        }


        @media only screen and (max-width:800px) {

            /* For tablets: */
            .main {
                width: 80%;
                padding: 0;
            }

            .right {
                width: 100%;
            }
        }

        @media only screen and (max-width:500px) {

            /* Para exibição de dispositivos com resolução máxima de 500 pixels */
            .menu,
            .main,
            .right {
                width: 100%;
            }
        }

        .image-text {
            float: left;
            border: transparent thin solid;
            padding: 5px;
            margin: 0px 10px 10px 0;
            max-width: 186px;
        }
    </style>
</head>

<header> <img class="bannersup" src="img/banner7.webp"> </header>

<body style="font-family:Verdana;">
    <header>
        <!-- Cabeçalho-->
        
        <div style="background-color:#000000;padding:15px;">
            <div class="row">
                <div class="col-md-2">
                    <h2 class="menutext"><a href="Outlet.html">Outlet</a></h2>
                </div>

                <div class="col-md-2">
                    <h2 class="menutext"><a href="Serviços.html">Serviços</a></h2>
                </div>

                <div class="col-md-2">
                    <h2 class="menutext"><a href="Contato.html">Contato</a></h2>
                </div>

                <div class="col-md-2">
                    <h2 class="menutext"><a href="Cadastro.php">Cadastro</a></h2>
                </div>

                <div class="col-md-2"> 
                    <h2 class="menutext"> <a href="UserEdit.php">Edição de Usuário</a></h2>
                </div>

                <div class="col-md-2">
                    <h2 class="menutext"> <a href="Preços.html">Preços</a></h2>
                </div>


            </div>  
            
            
        </div>

        
         
        
      
   
    </header>

    <div class="caixa1">
        <h2 class="menutext1"><a href="index.html">Menu Principal</a></h2>
        </div>
    <div style="overflow:auto">
        <!-- Coluna da Esqueda-->
        <div class="menu">
            <img src="img/bannerlat1.png" class="bannerlat">
        </div>

        <div class="main">

        
            <!-- Página central Main -->
            <h1>Editar Usuário</h1>
<?php

include_once('config.php');



$sql = "SELECT * FROM user WHERE id=" . $_REQUEST["id"];

$res = $conexao->query($sql);
$row = $res->fetch_object();

?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="username" value="<?php print $row->username; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-Mail</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="birthday" value="<?php print $row->birthday; ?>"class="form-control">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary" type="submit" >Enviar</button>
    </div>
</form>




        
            
        </div>

        <div class="menu">
            <!-- Coluna da Direita-->
            <img src="img/bannerlat1.png" class="bannerlat">
        </div>
    </div>





    

    <footer>
        <!-- Rodapé-->
        <div style="background-color:#ffffff;text-align:center;padding:10px;margin-top:7px;font-size:12px;"> <span
                id="data"></span>
    
            <!-- Exibe a data atual-->
            <script language=javascript type="text/javascript">
                now = new Date
                var mes = now.getMonth();
                switch (mes) {// Array sempre inicia com 0
                    case 9: mes = "Outubro";
                        break;
                    case 10: mes = "Novembro";
                        break;
                    case 11: mes = "Dezembro";
                        break;
                        
                }
        // faz a saída com os parâmetros da data diretamente na linha que o scripr é executado
                document.write("Hoje é "+ now.getDate() + " de " + mes + " de " + now.getFullYear())
            </script> - Criado por Matheus Martins <a href="https://github.com/lucasrm1981/" target="_blank">Git Hub</a>
        </div>
     
    </footer>
</body>

</html>
