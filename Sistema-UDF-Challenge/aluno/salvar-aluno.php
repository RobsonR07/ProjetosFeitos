<?php

    $nome   = @$_REQUEST["nome_aluno"];
    $id     = @$_REQUEST["rgm_aluno"];
    $email  = @$_REQUEST["email_aluno"];
    $pass   = @$_REQUEST["senha_aluno"];
    $curse  = @$_REQUEST["curso_aluno"];

    switch(@$_REQUEST["acao"]){
        case 'cadastrar':

            $sql = "INSERT INTO aluno (nome_aluno, id_aluno, email_aluno, senha_aluno, curso_aluno) 
                    VALUES ('$nome', '$id', '$email', md5('$pass'), '$curse')";

            $res = $conn->query($sql);

            if($res==true){
                print"<br/><div class='alert alert-success col-6 mx-auto' role='alert' style='margin-top:15%; margin-bottom: 10%;'>
                Cadastro Realizado com sucesso! <br/><a href='index.php?page=aluno' class='alert-link'>Clique aqui</a> para fazer login!
            </div>";
            }else{ 
                print"<br/><div class='alert alert-danger col-6 mx-auto' role='alert' style='margin-top:15%; margin-bottom: 15%;'>
                Erro no cadastro! <a href='index.php?page=cad-aluno' class='alert-link'>Tente novamente</a>!
            </div>";
            }
        break;
        case "editar":

        break;

        case "excluir":

        break;
    }

?>