<?php session_start();ob_start();?>
<!doctype html>
<!--
     //-----------------------------------------------------//
    //----------Feito Por: Robson/Zé Lucas/Chris-----------//
   //----------Data: 08/11/2018 - 28/11/2018--------------//
  //----------Linguagem: HTML/CSS/PHP/SQL/Boostrap/JS----//
 //----------Titulo: Sistema Desafios-------------------//
//-----------------------------------------------------//   
-->
<html lang="PT-BR">
  <head>
    <title>UDF CHALLENGE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Colocar o icone da aba do chrome -->
    <link rel="icon" href="./img/icon.png" type="image/vnd.microsoft.icon">
    <!-- Fonte do rodapé -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Fonte Pag de Cadastro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <!-- Fonte Awe somi -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body style="background-color:rgba(245,245,245,0.3);">
    
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#482c58;">
  <img src="./img/logov2.png" style="margin-right:2%"/>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a id="dog" class="nav-link" href="?page=home">Inicio</a>
      </li>
      <li class="nav-item">
        <a id="dog" class="nav-link" href="?page=prof">Professor</a>
      </li>
      <li class="nav-item">
        <a id="dog" class="nav-link" href="?page=aluno">Aluno</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid" style="/*margin-top: 5%*/">
    <div class="row">
        <div class="col-12 px-0">
<?php
        include("config.php");
?>
        </div>
    </div>
</div>


<footer id="rodape">
<div class="col-12" style="background-color: #482c58; padding: 3px;">
</div>
    <div class="container-fluid" style="background-color:rgba(245,245,245,1); padding-top: 10px; padding-bottom: 10px;">
      <div class="row justify-content-md-center">
        <div class="col-4 text-right">
          <img src="./img/logoft.png"/>
        </div>
        <div class="col-1">
          <img src="./img/linha.png"/>
        </div>
        <div class="col-5 text-left">
          <p id="rodinfo">
            Sistema Criado por alunos do Centro Universitario UDF<br/> para atividades academicas sem qualquer fim lucrativo.
          </p>
        </div>
      </div>
    </div>
<div class="col-12" style="background-color: #482c58; padding: 3px;">
</div>   
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>

<style>
#dog{
  border: none;
  color: #fff;
  padding: 8px 15px;
  text-align: left;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
}

#dog:hover{
  opacity: 1;
  background-color: #fff;
  transition: 1.25s;
  color: #4f4e4e;
  border-radius:11px;
  opacity: 0.7;
}

#rodinfo{
  font-family: 'Roboto', sans-serif;
  margin-top: 8px;
  font-size: 11pt;
  color: #686868;
}
</style>