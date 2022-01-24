<?php
    include_once '../config/conexao.php';
?>
<?php
  if (!isset($_SESSION['UserLog'])){
    $_SESSION['alerta'] = '<div class="alert alert-success alert-dismissible" role="alert">
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									  <strong>Atenção:</strong> Área Restrita, Efetue o Login!
									</div>';
    header("Location: ../login.php");
    session_destroy();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Viga:400" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Portal IF-Math</title>
    <link rel="sortcut icon" href="../img/ifmath.jpg" type="image/x-icon" />
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-solid fa-abacus"></i>
                </div>
                <div class="sidebar-brand-text mx-3">IF-MATH</div>
            </a>
            <hr class="sidebar-divider my-0">
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Menu
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <!--<i class="fas fa-fw fa-cog"></i>-->
                    <span>Conteúdos</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Módulos</h6>
                        <a class="collapse-item" href="math1.php">Matemática I</a>
                        <a class="collapse-item" href="math2.php">Matemática II</a>
                        <a class="collapse-item" href="math3.php">Matemática III</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <!--<i class="fas fa-fw fa-wrench"></i>-->
                    <span>Cronograma de Estudo</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tido de Cronograma:</h6>
                       <a class="collapse-item" href="cronograma-semanal.php">Semanal</a>
                        <a class="collapse-item" href="#">Mensal</a>
                    </div>
                </div>
            </li>           
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['NomeUser'];?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfdil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configurações
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#Sair" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                            </div>
                        </li>
                    </ul>
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo sair?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                    <div class="modal-body">Selecione "Sair" caso queira encerrar esta sessão.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                    <a class="btn btn-primary" href="../validacao/logout.php">Sair</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>                
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> EMENTA - MATEMÁTICA III</h1>
                    </div>
                    <hr>
                    <ol class="list-group list-group-numbered">
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                          <a href="conteudo.php"><div class="fw-bold">Análise combinatória:</div></a>
                            <p class="text-justify"><small>Estudo do princípio fundamental da contagem. O estudo das expressões matemáticas (fórmulas) de arranjo, combinação e permutação devem ficar para segundo plano.
                            </small></p>
                        </div>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                          <a href="conteudo.php"><div class="fw-bold">Probabilidades:</div></a>
                            <p class="text-justify"><small> Conceituação e cálculo de probabilidades. Probabilidade condicional e independência
                            </small></p>
                        </div>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                          <a href="conteudo.php"><div class="fw-bold">Estatística básica:</div></a>
                            <p class="text-justify"><small>Organização de dados, distribuições de frequência, medidas de tendência central e de dispersão.
                            </small></p>
                        </div>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                          <a href="conteudo.php"><div class="fw-bold">Polinômios e equações polinomiais:</div></a>
                            <p class="text-justify"><small>focar o estudo das raízes de uma equação polinomial e sua representação gráfica. 
                            </small></p>
                        </div>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                          <a href="conteudo.php"><div class="fw-bold">Geometria espacial:</div></a>
                            <p class="text-justify"><small>Estudo da geometria de posição e métrica; das propriedades das formas geométricas espaciais (poliedros, cones, cilindros e esferas). Esse estudo será enfatizado através de problemas que envolvam determinação de áreas e volumes (princípio de Cavalieri) de formas tridimensionais.
                            </small></p>
                        </div>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                          <a href="conteudo.php"><div class="fw-bold">Geometria analítica:</div></a>
                            <p class="text-justify"><small>Estudo das retas, circunferências e cônicas. Deve-se enfocar a estreita relação entre a geometria plana, as funções e a geometria analítica
                            </small></p>
                        </div>
                      </li>
                      
                    </ol>
                      
                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <p class="float-center texto text-center">&copy 2021 - Todos os Direitos Reservados | IFMATH</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>