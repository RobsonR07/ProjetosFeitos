<?php

    $titulo     = @$_REQUEST["titulo_livro"];
    $editora    = @$_REQUEST["editora_livro"];
    $local      = @$_REQUEST["local_livro"];
    $ano        = @$_REQUEST["ano_livro"];
    switch(@$_REQUEST["acao"]){
        case "cadastrar":
            $sql = "INSERT INTO livro (titulo_livro, editora_livro, local_livro, ano_livro) VALUES ('{$titulo}','{$editora}','{$local}','{$ano}')";

            $res = $conn->query($sql);

            if($res==true){
                print"<br/><div class='alert alert-success col-6 mx-auto' role='alert'>
                Cadastro Realizado com sucesso! <a href='index.php?page=cad-livro' class='alert-link'>Cadastrar Novo Livro</a>, Para realizar novo cadastro!
            </div>";
            }else{ 
                print"<br/><div class='alert alert-danger col-6 mx-auto' role='alert'>
                Erro no cadastro! <a href='index.php?page=cad-livro' class='alert-link'>Tente novamente</a>!
            </div>";
            }
        break;
        case "editar":

        break;

        case "excluir":

        break;

    }

?>