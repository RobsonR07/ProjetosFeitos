<?php

   //conexão com o banco de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "bolo";

    $conn = new mysqli($host, $user, $pass, $db);


    //Switch dos cadastros
    switch (@$_REQUEST["pageadm"]){
        //Cadrastro de sabor
        case 'cad-sab':
            include("../sabor/cadastrar-sabor.php");
        break;

        //salvar salvor
        case 'sal-sab':
            include("../sabor/salvar-sabor.php");
        break;
        
        //Cadrastro de cobertura e recheio
        case 'cad-core':
            include("../coberturae-recheio/cadastrar-core.php");
        break;

        case 'cad-rec':
            include("../coberturae-recheio/cadastrar-recheio.php");
        break;

        //Listar Pedido
        case 'list-pedido':
            include("../pedido/listar-pedido.php");
        break;

        //Salvar Cobertura
        case 'sal-cob':
            include("../coberturae-recheio/salvar-cobertura.php");
        break;

        //Salvar Cobertura
        case 'sal-rec':
            include("../coberturae-recheio/salvar-recheio.php");
        break;

        //Login Chefão
        case 'login-boss':
            include("login-chef.php");
        break;

        case 'logar':
            include("../boss/autenticacao.php");
        break;

        //Area do Boss
        case 'admin':
            include("../boss/boss.php");
        break;

        case 'ver-trab':
            include("../boss/candidatos.php");
        break;

        case 'analise-curriculo':
            include("../boss/envalar-candidato.php");
        break;

        case 'sal-funcionario':
            include("../boss/salvar-funcionario.php");
        break;

        case 'envalar-funcionario':
            include("../boss/listar-funcionarios.php");
        break;

        case 'analise-funcionario':
            include("../boss/analise-funcionario.php");
        break;

        case 'sal-membro':
            include("../boss/salvar-membro.php");
        break;

        case 'exit-funcio':
            include("../funcionario/logout.php");
        break;

    default:
        include("dashboard-admin.php");
    break;
    }
?>