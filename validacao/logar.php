
<?php
    if(isset($_POST['matricula']) && !empty($_POST['matricula']) && isset($_POST['senha']) && !empty($_POST['senha'])){

        require '../config/conexao.php';
        require 'Usuario.class.php';

        $u = new Usuario(); 
        
        $matricula = addslashes($_POST['matricula']);
        $senha = addslashes($_POST['senha']);

        if($u->login($matricula, $senha) == true){
            $_SESSION['UserLog'] = true;
            if (isset($_SESSION['id_usuario'])) {
                header("Location: ../sistema/index.php");
            }else{
                $_SESSION['alerta'] = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
									    <strong>Erro:</strong> Seu Login ou Senha está incorreto, verifique e tente novamente!
									</div>';
                header("Location: ../login.php");
            }
        }else{
            $_SESSION['alerta'] = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Erro:</strong> Seu Login ou Senha está incorreto, verifique e tente novamente!
                                    </div>';
            header("Location: ../login.php");
        }
    }else{
        $_SESSION['alerta'] = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Erro:</strong> Dados inválidos!
                                </div>';
        header("Location: ../login.php");
    }
?>