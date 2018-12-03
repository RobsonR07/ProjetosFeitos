<?php
//includes das paginas

    switch(@$_REQUEST ["page"]){

        //Abas do MENU PRINCIPAL =========================================================
        case 'home':
            include("home/home.php");
        break;

        //Aba nome
        case 'perfil':
            include("perfil/editar-perfil.php");
        break;

        //Aba academica
        case 'challenge':
            include("desafio/desafiar.php");
        break;

        case 'resposta':
            include("desafio/respostas.php");
        break;

        // Fim das Abas ==================================================================

        //Outras funcionalidades do sistemas
        case 'edit-perfil':
            include("perfil/salvar-edicao.php");
        break;

        case 'delete-prof':
            include("perfil/deletar-perfil.php");
        break;

        case 'sal-desafio':
            include("desafio/salvar-desafio.php");
        break;

        case 'analise-resposta':
            include("desafio/correcao.php");
        break;

        case 'sal-correcao':
            include("desafio/salvar-resposta.php");
        break;

    
    //Home Dashboard       
    default:
        include("home/home.php");
    }  
?>