<section id="menutop" class="col-12 mx-auto">
    <div class="d-flex justify-content-between">
        <h6>Bem Vindo, Chef R. Ribeiro!</h6>

        <a id="link" href="?pageadm=inicio-admin">Inicio</a>

        <a id="link" href="?pageadm=envalar-funcionario">Administrar Funcionarios</a>

        <a id="link" href="?pageadm=ver-trab">Candidatos</a>

        <a id="link" href="?pageadm=exit-admin">Sair</a>
    </div>
</section>

<div id="body" class="container-fluid" style="margin-top:5%">
    <section id="menu" class="col-12 mx-auto">
        <div class="col-4 justify-content-center mx-auto">
            <h4 style="text-align: center;">Lista de Candidatos<h4>
        </div>
        <div class="col-1 justify-content-center mx-auto">
            <img src="../img/cadastro.png" width="100%" height="100%" style="margin-bottom: 3%"/>
        </div>
        <div class="col-10 justify-content-center mx-auto" style="margin-top: 3%;">

<?php
        
        $sql = "SELECT * FROM funcionario";

        $res = $conn->query($sql) or die ($conn->error);

        $qtd = $res->num_rows;

        if($qtd > 0){
            print "<div class='alert alert-success col-6 mx-auto' role='alert'> Estão registrados <b>$qtd</b> encomenda(s)</div>";
            print "<table class='table table-striped table-dark col-12 mx-auto' style='border-style: solid; border-width: 2px; border-color:#e8b200;'>";
                print "<tr class=''>";
                print "<th>#</th>";
                print "<th>Nome</th>";
                print "<th>Cargo</th>";
                print "<th>Verificar</th>";
                print "</tr>";
                    while($row = $res->fetch_assoc()){
                        print "<tr>";
                        print "<td>".$row["id_funcionario"]."</td>";
                        print "<td>".$row["nome_funcionario"]."</td>";
                        print "<td>".$row["cargo_funcionario"]."</td>";
                        print "<td><a class='btn btn-outline-warning' href='?pageadm=analise-funcionario&id_funcionario=".$row["id_funcionario"]."'><i class='fas fa-search'></i></a></td>";
                        print "</tr>";
                    }
            print "</table>";
           
            }else{
                print "<div class='alert alert-danger col-6 mx-auto' role='alert'> Não existem funcionarios registrados!</div>";
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
    
h4{
    color: #e8b200;
    font-family: 'Baloo Bhaijaan', cursive;
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