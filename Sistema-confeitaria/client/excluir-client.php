<?php
//Verificar se ele logou
include("./pedido/verifica.php");

    //Gambiarra para mostrar o nome do client
    $nome = "SELECT * FROM client WHERE cpf_client = '{$_SESSION['usuario']}'";

    $result = $conn->query($nome) or die ($conn->error);

    $ecu = $result->fetch_assoc();
?>

    <section id="menu" class="col-8 mx-auto">
        <div class="col-4 mx-auto">
            <h4 style="text-align: center;">Exclusão de Cadastro<h4>
        </div>
        <div class="col-2 mx-auto">
            <img src="./img/lixeira.png" width="100%" height="100%"/>
        </div>
        <form action="index.php?page=sal-client&acao=excluir" method="POST">

            <br/><div class='alert alert-danger col-10 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                <b>Sr(a) <?php print $ecu["nome_client"]; ?></b>, Você está prestes a <b>deletar</b> seus dados cadastrados em nosso Banco de dados.<br/>
                Deseja excluir seu cadastro?
            </div>
            <div class="d-flex justify-content-around">
                <button class="btn btn-danger" type="submit" style="margin-top:2%; margin-bottom: 2%">DELETAR</button>
                <a href="?page=edit-client" class="btn btn-light" style="margin-top:2%; margin-bottom: 2%"> CANCELAR </a>
            </div>
        </form>
    </section>

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
