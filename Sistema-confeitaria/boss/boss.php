<!-- Codes de consultas sql -->
<!-- Consulta Candidatos -->
<?php 
    $sqlcandidato = "SELECT * FROM funcionariocurriculo ORDER BY id_curriculo DESC";
    $rescandidato = $conn->query($sqlcandidato) or die ($conn->error);
    $qtdcandidato = $rescandidato->num_rows;
    $rowcandidato = $rescandidato->fetch_assoc();
?>

<!-- Consulta Funcionarios -->
<?php 
    $sqlfuncionario = "SELECT * FROM funcionario ORDER BY id_funcionario DESC";
    $resfuncionario = $conn->query($sqlfuncionario) or die ($conn->error);
    $qtdfuncionario = $resfuncionario->num_rows;
    $rowfuncionario = $resfuncionario->fetch_assoc();
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

<!-- Menu de Boss -->
<section id="menu" class="col-8 mx-auto">
        <div class="col-4 justify-content-center mx-auto">
            <h4 style="text-align: center;">Staff<h4>
        </div>
        <center><h4>ALERTAS ADMINISTRATIVOS</h4>
    <!-- Card de boas vindas -->
    <div class="card border-warning mb-3" style="max-width: 18rem; box-shadow: 10px 10px rgba(0,0,0,0.7);">
            <div class="card-header">
                <p style="color: #ffc107;font-weight: bold; text-align: center;">Bem Vindo Chef: Robson</p>
            </div>
            <div class="card-body text-warning">
                <h5 class="card-title">Sessão Iniciada...</h5>
                <p class="card-text">Administre produtos na barra de navegação.<br/> E veja nos alertas abaixo os status do banco de dados da confeitaria.</p>
            </div>
    </div></center>

    <center>
    <div class="card-deck justify-content-center" style="margin-top: 3%;">

        <!-- Card de Candidatos cadastrados e o ultimo registro --> 
        <div class="card border-danger mb-3" style="max-width: 18rem; box-shadow: 10px 10px rgba(0,0,0,0.7);">
            <div class="card-header">
                <p style="color: #dc3545;font-weight: bold; text-align: center;">Candidatos</p>
            </div>
            <div class="card-body text-danger">
                <h5 class="card-title" style="text-align: center;">Status</h5>
                <p class="card-text" style="text-align: center;">Temos registrados <?php print("<b>".$qtdcandidato."</b>");?> Candidatos(s).<br/> Sendo o ultimo registro de <br/> <?php print("<b>".$rowcandidato["nome_funcionario"]."</b>");?>.</p>
            </div>
        </div>

        <!-- Card de Pedidos cadastrados e o ultimo pedido -->
        <div class="card border-danger mb-3" style="max-width: 18rem; box-shadow: 10px 10px rgba(0,0,0,0.7);">
            <div class="card-header">
                <p style="color: #dc3545;font-weight: bold; text-align: center;">Empregados</p>
            </div>
            <div class="card-body text-danger">
                <h5 class="card-title" style="text-align: center;">Status</h5>
                <p class="card-text" style="text-align: center;">Temos registrados <?php print("<b>".$qtdfuncionario."</b>");?> empregado(s). <br/>Sendo o ultimo contratado <?php print("<b>".$rowfuncionario["cargo_funcionario"]." ".$rowfuncionario["nome_funcionario"]."</b>");?>.</p>
            </div>
        </div>
    </div></center>

        
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
    
h4{
    color: #e8b200;
    font-family: 'Baloo Bhaijaan', cursive;
    margin-top: 3%;
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
