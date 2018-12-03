<div class="col-12 row">
<!-- Js para alert de ajuda -->
<script type="text/javascript">
function insereTexto()
{document.getElementById('divHelp').innerHTML = '<div class="alert alert-secondary alert-dismissible fade show" role="alert">Código de autenticação necessário para evitar cadastros indevidos nesta área do site. <br/> Caso não tenha o código procure um moderador!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';}
</script>

<div class="col-sm-9 col-md-7 col-lg-10 mx-auto" style="margin-top: 3%; margin-bottom:3%;">
        <div class="card card-signin my-5">
            <div class="card-body col-10 mx-auto">
                <h5 class="card-title text-center">Confirmação</h5>
                <form action="?page=verif-prof" method="POST">
                <div id="divHelp"> 
                    <!-- O alert aparecerá aqui -->
                </div>
                    <div class="form-row">
                        
                        <div class="col-md" style="margin-top:3%">
                        <div class="d-flex justify-content-between">
                            <h5>Codigo:</h5><a id="quest" class="btn" onclick='insereTexto()' value='Inserir texto'><i class="far fa-question-circle"></i></a>
                        </div>    
                            <input id="entrace" type="text" class="form-control" name="codigo_ativacao" required>
                            <?php 
                            if(isset($_SESSION['incorectcode'])): 
                            ?>
                            <div class="alert alert-danger" role="alert" style="margin-top: 2%;">
                                <strong>Erro</strong>: Codigo Incorreto, Digite Novamente!
                            </div>
                            <?php
                            endif;
                            unset($_SESSION['incorectcode']);  
                            ?>
                        </div>
                    </div>

                <hr class="my-4" style="background-color:#482c58">
                <div class="col-1 align-items-center mx-auto">
                    <button id="btn" class="btn btn-primary text-uppercase" type="submit">Enviar</button>
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
    margin-bottom: 1%;
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