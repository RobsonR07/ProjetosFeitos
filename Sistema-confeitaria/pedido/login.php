
<style>
#body{
    background-color: #FFFFFF;
}
#menu{
    margin-top:5%;
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

    <section id="menu" class="col-6 mx-auto">
        <div class="col-4 mx-auto">
            <h4 style="text-align: center;">Autenticação Cliente<h4>
        </div>
        <div class="col-4 mx-auto">
            <img src="./img/login.png" width="80%" height="80%"/>
        </div>
        <form action="index.php?page=logar-client" method="POST">

            <div class="form-row">
                <div class="col-6 mx-auto">
                    <h4>CPF</h4>
                    <input id="cpf" type="text" class="form-control" name="login_client" required>
            
                    <h4>Senha</h4>
                    <input type="password" class="form-control" name="senha_client" required>
                
            <?php 
                if(isset($_SESSION['incorreto'])): 
            ?>
                <div class="alert alert-danger" role="alert" style="margin-top: 2%">
                    <strong>Erro</strong>: CPF e/ou Senha Incorretos, Tente Novamente!
                </div>
            <?php
                endif;
                unset($_SESSION['incorreto']);  
            ?>
                </div>
            </div>
            <div class="form-group">
                <center><button class="btn btn-warning" type="submit" style="margin-top:2%">ENTRAR</a></center>
            </div>
        </form>
    </section>
