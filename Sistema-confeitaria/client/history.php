<?php
//Verificar se ele logou
include("./pedido/verifica.php");

    //Gambiarra para mostrar o nome do client
    $nome = "SELECT * FROM client WHERE cpf_client = '{$_SESSION['usuario']}'";

    $result = $conn->query($nome) or die ($conn->error);

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

<div id="body" class="container-fluid" style="margin-top:5%">
    <section id="menu" class="col-12 mx-auto">
        <div class="col-4 justify-content-center mx-auto">
            <h4 style="text-align: center;">Historico de <?php print $ecu["nome_client"] ?><h4>
        </div>
        <div class="col-2 justify-content-center mx-auto">
            <img src="img/encomenda.png" width="75%" height="75%" style="margin-bottom: 3%"/>
        </div>
        <div class="col-10 justify-content-center mx-auto" style="margin-top: 3%;">

<?php
        
        $sql = "SELECT p.*, s.*, c.*, r.*, cl.* 
                FROM pedido AS p
                INNER JOIN client AS cl
                ON cl.id_client = p.client_id_client
                INNER JOIN sabor AS s
                ON s.id_sabor = p.sabor_id_sabor
                INNER JOIN recheio AS r
                ON r.id_recheio = p.recheio_id_recheio
                INNER JOIN cobertura AS c
                ON c.id_cobertura = p.cobertura_id_cobertura
                WHERE cpf_client = '{$_SESSION['usuario']}'";

        $res = $conn->query($sql) or die ($conn->error);

        $qtd = $res->num_rows;

        if($qtd > 0){
            print "<div class='alert alert-success col-6 mx-auto' role='alert'> Estão registrados <b>$qtd</b> encomenda(s)</div>";
            print "<table class='table table-striped table-dark col-12 mx-auto' style='border-style: solid; border-width: 2px; border-color:#e8b200;'>";
                print "<tr class=''>";
                print "<th>#</th>";
                print "<th>Cliente</th>";
                print "<th>Sabor</th>";
                print "<th>Cobertura</th>";
                print "<th>Opcionais Cobertura</th>";
                print "<th>Recheio</th>";
                print "<th>Opcionais Recheio</th>";
                print "<th>Peso (Kg)</th>";
                print "<th>Forma</th>";
                print "<th>Data de Entrega</th>";
                print "<th>Data e Horario do Pedido</th>";
                print "</tr>";
                    while($row = $res->fetch_assoc()){
                        print "<tr>";
                        print "<td>".$row["id_pedido"]."</td>";
                        print "<td>".$row["nome_client"]."</td>";
                        print "<td>".$row["nome_sabor"]."</td>";
                        print "<td>".$row["sabor_cobertura"]."</td>";
                        print "<td>".$row["opcionais_cobertura"]."</td>";
                        print "<td>".$row["sabor_recheio"]."</td>";
                        print "<td>".$row["opcionais_recheio"]."</td>";
                        print "<td>".$row["peso_pedido"]."(Kg)</td>";
                        print "<td>".$row["forma_pedido"]."</td>";
                        print "<td>".$row["dataentrega_pedido"]."</td>";
                        print "<td>".$row["data_pedido"]."</td>";
                        print "</tr>"; 
                    }
            print "</table>";
           
            }else{
                print "<div class='alert alert-danger col-6 mx-auto' role='alert'> Não existem encomendas registrados!</div>";
            }
?>
        </div>
    </section>
</div>
<style>
#menu{
    margin-top:10%;
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
}

h6{
    color: #e8b200;
    font-family: 'Baloo Bhaijaan', cursive;
}
</style>