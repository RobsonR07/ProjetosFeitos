<div id="body" class="container-fluid">
<?php
@$login = @$_POST['login'];
@$senha = @$_POST['senha'];



if( $login == "Robson" and $senha == "123456" ) {

    print("<br/><div class='alert alert-success col-6 mx-auto' role='alert' style='margin-top:7.5%; margin-bottom:10%;'> <center>Bem Vindo Sr. ".@$_POST['login']."! <br/>
        <a href='?pageadm=admin' class='alert-link'>Clique aqui</a> para continuar!</center>
        </div>");
    
}else{
    print ("<br/><div class='alert alert-danger col-6 mx-auto' role='alert' style='margin-top:7.5%; margin-bottom:10%;'> <center>Nome ou Senha Incorreto(s)! <br/>
    <a href='?pageadm=home' class='alert-link'>Clique aqui</a> para refazer tentativa!</center>
    </div>");
}
?>
</div>

<style>
div#body{
    background-color:  #FFF;
}
</style>
