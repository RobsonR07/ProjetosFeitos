<?php

    $nome   = @$_REQUEST["nome_professor"];
    $email  = @$_REQUEST["email_professor"];
    $pass   = @$_REQUEST["senha_professor"];

    switch(@$_REQUEST["acao"]){
        case 'cadastrar':

            $sql = "INSERT INTO professor (nome_professor, email_professor, senha_professor) 
                    VALUES ('$nome', '$email', md5('$pass'))";

            $res = $conn->query($sql);

            if($res==true){
                print"<br/><div class='alert alert-success col-6 mx-auto' role='alert' style='margin-top:15%; margin-bottom: 10%;'>
                Cadastro Realizado com sucesso! <br/><a href='index.php?page=ext-cad' class='alert-link'>Clique aqui</a> para fazer login!
            </div>";
            }else{ 
                print"<br/><div class='alert alert-danger col-6 mx-auto' role='alert' style='margin-top:15%; margin-bottom: 15%;'>
                Erro no cadastro! <a href='index.php?page=cad-prof' class='alert-link'>Tente novamente.</a>!
            </div>";
            }
        break;
        case "editar":

        break;

        case "excluir":

        break;
    }

?>