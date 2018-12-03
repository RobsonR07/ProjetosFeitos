<?php

    $nome = @$_REQUEST["nome_autor"];
    switch(@$_REQUEST["acao"]){
        case "cadastrar":
            $sql = "INSERT INTO autor (nome_autor) VALUES ('{$nome}')";

            $res = $conn->query($sql);

            if($res==true){
                print"<br/><div class='alert alert-success col-6 mx-auto' role='alert'>
                Cadastro Realizado com sucesso! <a href='index.php?page=cad-autor' class='alert-link'>Cadastrar Novo Autor</a>, Para realizar novo cadastro!
              </div>";
            }else{ 
                print"<div class='alert alert-danger col-6 mx-auto' role='alert' style='margin-top:5%;'>
                Erro no cadastro! <a href='index.php?page=cad-autor' class='alert-link'>Tente novamente</a>!
              </div>";
            }
        break;
        case "editar":

        break;

        case "excluir":

        break;

    }
?>