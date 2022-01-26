<?php
  include_once 'config/conexao.php';
?>
<?php
    /*if (isset($_SESSION['UserLog'])){
        header("Location: sistema/index.html");
        die();
      }*/
?>
<!doctype html>
  <html lang="pt-br">
  <head>
    <link rel="sortcut icon" href="img/ifmath.jpg" type="image/x-icon" />;
    <title>Página de Login</title>
    <link href="https://fonts.googleapis.com/css?family=Viga:400" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="img/volta.png" alt="" width="25" height="25" class="d-inline-block align-text-top">
        </a>
      </div>
    </nav> 
    <div class="container">
      <div class="d-flex justify-content-center h-100">
        <div class="card">
        <?php 
                if(!empty ($_SESSION['alerta'])){
                    echo $_SESSION['alerta'];
                    unset($_SESSION['alerta']);
                }
              ?>
          <div class="card-header">
            <h3 class="text-center">Entrar no Sistema</h3>
          </div>
          <div class="card-body">
            <form name="form" method="POST" action="validacao/logar.php">
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" name="matricula" placeholder="Digite seu Usuário" autofocus required>
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control" name="senha" placeholder="Digite sua Senha" required>
              </div>
              <div class="row align-items-center remember">
                <input type="checkbox">Lembrar de mim
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-md btn-block btn-success"><i class="fa fa-sign-in" aria-hidden="true"></i> Entrar no Sistema</button>
              </div>
            </form>
          </div>
          <div class="card-footer">
            <div class="d-flex justify-content-center links">
              Ainda não esta cadastrado?<a href="#">Inscrever-se</a>
            </div>
            <div class="d-flex justify-content-center">
              <a href="#">Esqueceu sua senha?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <p class="float-center texto text-center">&copy 2021 - Todos os Direitos Reservados | IFMATH</p>
    </div>
  </body>
</html>
