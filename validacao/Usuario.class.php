<?php
    //session_start();
?>
<?php
    class Usuario{
        public function login($matricula, $senha){
            global $pdo;

            $sql = "SELECT * FROM usuario WHERE matricula = :matricula AND senha = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("matricula", $matricula);
            $sql->bindValue("senha", md5($senha));
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();

                $_SESSION['id_usuario'] = $dado['id_usuario'];
                $_SESSION['NomeUser'] = $dado['nome'];


                return true;
            }else{
                return false;
            }
        }
    }
?>