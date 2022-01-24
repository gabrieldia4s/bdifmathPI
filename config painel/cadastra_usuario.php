<?php
    include_once '../../config/conexao.php';
    ini_set("display_errors", 1);

    $envia = filter_input(INPUT_POST, 'envia', FILTER_SANITIZE_STRING);
    if($envia){
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $campi = filter_input(INPUT_POST, 'campi', FILTER_SANITIZE_STRING);
        $matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);
        $senha = md5($_POST['senha']);

            $result_cad = "INSERT INTO 	usuario (nome, campi, matricula, senha) 
            VALUES (:nome, :campi, :matricula, :senha)";
            $insert = $pdo->prepare($result_cad);
            $insert->bindParam(':nome', $nome);
            $insert->bindParam(':campi', $campi);
            $insert->bindParam(':matricula', $matricula);
            $insert->bindParam(':senha', $senha);

            if($insert->execute()){
                $_SESSION['msg'] = "<div class='alert alert-success text-justify' role='alert'>
                                        <strong>Parabéns!</strong> Cadastrado efetuado com sucesso. <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                                    </div>";
                header("Location: ../cad_usuario.php");
            }else{
                $_SESSION['msg'] = "<div class='alert alert-danger col-6 text-justify' role='alert'>
                                        <strong>Erro!</strong> Não cadastrado. <span aria-hidden='true' type='button' class='close' data-dismiss='alert' aria-label='Close'>&times;</span>
                                    </div>";
                header("Location: ../cad_usuario.php");
            }
    }else{
        $_SESSION['msg'] = "<div class='alert alert-danger col-6 text-justify' role='alert'>
                                <strong>Erro!</strong> Não foi cadastrado. <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                            </div>";
        header("Location: ../cad_usuario.php");
    }
?>