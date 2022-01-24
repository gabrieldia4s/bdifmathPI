<?php
    session_start();
?>
<?php
    class Admin{
        public function login($matricula, $senha){
            global $pdo;

            $sql = "SELECT * FROM administrador WHERE matricula = :matricula AND senha = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("matricula", $matricula);
            $sql->bindValue("senha", md5($senha));
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();

                $_SESSION['id_admin'] = $dado['id_administrador'];
                $_SESSION['NomeAdm'] = $dado['nome'];
                $_SESSION['DATA'] = $dado['data_sistema'];
                $_SESSION['perfil'] = $dado['foto'];


                return true;
            }else{
                return false;
            }
        }
    }
?>Adm