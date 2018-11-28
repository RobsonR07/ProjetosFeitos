
    <section id="menu" class="col-8 mx-auto">
        <div class="col-4 justify-content-center mx-auto">
            <h4 style="text-align: center;">Cadastro de Cliente<h4>
        </div>
        <div class="col-2 justify-content-center mx-auto">
            <img src="./img/cadastro.png" width="100%" height="100%"/>
        </div><br/>
        <form action="index.php?page=sal-client&acao=cadastrar" method="POST">

            <div class="form-row">
                <div class="col-md">
                    <h4>*Nome Completo:</h4>
                    <input id="validationServer01" type="text" class="form-control" name="nome_client" required>
                </div>
                <div class="col-md">
                    <h4>*CPF:</h4>
                    <input id="cpf" type="text" class="form-control" name="cpf_client" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md">
                    <h4>*Telefone:</h4>
                    <input id="tel" type="text" class="form-control" name="telefone_client" required>
                </div>
                <div class="col-md">
                    <h4>*CEP</h4>
                    <input id="cep" type="text" class="form-control" name="cep_client" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md">
                    <h4>*Endereço:</h4>
                    <input id="endereco" type="text" class="form-control" name="endereco_client" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md">
                    <h4>*Numero:</h4>
                    <input id="validationServer06" type="text" class="form-control" name="numero_client" required>
                </div>
                <div class="col-md">
                    <h4>Complemento:</h4>
                    <input type="text" class="form-control" name="complemento_client" placeholder="Exemplo: Ap. 101">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md">
                    <h4>*Cidade:</h4>
                    <input id="cidade" type="text" class="form-control" name="cidade_client" required>
                </div>
                <div class="col-md">
                    <h4>*Estado:</h4>
                    <input id="uf_client" type="text" class="form-control" name="uf_client" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md">
                    <h4>*Senha:</h4>
                    <input id="senha" type="password" class="form-control" name="senha_client" required>
                </div>
                <div class="col-md">
                    <h4>*Digite novamente:</h4>
                    <input id="senha-confir" type="password" class="form-control" name="repeticao_client" required>
                </div>
            </div>
            <div class="form-group">
                <center><button class="btn btn-warning" type="submit" style="margin-top:2%">ENVIAR</a></center>
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
</style>
