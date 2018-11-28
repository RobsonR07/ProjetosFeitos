<?php
//Verificar se ele logou
include("./pedido/verifica.php");

    //Gambiarra para mostrar o nome do client
    $edit = "SELECT * FROM client WHERE cpf_client = '{$_SESSION['usuario']}'";

    $result = $conn->query($edit) or die ($conn->error);

    $ecu = $result->fetch_assoc();
?>
      <!-- Menu Nav Bar -->
    <section id="menutop" class="col-12 mx-auto">
        <div class="d-flex justify-content-between">
            <h6>Bem Vindo, <?php echo $ecu["nome_client"]; ?>!</h6>

            <a id="link" href="?page=cad-pedido">Encomendar</a>

            <a id="link" href="?page=edit-client">Editar Cadastro</a>

            <a id="link" href="?page=list-history">Meus Pedidos</a>

            <a id="link" href="?page=exit-client">Sair</a>
        </div>
    </section>
   
   
    <section id="menu" class="col-8 mx-auto">
        <div class="col-4 justify-content-center mx-auto">
            <h4 style="text-align: center;">Editar Cadastro de Cliente<h4>
        </div>
        <div class="col-2 justify-content-center mx-auto">
            <img src="./img/cadastro.png" width="100%" height="100%"/>
        </div><br/>
        <form action="index.php?page=sal-client&acao=editar" method="POST">

            <div class="form-row">
                <div class="col-md">
                    <h4>*Nome Completo:</h4>
                    <input id="validationServer01" value="<?php print $ecu["nome_client"]?>" type="text" class="form-control" name="nome_client" required>
                </div>
                <div class="col-md">
                    <h4>*CPF:</h4>
                    <input id="cpf" type="text" value="<?php print $ecu["cpf_client"]?>" class="form-control" name="cpf_client" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md">
                    <h4>*Telefone:</h4>
                    <input id="tel" type="text" class="form-control" value="<?php print $ecu["telefone_client"]?>" name="telefone_client" required>
                </div>
                <div class="col-md">
                    <h4>*CEP</h4>
                    <input id="cep" type="text" class="form-control" value="<?php print $ecu["cep_client"]?>" name="cep_client" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md">
                    <h4>*Endereço:</h4>
                    <input id="endereco" type="text" class="form-control" value="<?php print $ecu["endereco_client"]?>" name="endereco_client" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md">
                    <h4>*Numero:</h4>
                    <input id="validationServer06" type="text" class="form-control" value="<?php print $ecu["numero_client"]?>" name="numero_client" required>
                </div>
                <div class="col-md">
                    <h4>Complemento:</h4>
                    <input type="text" class="form-control" name="complemento_client" value="<?php print $ecu["complemento_client"]?>" placeholder="Exemplo: Ap. 101">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md">
                    <h4>*Cidade:</h4>
                    <input id="cidade" type="text" class="form-control" value="<?php print $ecu["cidade_client"]?>" name="cidade_client" required>
                </div>
                <div class="col-md">
                    <h4>*Estado:</h4>
                    <input id="uf_client" type="text" class="form-control" value="<?php print $ecu["uf_client"]?>" name="uf_client" required>
                </div>
            </div>

            
            <div class="d-flex justify-content-around">
                <a class="btn btn-light" href="index.php?page=cad-pedido" style="margin-top:3%; margin-bottom: 2%">CANCELAR</a>
                <button class="btn btn-warning" type="submit" style="margin-top:3%; margin-bottom: 2%">SALVAR</button>
                <a class="btn btn-danger" href="?page=delete-client" style="margin-top:3%; margin-bottom: 2%">EXCLUIR</a>
            </div>
        </form>
    </section>

<style>
#body{
	background-color: #fff;
}

#menu{
    margin-top:5%;
    margin-left:20%;
    margin-right:20%;
    margin-bottom:5%;
    padding: 0px, 10px, 0px, 10px;
    background-color: #3c3d41;
    border-style: solid;
    border-width: 2px;
    border-color:#e8b200;
    border-radius: 3px 40px;
}
    
h4{
    color: #e8b200;
    font-family: 'Baloo Bhaijaan', cursive;
    margin-top: 3%;
}

#menutop{
    margin-top:5%;
    margin-left:20%;
    margin-right:20%;
    margin-bottom:5%;
    padding-top:10px;
    background-color: #3c3d41;
    border-style: solid;
    border-width: 2px;
    border-color:#e8b200;
    border-radius: 500px;
}

h6{
    color: #e8b200;
    font-family: 'Baloo Bhaijaan', cursive;
}
</style>
