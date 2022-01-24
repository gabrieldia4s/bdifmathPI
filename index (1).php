<!doctype html>
  <html lang="pt-br">
  <head>
    <title>IF-Math</title>
    <link rel="sortcut icon" href="img/ifmath.jpg" type="image/x-icon" />;
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
            <a class="navbar-brand" id="logo" href="index.php">IF MATH</a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link active" id="guia1" aria-current="page" href="quem-somos.php">QUEM SOMOS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="guia2" href="#">CONTATO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="guia2" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">ÁREA RESTRITA</a>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Área Restrita</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Área permitida apenas para administradores.
                          </div>
                          <div class="modal-footer">
                            <a href="login-adm.php" class="btn btn-secondary">Fechar</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
      <div class="d-flex justify-content-center h-100">
        <div class="card row" id="capa">
            <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-6 resumo" id="lado1">
                    <h4>OLÁ, ESTUDANTE!</h4>
                    <p class="texto">Bem-vindos a plataforma estudantil IFmath, 
                      100% gratuita e voltada para alunos do ensino médio que querem aprender matemática de modo fácil, 
                      prático e com todo apoio necessário, não perca tempo. Embarque agora nesse universo matemático didático e super flexível. 
                      Veja conteúdos, revise, crie seu cronograma e marque seus horários com professores.
                    </p>
                    <a href="login.php" class="btn btn-sm btn-success">Fazer Login</a>
                </div>
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0 text-center" id="lado2">
                  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner shadow p-3 mb-5 bg-body rounded">
                      <div class="carousel-item active">
                        <img src="https://getwallpapers.com/wallpaper/full/3/6/9/147560.jpg" class="w-50 justify-content-end" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://getwallpapers.com/wallpaper/full/8/4/e/1335171-funny-math-wallpapers-1920x1200-photo.jpg" class="w-50 justify-content-end" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://getwallpapers.com/wallpaper/full/3/6/9/147560.jpg" class=" w-50 justify-content-end" alt="...">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <p class="float-center texto text-center">&copy 2021 - Todos os Direitos Reservados | IFMATH Versão 1.1</p>
      </div>
    </div>
</body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $('.collapse').collapse()
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>