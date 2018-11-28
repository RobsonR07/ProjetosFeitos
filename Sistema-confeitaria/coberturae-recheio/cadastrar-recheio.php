<div id="body" class="container-fluid" style="margin-top:11.5%">
    <section id="menu" class="col-6 mx-auto">
        <div class="col-4 justify-content-center mx-auto">
            <h4 style="text-align: center;">Novo Recheio<h4>
        </div>
        <div class="col-2 justify-content-center mx-auto">
            <img src="../img/espatulasla.png" width="100%" height="100%"/>
        </div>
        <form action="index-admin.php?pageadm=sal-rec&acao=cadastrar" method="POST">

            <div class="form-row">
                <div class="col-6 mx-auto"><br/>
                    <h4>Sabor do Recheio:</h4>
                    <input id="validationServer01" type="text" class="form-control" name="sabor_recheio" placeholder="Chantily" required><br/>
            
                    <h4>Opcionais:</h4>
                    <input id="validationServer02" type="text" class="form-control" name="opcionais_recheio" placeholder="Morango" required>
                </div>
            </div>
            <div class="form-group">
                <center><button class="btn btn-warning" type="submit" style="margin-top:2%">ENVIAR</a></center>
            </div>
        </form>
    </section>

</div>

<style>
body{
	background: url("../img/fundore.jpg")no-repeat center top fixed;

	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

#menu{
    margin-top:10%;
    margin-left:20%;
    margin-right:20%;
    margin-bottom:5%;
    padding:0px, 10px, 0px, 10px;
    background-color: #3c3d41;
    border-style: solid;
    border-width: 2px;
    border-color:#e8b200;
    border-radius: 3px 40px;
}
    
h4{
    color: #e8b200;
    font-family: 'Baloo Bhaijaan', cursive;
}
</style>