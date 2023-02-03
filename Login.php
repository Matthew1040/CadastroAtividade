<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	       
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>          
<link rel="stylesheet" href="Estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="style2.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/flame-outline.svg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login</title>
</head>
<body>

<section class="vh-100" style="background-color: black;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="img/login1.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form method="POST" action="valida.php">
                <div class="alerta"><?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    
                  <img src="img/logo50.jpg">
                    <span class="h1 fw-bold mb-0">Dark Sports</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Seja parte da nossa comunidade!</h5>

                  <div class="form-outline mb-4">
                    <input type="text" name="usuario" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Nome de Usuário</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="senha" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Senha</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="btnLogin" value="Acessar">Entrar</button>
               
                  </div>

                  <a class="small text-muted" href="#!">Esqueceu sua senha?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Não tem uma conta? <a href="novo-usuario.php"
                      style="color: #393f81;">Cadastre-se aqui</a></p>
                  <a href="#!" class="small text-muted">Termos de uso.</a>
                  <a href="#!" class="small text-muted">Política de Privacidade</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	







	
	
</body>
</html>