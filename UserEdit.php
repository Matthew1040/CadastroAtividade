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
            <h2>Listagem de Usuário</h2>

            <?php


switch($_REQUEST["acao"]){
    case "editar":
       print "UserEdit1.php";
}

include_once('config.php');
    
$sql = "SELECT * FROM user";

$res = $conexao->query($sql);

$qtd = $res->num_rows;

if($qtd > 0){

    


    print "<table class='table table-hover table-strupped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>E-Mail</th>";
    print "<th>Data de nascimento</th>";
    print "<th>Acões</th>";
    print "</tr>";
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->username . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" . $row->birthday . "</td>";
        print "<td>

        


 

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
                </td>";
        print "</tr>";
    }
    print "</table>";
}else{
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}




?>

<a href="UserEdit1.php">
<button type="button" class="btn btn-success">Editar</button>
  </a> 


        
            
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
