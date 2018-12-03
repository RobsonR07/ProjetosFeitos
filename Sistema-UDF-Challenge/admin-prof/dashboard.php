<?php
//Não sei pq caralhos tem que conectar novamente aqui mas ...
include("conexao-db.php");
//Start do login
session_start(); ob_start();
//Verificar se ele logou
include("../prof/verifica.php");

    //Gambiarra para mostrar o nome do anluno
    $name = "SELECT * FROM professor WHERE email_professor = '{$_SESSION['usuarioprof']}'";

    $result = $conn->query($name) or die ($conn->error);

    $ecu = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UDF CHALLENGE - PROFESSOR LOBBY</title>

    <!-- CSS BOOTSTRAP  -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS PERSONALIZADO  -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Icone -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- Colocar o icone da aba do chrome -->
    <link rel="icon" href="./img/icon-dp.png" type="image/vnd.microsoft.icon">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

</head>
<body>

<div class="wrapper">
    <nav id="sidebar">

        <div class="sidebar-header">
            <h3>Area do Professor</h3>
        </div>

        <ul class="list-unstyled components">

            <p>Painel de Controle</p>

            <li>
                <a href="?page=home">Inicio</a>
            </li>

            <li class="active">
                <a href="#usuarioSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <?php echo $ecu["nome_professor"] ?>
                </a>
                <ul class="collapse list-unstyled" id="usuarioSubmenu">
                    <li>
                        <a href="?page=perfil">Editar Perfil</a>
                    </li>
                </ul>
            </li>
            
            <li><a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Desafios</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    
                    <li>
                        <a href="?page=challenge">Desafiar!</a>
                    </li>
                    
                    <li>
                        <a href="?page=resposta">Respostas</a>
                    </li>
                                       
                </ul>
            </li>

            <li>
                <a class="active" href="../prof/logout.php">Sair</a>
            </li>

        </ul>
    </nav>
    <div id="content">
        

        <button type="button" id="sidebarCollapse" class="btn btn-outline-dark">
            <i class="far fa-arrow-alt-circle-left"></i>
        </button>

        <div class="container">
            <div class="row">
               <?php include("page.php");?>
            </div>
        </div>

    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');

        });

        $('#trocar').click(function() {
            var s = $(this);
            var originaltext= s.text();
            $('#trocar').text('Mostrar');
            s.text(originaltext);
            s.html(s.text() == 'Mostrar' ? 'Esconder' : 'Mostrar');

        })
    });
</script>

</body>
</html>