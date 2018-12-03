<?php include("../aluno/verifica.php");?>
<div class="col-sm-9 col-md-7 col-lg-11 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body col-10 mx-auto">
                <h5 class="card-title text-center">Historico</h5>
<?php
    $sql = "SELECT dr.*, a.*
            FROM respostadesafio AS dr
            INNER JOIN aluno AS a
            ON a.id_aluno = dr.aluno_id_aluno
            WHERE email_aluno = '{$_SESSION['usuario']}'";

$res = $conn->query($sql) or die ($conn->error);

$qtd = $res->num_rows;

        if($qtd > 0){
            print "<div class='alert alert-success col-8 mx-auto' role='alert'> Você respondeu <b>$qtd</b> desafios(s)<br/> Que se encontram listadas abaixo em ordem Recente!</div>";
            print "<table class='table table-striped table-dark col-12 mx-auto' style='border-style: solid; border-width: 2px; border-color:#green;'>";
                print "<tr class=''>";
                print "<th>#</th>";
                print "<th>ID Questão</th>";
                print "<th>Data da Resposta</th>";
                print "<th>Visualizar</th>";
                print "</tr>";
            while($row = $res->fetch_assoc()){
                print "<tr>";
                print "<td>".$row["id_resposta"]."</td>";
                print "<td>".$row["desafio_id_desafio"]."</td>";
                print "<td>".$row["data_resposta"]."</td>";
                print "<td><a class='btn btn-outline-light' href='?page=analise-resposta&id_resposta=".$row["id_resposta"]."'><i class='fas fa-search'></i></a></td>";
                print "</tr>;";
                
            }
            print "</table>";
        }else{
            print "<div class='alert alert-danger col-6 mx-auto' role='alert'> Não existem respostas registrados!</div>";
        }
?>
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