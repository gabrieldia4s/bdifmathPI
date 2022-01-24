
<?php
    if(isset($_POST['matricula']) && !empty($_POST['matricula']) && isset($_POST['senha']) && !empty($_POST['senha'])){

        require '../config/conexao.php';
        require 'Admin.class.php';

        $u = new Admin(); 
        
        $matricula = addslashes($_POST['matricula']);
        $senha = addslashes($_POST['senha']);

        if($u->login($matricula, $senha) == true){
            $_SESSION['UserLog'] = true;
            if (isset($_SESSION['id_admin'])) {
                header("Location: ../painel_administrativo/index.php");
            }else{
                $_SESSION['alerta'] = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
									    <strong>Erro:</strong> Seu Login ou Senha está incorreto, verifique e tente novamente!
									</div>';
                header("Location: ../login-adm.php");
            }
        }else{
            $_SESSION['alerta'] = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Erro:</strong> Seu Login ou Senha está incorreto, verifique e tente novamente!
                                    </div>';
            header("Location: ../login-adm.php");
        }
    }else{
        $_SESSION['alerta'] = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Erro:</strong> Dados inválidos!
                                </div>';
        header("Location: ../login-adm.php");
    }
?>