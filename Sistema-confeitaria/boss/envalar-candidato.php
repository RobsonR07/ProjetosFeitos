<?php

    $sql = "SELECT * FROM funcionariocurriculo 
            WHERE id_curriculo = ".$_REQUEST["id_curriculo"];
	
	$res = $conn->query($sql);
	
	$eco = $res->fetch_assoc();

?>
<!-- Menu Nav Bar -->
<section id="menutop" class="col-12 mx-auto">
    <div class="d-flex justify-content-between">
        <h6>Bem Vindo, Chef R. Ribeiro!</h6>

        <a id="link" href="?pageadm=admin">Inicio</a>

        <a id="link" href="?pageadm=envalar-funcionario">Administrar Funcionarios</a>

        <a id="link" href="?pageadm=ver-trab">Candidatos</a>

        <a id="link" href="?pageadm=exit-admin">Sair</a>
    </div>
</section>
    <section id="menu" class="col-8 mx-auto">
        <div class="col-4 justify-content-center mx-auto">
            <h4 style="text-align: center;">Curriculo de <?php print $eco["nome_funcionario"] ?><h4>
        </div>
        <div class="col-1 justify-content-center mx-auto">
            <img src="../img/cadastro.png" width="100%" height="100%" style="margin-bottom: 3%"/>
        </div>
        <br/>
        <form action="?pageadm=sal-funcionario&acao=cadastrar" method="POST">

            <div class="form-row">
                <div class="col-md">
                    <h4>Nome Completo:</h4>
                    <input value="<?php print $eco["nome_funcionario"] ?>" type="text" class="form-control" name="nome_funcionario" readonly>
                    <input value="<?php print $eco["id_curriculo"] ?>" type="hidden" class="form-control" name="id_curriculo" readonly>
                </div>
                <div class="col-md">
                    <h4>Cargo Pretendido:</h4>
                    <input value="<?php print $eco["cargo_funcionario"] ?>" type="text" class="form-control" name="cargo_funcionario" readonly>
                </div>
                <div class="col-md">
                    <h4>CPF:</h4>
                    <input value="<?php print $eco["cpf_funcionario"] ?>" type="text" class="form-control" name="cpf_funcionario" readonly>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md">
                    <h4>Telefone:</h4>
                    <input value="<?php print $eco["telefone_funcionario"] ?>" type="text" class="form-control" name="telefone_funcionario" readonly>
                </div>
                <div class="col-md">
                    <h4>Sexo:</h4>
                    <input value="<?php print $eco["sexo_funcionario"] ?>" type="text" class="form-control" name="sexo_funcionario" readonly>
                </div>
                <div class="col-md">
                    <h4>CEP</h4>
                    <input value="<?php print $eco["cep_funcionario"] ?>" type="text" class="form-control" name="cep_funcionario" readonly>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md">
                    <h4>Endereço:</h4>
                    <input value="<?php print $eco["endereco_funcionario"] ?>" type="text" class="form-control" name="endereco_funcionario" readonly>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md">
                    <h4>Numero:</h4>
                    <input value="<?php print $eco["numero_funcionario"] ?>" type="text" class="form-control" name="numero_funcionario" readonly>
                </div>
                <div class="col-md">
                    <h4>Complemento:</h4>
                    <input value="<?php print $eco["complemento_funcionario"] ?>" type="text" class="form-control" name="complemento_funcionario" readonly>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md">
                    <h4>Cidade:</h4>
                    <input value="<?php print $eco["cidade_funcionario"] ?>" type="text" class="form-control" name="cidade_funcionario" readonly>
                </div>
                <div class="col-md">
                    <h4>Estado:</h4>
                    <input value="<?php print $eco["uf_funcionario"] ?>" type="text" class="form-control" name="uf_funcionario" readonly>
                </div>
            </div>
            <input value="<?php print $eco["senha_funcionario"] ?>" type="hidden" class="form-control" name="senha_funcionario" readonly>
            <div class="d-flex justify-content-around">
                <button class="btn btn-success" style="margin-top: 3%; margin-bottom: 1%;" type="submit">APROVAR</button>
                <a class="btn btn-danger" href="?pageadm=sal-funcionario&acao=reprovar&id_curriculo=<?php print $eco["id_curriculo"]?>" style="margin-top: 3%; margin-bottom: 1%">REPROVAR</a>
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

a#link{
    color:#c08a02;
}
a:hover#link {
    font-weight: bold;
    text-decoration:none;
    color:#e8b200;  
}
</style>
