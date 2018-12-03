<?php

    //conexão com o banco de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "udf-challenge";

    $conn = new mysqli($host, $user, $pass, $db);

    //includes das paginas

    switch(@$_REQUEST ["page"]){
        
        //Index
        case 'home':
            include("./home/home.php");
        break;

        //Area Do Professor
        case 'prof':
            include("./prof/login-prof.php");
        break;

        case 'cad-prof':
            include("./prof/cadastrar-prof.php");
        break;

        case 'autenticacao-prof':
            include("./prof/autenticacao.php");
        break;

        case 'token':
            include("./prof/token.php");
        break;

        case 'verif-prof':
            include("./prof/verificacao-prof.php");
        break;

        case 'sal-prof':
            include("./prof/salvar-prof.php");
        break;

        //Encerrar a sessão de cadastro de prof
        case 'ext-cad':
            include("./prof/logout-cad.php");
        break;

        //Area do aluno
        case 'aluno':
            include("./aluno/login-aluno.php");
        break;

        case 'cad-aluno':
            include("./aluno/cadastrar-aluno.php");
        break;

        case 'sal-aluno':
            include("./aluno/salvar-aluno.php");
        break;

        case 'autenticacao-aluno':
            include("./aluno/autenticacao.php");
        break;
    
    //Jeito Gambiarra onde qualquer pag fora dessas acima ela cairá aqui!        
    default:
        include("error.php");
    }  
    

?>