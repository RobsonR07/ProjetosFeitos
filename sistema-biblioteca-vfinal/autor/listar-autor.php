<section id="menu" class="col-8 mx-auto">
    <center><h1>Listar Autor</h1></center>

<?php
    $sql = "SELECT * FROM autor";

    $res = $conn->query($sql) or die ($conn->error);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<div class='alert alert-success col-6 mx-auto' role='alert'> Estão registrados <b>$qtd</b> autor(es)</div>";
        print "<table class='table table-bordered table-striped table-hober col-6 mx-auto'>";
            print "<tr class='bg-info'>";
            print "<th>#</th>";
            print "<th>Nome do Autor</th>";
            print "<th>Ação</th>";
            print "</tr>";
                while($row = $res->fetch_assoc()){
                    print "<tr class='table-light'>";
                    print "<td>".$row["id_autor"]."</td>";
                    print "<td>".$row["nome_autor"]."</td>";
                    print "<td></td>";
                    print "</tr>"; 
                }
        print "</table>";
       
        }else{
            print "<div class='alert alert-danger col-6 mx-auto' role='alert'> Não existem autores registrados!</div>";
        }
?>

</section>
<style>
#menu{
    margin-top:10%;
    margin-left:20%;
    margin-right:20%;
    padding:0px, 10px, 0px, 10px;
    background-color:rgba(211, 211, 211, 0.9);
    border-style: solid;
    border-width: 5px;
    border-color:rgba(255, 255, 255, 0.69);
    border-radius: 5px 20px;
}
h1{
    color: #FFFFFF
}
</style>