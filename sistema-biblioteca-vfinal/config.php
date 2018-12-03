<?php

    //conexão com o banco de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "biblioteca";

    $conn = new mysqli($host, $user, $pass, $db);

    //includes das paginas

    switch(@$_REQUEST ["page"]){
    //caso autor
        case "cad-autor":
            include("autor/cadastrar-autor.php");
        break;
        case "list-autor":
            include("autor/listar-autor.php");
        break;
        case "edi-autor":
            include("autor/editar-autor.php");
        break;
        case "sal-autor":
            include("autor/salvar-autor.php");
        break; 
        
    //caso livro
        case "cad-livro":
            include("livro/cadastrar-livro.php");
        break;
        case "list-livro":
            include("livro/listar-livro.php");
        break;
        case "edi-livro":
            include("livro/editar-livro.php");
        break;
        case "sal-livro":
            include("livro/salvar-livro.php");
        break;
        
    //caso categoria
        case "cad-categoria":
            include("categoria/cadastrar-categoria.php");
        break;
        case "list-categoria":
            include("categoria/listar-categoria.php");
        break;
        case "edi-categoria":
            include("categoria/editar-categoria.php");
        break;
        case "sal-categoria":
            include("categoria/salvar-categoria.php");
        break;
    default:
        include("dashboard.php");
    }  

?>