<body>
<section id="menu" class="col-8 mx-auto">
    <center><h1>Cadastrar Categoria<h1></center>

    <form action="index.php?page=sal-categoria&acao=cadastrar" method="POST">

        <div class="form-group col-6 mx-auto" style="margin-top: 3%;">
            <center><h4>Nome da Categoria</h4></center>
            <input type="text" name="nome_categoria" class="form-control" placeholder="Exemplo: Aventura">
        </div>
        <div class="form-group">
            <center><button type="submit" class="btn btn-outline-info">ENVIAR</button></center>
        </div>
    <form>
</section>
<body>
<style>
body{
	background: url("images/fundo.jpg")no-repeat center top fixed;

	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
#menu{
    margin-top:10%;
    margin-left:20%;
    margin-right:20%;
    padding:0px, 10px, 0px, 10px;
    background-color:rgba(211, 211, 211, 0.9);
    border-style: solid;
    border-width: 5px;
    border-color:rgba(255, 255, 255, 0.69);
    border-radius: 5px 20px;
}
h1{
    color: #FFFFFF;
}
h4{
    color: #FFFFFF;
}
</style>
