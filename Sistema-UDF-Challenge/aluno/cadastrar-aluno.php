<div class="col-12 row">
<div class="col-sm-9 col-md-7 col-lg-10 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body col-10 mx-auto">
                <h5 class="card-title text-center">Novo Registro</h5>
                <form action="index.php?page=sal-aluno&acao=cadastrar" method="POST">
                    <div class="form-row">
                        
                        <div class="col-md" style="margin-top:3%">
                            <h5>Nome Completo</h5>
                            <input id="entrace" type="text" class="form-control" name="nome_aluno" required>
                        </div>
                        
                        <div class="col-md" style="margin-top:3%">
                            <h5>RGM</h5>
                            <input id="entrace" type="text" class="form-control" name="rgm_aluno" required>
                        </div>
                    </div>

                    <div class="form-row">
                        
                        <div class="col-md" style="margin-top:3%">
                            <h5>Email</h5>
                            <input id="entrace" type="email" id="inputEmail" class="form-control" name="email_aluno" required autofocus>
                        </div>
                        
                        <div class="col-md" style="margin-top:3%">
                            <h5>Confirmar Email</h5>
                            <input id="entrace" type="email" id="inputEmail" class="form-control" name="email_confirm" required autofocus>
                        </div>
                    </div>
                   <!-- Fazer Sistema de Confirmação na page de Salvar Cadastro! -->

                    <div class="form-row">
                        
                        <div class="col-md" style="margin-top:3%">
                            <div class="d-flex justify-content-between">
                                <h5>Senha</h5>
                                <a id="quest" class="btn" data-toggle="tooltip" data-html="true" title="Limite 10 caracteres!"><i class="far fa-question-circle"></i></a>
                            </div>
                            <input type="password" id="inputPassword" class="form-control" maxlength="10" name="senha_aluno" required>
                        </div>
                        
                        <div class="col-md" style="margin-top:3%">

                            <h5>Confirmar Senha</h5>
                            <input type="password" id="inputPassword" class="form-control" maxlength="10" name="senha_confirm" required>
                        </div>
                    </div>

                    <div class="form-group" style="margin-top:3%">
                        <h5>Curso</h5>
                        <select id="entrace" class="form-control" id="exampleFormControlSelect1" name="curso_aluno" required>
                        
                        <option selected value="Não Informado">
                            ----------Escolha Um Curso-----------
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
                <div class="col-1 align-items-center mx-auto">
                    <button class="btn btn-primary text-uppercase" type="submit">Enviar</button>
                </div>
                </form>
            </div>
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


.btn {
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