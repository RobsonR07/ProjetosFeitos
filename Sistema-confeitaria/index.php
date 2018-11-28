<?php session_start();ob_start();?>
<!doctype html>
<html lang="PT-BR">
<!--
     //---------------------------------------------------//
    //----------Feito Por: Robson Ribeiro----------------//
   //----------Data: 29/10/2018 - 02/11/2018------------//
  //----------Linguagem: HTML/CSS/PHP/SQL/Boostrap-----//
 //----------Titulo: Sistema Confeitaria Enfeite------//
//---------------------------------------------------//   
-->

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    
    <!-- Adicionadas depois, der bug desing é aqui! -->
    <link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<!-- Font footer -->
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <!--Font login page -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan" rel="stylesheet">
    <!-- Dashboard-->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <!-- Colocar o icone da aba do chrome -->
    <link rel="icon" href="img/icone.png" type="image/vnd.microsoft.icon">

    

    <title>Confeitaria</title>

<style>
a#link{
    color:#c08a02; /*amarelo escuro*/
 }
a:hover#link {
    font-weight: bold;
    color:#e8b200; /*amarelo claro*/
    text-decoration:none;
}
body{
    background-color: #fff;
}
</style>

  </head>
<body>

            <nav class="navbar static-top navbar-expand-lg navbar" style="background-color: #333333; padding-bottom:1%">
                <img src="img/logo.png"/>
                    <button class="navbar-toggler btn-outline-warning" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span><i class="fa fa-navicon" style="color:#c08a02;"></i></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a id="link" class="nav-link" href="index.php">Home</a>
                        </li><!-- Botões ativados na index admin
                        <li class="nav-item">
                            <a id="link" class="nav-link" href="?page=cad-core">Coberturas e Recheios</a>
                        </li>
                        <li class="nav-item">
                            <a id="link" class="nav-link" href="?page=cad-sab">Sabores</a>
                        </li> -->
                        <li class="nav-item">
                            <a id="link" class="nav-link" href="?page=cad-client">Cadastro de Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a id="link" class="nav-link" href="?page=login-client">Encomendar</a>
                        </li>
                        <li class="nav-item">
                            <a id="link" class="nav-link" href="?page=trab">Trabalhe Conosco</a>
                        </li>
                    </ul>
                    <form class="form-inline">
                        <a class="btn btn-outline-warning  my-2 my-sm-0" href="?page=login">FUNCIONARIOS</a>
                    </form>
                </div>
            </nav>


<!--DIV do body da outra page-->
<div class="container-fluid" style="/*margin-top: 5%*/">
    <div class="row">
        <div class="col-xl-12">
<?php
        include("config.php");
?>
        </div>
    </div>
</div>

    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3088.9629224936116!2d-47.89941515877751!3d-15.800576727226776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1540948047669" width="100%" height="100%" frameborder="0" style="border:2px; border-style: solid; border-radius:5px 5px; border-color:#c08a02;" allowfullscreen></iframe>
                </div>
                <div class="col-sm-4">
                    <div>
                        <i class="fa fa-map-marker" style="color:#FFF"></i>
                        <p style="color:#e8b200;"><span>SGAS 604</span> Brasilia, Brasil, 70390-045</p>
                    </div>

                    <div>
                        <i class="fa fa-phone" style="color:#FFF;"></i>
                        <p style="color:#e8b200;">4002-8922</p>
                    </div>

                    <div>
                        <i class="fa fa-envelope" style="color:#FFF;"></i>
                        <p style="color:#e8b200;">emaild@enfeite.com.br</p>
                    </div>

                    </div>
                <div class="col-sm-4">
                    <div class="social-networks">
                        <a href="https://twitter.com/confeitariaenfeite" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/confeirariaenfeite" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://plus.google.com/confeitariaenfeite" target="_blank" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright" style="margin-top: -3%">
            <p>© 2019 Copyright Registred on Acre in year 1 A.C </p>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Java Script do CEP autocomplete -->
    <script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="js/complet-cep.js"></script>

    <!-- Script das masks -->
    <script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"></script>
    <script type="text/javascript" src="js/mask.js"></script>

</body>
</html>
