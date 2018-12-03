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
                <h5 class="card-title text-center">Editar Cadastro de <?php print $ecu["nome_aluno"]; ?></h5>
                <form action="?page=edit-perfil&acao=salvar" method="POST">
                    <div class="form-row">
                        
                        <div class="col-md" style="margin-top:3%">
                            <h5>Nome Completo</h5>
                            <input id="entrace" type="text" class="form-control" name="nome_aluno" value="<?php print $ecu["nome_aluno"]; ?>" required>
                        </div>
                        
                        <div class="col-md" style="margin-top:3%">
                            <h5>RGM</h5>
                            <input id="entrace" type="text" class="form-control" name="rgm_aluno" value="<?php print $ecu["id_aluno"];?>" required>
                        </div>
                    </div>

                    <div class="form-row">
                        
                        <div class="col-md" style="margin-top:3%">
                            <h5>Email</h5>
                            <input id="entrace" type="email" id="inputEmail" class="form-control" name="email_aluno" value="<?php print $ecu["email_aluno"];?>" required autofocus>
                        </div>
                        
                        <div class="col-md" style="margin-top:3%">
                            <h5>Confirmar Email</h5>
                            <input id="entrace" type="email" id="inputEmail" class="form-control" name="email_confirm" required autofocus>
                        </div>
                    </div>
                   <!-- Fazer Sistema de Confirmação na page de Salvar Cadastro! -->

                    <div class="form-group" style="margin-top:3%">
                        <h5>Curso</h5>
                        <select id="entrace" class="form-control" id="exampleFormControlSelect1" name="curso_aluno" required>
                        
                        <option selected value="<?php print $ecu["curso_aluno"];?>">
                        <?php print $ecu["curso_aluno"];?>
                        </option>
                        
                        <option value="Análise E Desenvolvimento De Sistemas">
                            Análise E Desenvolvimento De Sistemas
                        </option>
                        
                        <option value="Ciência Da Computação">
                            Ciência Da Computação
                        </option>
                        
                        <option value="Gestão Da Tecnologia da Informação">
                            Gestão Da Tecnologia da Informação
                        </option>
                        
                        <option value="Jogos Digitais">
                            Jogos Digitais
                        </option>
                        
                        <option value="Sistemas da Informação">
                            Sistemas da Informação
                        </option>
                        
                        <option value="Outro">
                            Outro
                        </option>
                        </select>
                    </div>

                <hr class="my-4" style="background-color:#482c58">
                <div class="d-flex justify-content-between">
                    <button id="btn" class="btn btn-success text-uppercase" type="submit">Enviar</button>
                    <a href="?page=home" id="btn" class="btn btn-primary text-uppercase">Cancelar</a>
                    <a href="?page=delete-aluno" id="btn" class="btn btn-danger text-uppercase">Deletar</a>
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