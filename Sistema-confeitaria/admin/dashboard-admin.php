<?php
//Verificar se ele logou
include("verifica-admin.php");
    //Gambiarra para mostrar o nome do client
    $name = "SELECT * FROM funcionario WHERE cpf_funcionario = '{$_SESSION['funcionario']}'";

    $result = $conn->query($name) or die ($conn->error);

    $ecu = $result->fetch_assoc();

?>
<!-- Codes de consultas sql -->
<!-- Consulta client -->
<?php 
    $sqlclient = "SELECT * FROM client ORDER BY id_client DESC";
    $resclient = $conn->query($sqlclient) or die ($conn->error);
    $qtdclient = $resclient->num_rows;
    $rowclient = $resclient->fetch_assoc();
?>

<!-- Consulta encomendas -->
<?php 
    $sqlpedido = "SELECT * FROM pedido ORDER BY id_pedido DESC";
    $respedido = $conn->query($sqlpedido) or die ($conn->error);
    $qtdpedido = $respedido->num_rows;
    $rowpedido = $respedido->fetch_assoc();
?>

<!-- Consulta Sabor -->
<?php 
    $sqlsabor = "SELECT * FROM sabor ORDER BY id_sabor DESC";
    $ressabor = $conn->query($sqlsabor) or die ($conn->error);
    $qtdsabor = $ressabor->num_rows;
    $rowsabor = $ressabor->fetch_assoc();
?>

<!-- Consulta Cobertura -->
<?php 
    $sqlcob = "SELECT * FROM cobertura ORDER BY id_cobertura DESC";
    $rescob = $conn->query($sqlcob) or die ($conn->error);
    $qtdcob = $rescob->num_rows;
    $rowcob = $rescob->fetch_assoc();
?>

<!-- Consulta Recheio -->
<?php 
    $sqlrec = "SELECT * FROM recheio ORDER BY id_recheio DESC";
    $resrec = $conn->query($sqlrec) or die ($conn->error);
    $qtdrec = $resrec->num_rows;
    $rowrec = $resrec->fetch_assoc();
?>


<!-- Code HTML da pagina -->
<div id="body" class="container-fluid" style="margin-top:2%"> 
    <!-- Sistema de alerts ao admin -->
    <center><h3>ALERTAS ADMINISTRATIVOS</h3>
    
    <!-- Card de boas vindas -->
        <div class="card border-warning mb-3" style="max-width: 18rem; box-shadow: 10px 10px rgba(0,0,0,0.7);">
            <div class="card-header">
                <p style="color: #ffc107;font-weight: bold; text-align: center;">Bem Vindo <?php print $ecu["cargo_funcionario"].": ".$ecu["nome_funcionario"];?></p>
            </div>
            <div class="card-body text-warning">
                <h5 class="card-title">Sessão Iniciada...</h5>
                <p class="card-text">Administre produtos na barra de navegação.<br/> E veja nos alertas abaixo os status do banco de dados da confeitaria.</p>
            </div>
        </div></center>

    <center>
    <div class="card-deck justify-content-center" style="margin-top: 3%;">

        <!-- Card de clientes cadastrados e o ultimo registro --> 
        <div class="card border-danger mb-3" style="max-width: 18rem; box-shadow: 10px 10px rgba(0,0,0,0.7);">
            <div class="card-header">
                <p style="color: #dc3545;font-weight: bold; text-align: center;">Clientes</p>
            </div>
            <div class="card-body text-danger">
                <h5 class="card-title" style="text-align: center;">Status</h5>
                <p class="card-text" style="text-align: center;">Temos registrados <?php print("<b>".$qtdclient."</b>");?> Cliente(s).<br/> Sendo o ultimo registro de <br/> <?php print("<b>".$rowclient["nome_client"]."</b>");?>.</p>
            </div>
        </div>

        <!-- Card de Pedidos cadastrados e o ultimo pedido -->
        <div class="card border-danger mb-3" style="max-width: 18rem; box-shadow: 10px 10px rgba(0,0,0,0.7);">
            <div class="card-header">
                <p style="color: #dc3545;font-weight: bold; text-align: center;">Encomendas</p>
            </div>
            <div class="card-body text-danger">
                <h5 class="card-title" style="text-align: center;">Status</h5>
                <p class="card-text" style="text-align: center;">Temos registrados <?php print("<b>".$qtdpedido."</b>");?> Encomenda(s). <br/>Sendo a ultima encomenda de <?php print("<b>".$rowpedido["peso_pedido"]."</b>");?> gramas, com entrega para <?php print("<b>".$rowpedido["dataentrega_pedido"]."</b>");?> .</p>
            </div>
        </div>
    </div></center>

    <center>
    <div class="card-deck justify-content-center" style="margin-top: 2%;">
        <!-- Card de exibir o numero de sabores cadastrado e o ultimo registrado-->
        <div class="card border-success mb-3" style="max-width: 18rem; box-shadow: 10px 10px rgba(0,0,0,0.7);">
            <div class="card-header">
                <p style="color: #28a745;font-weight: bold; text-align: center;">Sabores</p>
            </div>
            <div class="card-body text-success">
                <h5 class="card-title" style="text-align: center;">Status</h5>
                <p class="card-text" style="text-align: center;">Temos registrados <?php print("<b>".$qtdsabor."</b>");?> sabor(es).<br/> Sendo o ultimo registro de <br/> <?php print("<b>".$rowsabor["nome_sabor"]."</b>");?>.</p>
            </div>
        </div>

        <!-- Card de exibir o numero de coberturas registradas e o ultimo registro -->
        <div class="card border-success mb-3" style="max-width: 18rem; box-shadow: 10px 10px rgba(0,0,0,0.7);">
            <div class="card-header">
                <p style="color: #28a745;font-weight: bold; text-align: center;">Coberturas</p>
            </div>
            <div class="card-body text-success">
                <h5 class="card-title" style="text-align: center;">Status</h5>
                <p class="card-text" style="text-align: center;">Temos registrados <?php print("<b>".$qtdcob."</b>");?> cobertura(s).<br/> Sendo o ultimo registro de <br/> <?php print("<b>".$rowcob["sabor_cobertura"]."</b> e <b>".$rowcob["opcionais_cobertura"]."</b>");?>.</p>
            </div>
        </div>

        <!-- Card de exibir o numero de recheio cadastrados e o ultimo registrado -->
        <div class="card border-success mb-3" style="max-width: 18rem; box-shadow: 10px 10px rgba(0,0,0,0.7);">
            <div class="card-header">
                <p style="color: #28a745;font-weight: bold; text-align: center;">Recheios</p>
            </div>
            <div class="card-body text-success">
                <h5 class="card-title" style="text-align: center;">Status</h5>
                <p class="card-text" style="text-align: center;">Temos registrados <?php print("<b>".$qtdrec."</b>");?> recheio(s).<br/> Sendo o ultimo registro de <br/> <?php print("<b>".$rowrec["sabor_recheio"]."</b> e <b>".$rowrec["opcionais_recheio"]."</b>");?>.</p>
            </div>
        </div>

    </div></center>

</div>
<style>
body{
    background-color: #DCDCDC;
}
h3{
    color:#e8b200;
    font-family: 'Noto Sans', sans-serif;
    text-shadow: 2px 2px rgba(0,0,0,0.5);
    margin-bottom: 2%;
}
</style>
