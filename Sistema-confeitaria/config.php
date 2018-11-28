<?php

    //conexão com o banco de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "bolo";

    $conn = new mysqli($host, $user, $pass, $db);


    //Switch dos cadastros
    switch (@$_REQUEST["page"]){
        //Cadastro de Cliente
        case 'cad-client':
            include("client/cadastrar-client.php");
        break;

        //Cadastro de Pedido
        case 'cad-pedido':
            include("pedido/cadastrar-pedido.php");
        break;

        //Login Client
        case 'login-client':
            include("pedido/login.php");
        break;

        case 'list-history':
            include("client/history.php");
        break;

        case 'logar-client':
            include("pedido/logar.php");
        break;

        case 'exit-client':
            include("pedido/logout.php");
        break;

        case 'edit-client':
            include("client/editar-client.php");
        break;

        case 'delete-client':
            include("client/excluir-client.php");
        break;

        //Login Funcionario
        case 'login':
            include("admin/login.php");
        break;

        case 'logar-funcio':
           include("funcionario/logar.php");
        break;

        //Enviar Curriculo
        case 'trab':
            include("funcionario/funcionario-curriculo.php");
        break;

        case 'sal-curriculo':
            include("funcionario/salvar-curriculo.php");
        break;

        //Salvar pedido
        case 'sal-pedido':
            include("pedido/salvar-pedido.php");
        break;

        //salvar client
        case 'sal-client':
            include("client/salvar-client.php");
        break;

    default:
        include("dashboard.php");
    break;
    }
?>