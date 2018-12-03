<?php
include("conexao-db.php");
//Start do login
@session_start(); ob_start();
//Verificar se ele logou
include("../aluno/verifica.php");

    //Gambiarra para mostrar o nome do client
    $edit = "SELECT * FROM aluno WHERE email_aluno = '{$_SESSION['usuario']}'";

    $result = $conn->query($edit) or die ($conn->error);

    $ecu = $result->fetch_assoc();
?>


<div class="col-sm-9 col-md-7 col-lg-10 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body col-10 mx-auto">
                <h5 class="card-title text-center">Armazenamento de <?php print $ecu["nome_aluno"]; ?></h5>
                <form action="?page=edit-perfil&acao=deletar" method="POST">
                    
                <br/>
                <div class='alert alert-danger col-10 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                <b>Sr(a) <?php print $ecu["nome_aluno"]; ?></b>, Você está prestes a <b>deletar</b> seus dados cadastrados em nosso Banco de dados.<br/>
                Deseja excluir seu cadastro?
                </div>

                <hr class="my-4" style="background-color:#482c58">
                <div class="d-flex justify-content-between">
                    <button id="btn" class="btn btn-danger text-uppercase" type="submit">Deletar</button>
                    <a href="?page=home" id="btn" class="btn btn-primary text-uppercase">Cancelar</a>
                </div>
                </form>
            </div>
        </div>
    </div>

<style>
:root {
    --input-padding-x: 1.5rem;
    --input-padding-y: .75rem;
}

.card-signin {
    border: 0;
    border-radius: 2rem;
    box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, 0.3);
}

.card-signin .card-title {
    margin-bottom: 2rem;
    font-weight: 500;
    font-size: 1.5rem;
    color:#482c58;
}

.card-signin .card-body {
    padding: 2rem;
}

#quest{
    outline:0;
    background-color: #FFFF;
    color: #888;
    margin-top: -3%;
}

#quest:hover{
    outline:0;
    background-color: #FFFF;
    color: #482c58;
    transition: 1.5s;
}


#btn {
    font-size: 80%;
    border-radius: 25px;
    letter-spacing: .1rem;
    font-weight: bold;
    transition: all 0.2s;
    padding: 10px;
}

h5{
    color:#482c58;
    font-family: 'Roboto', sans-serif;
}

#inputPassword:focus{
    transition: 1.5s;
    border-color:#482c58;
    border-width: 3px; 
}

#entrace:focus{
    transition: 1.5s;
    border-color:#482c58;
    border-width: 1.5px;
}
</style>