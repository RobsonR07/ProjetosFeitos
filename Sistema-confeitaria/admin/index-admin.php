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
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    
    <!-- Adicionadas depois, der bug desing é aqui! -->
	<!-- Font footer -->
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <!--Font login page -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan" rel="stylesheet">
    <!--Font Area admin -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <title>Confeitaria Admin</title>

<style>
 a#link{
    color:#c08a02;
 }
 a:hover#link {
    font-weight: bold;
    color:#e8b200;
}
body{
    background-color: #FFFFFF;
}

</style>

</head>
  <body>
        <nav class="navbar static-top navbar-expand-lg navbar" style="background-color: #333333;">
            <img src="../img/logo.png"/>
                <button class="navbar-toggler btn-outline-warning" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fa fa-navicon" style="color:#c08a02;"></i></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                   <li class="nav-item">
                        <a id="link" class="nav-link" href="index-admin.php">Home</a>
                    </li>
                   <li class="nav-item">
                        <a id="link" class="nav-link" href="index-admin.php?pageadm=cad-core">Coberturas</a>
                    </li>
                    <li class="nav-item">
                        <a id="link" class="nav-link" href="index-admin.php?pageadm=cad-rec">Recheios</a>
                    </li>
                    <li class="nav-item">
                        <a id="link" class="nav-link" href="index-admin.php?pageadm=cad-sab">Sabores</a>
                    </li>
                    <li class="nav-item">
                        <a id="link" class="nav-link" href="index-admin.php?pageadm=list-pedido">Encomendas</a>
                    </li>
                    <li class="nav-item">
                        <a id="link" class="nav-link" href="index-admin.php?pageadm=login-boss">Administrar</a>
                    </li>
                     <!-- Botões da pagina index
                    <li class="nav-item">
                        <a id="link" class="nav-link" href="?page=cad-client">Cadastro de Clientes</a>
                    </li>
                    <li class="nav-item dropdown">
						<a id="link" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pedidos
						</a>
						
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <a id="link" class="dropdown-item" href="?page=cad-pedido">Realizar Pedido</a>
						  <a id="link" class="dropdown-item" href="?page=list-pedido">Listar Pedidos</a>
						</div>
					</li>-->
                </ul>
                <form class="form-inline">
                    <a class="btn btn-outline-danger  my-2 my-sm-0" href="?pageadm=exit-funcio">SAIR</a>
                </form>
            </div>
        </nav>  
<!-- Div body da outra pag -->
<?php
		include("config-admin.php");
?>     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>  
</html>