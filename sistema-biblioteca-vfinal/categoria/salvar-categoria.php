<?php

    $nome = @$_REQUEST["nome_categoria"];
    switch(@$_REQUEST["acao"]){
        case "cadastrar":
            $sql = "INSERT INTO categoria (nome_categoria) VALUES ('{$nome}')";

            $res = $conn->query($sql);

            if($res==true){
                print"<br/><div class='alert alert-success col-6 mx-auto' role='alert'>
                Cadastro Realizado com sucesso! <a href='index.php?page=cad-categoria' class='alert-link'>Cadastrar Nova categoria</a>, Para realizar novo cadastro!
              </div>";
            }else{ 
                print "<div class='alert alert-danger col-6 mx-auto' role='alert'>
                Erro no cadastro! <a href='index.php?page=cad-categoria' class='alert-link'>Tente novamente</a>!
              </div>";
            }
        break;
        case "editar":

        break;

        case "excluir":

        break;

    }
?>