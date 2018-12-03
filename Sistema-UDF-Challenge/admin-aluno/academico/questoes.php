<?php include("../aluno/verifica.php");?>
<div class="col-12">
<?php
        $sql = "SELECT d.*, p.* 
                FROM desafiogeral AS d
                INNER JOIN professor AS p
                ON p.id_professor = d.professor_id_professor ORDER BY id_desafio DESC";

        $res = $conn->query($sql) or die ($conn->error);

        $qtd = $res->num_rows;

        if($qtd > 0){
            print "<div class='alert alert-success col-8 mx-auto' role='alert'> Estão registradas <b>$qtd</b> Questõe(s)<br/> Que se encontram listadas abaixo em ordem Recente!</div>";

            while($row = $res->fetch_assoc()){
                    
                print " <div class='card' style='margin-top:8%;'>
                        <h5 class='card-header'>Desafio de ".$row["nome_professor"]."</h5>
                        <div class='card-body'>
                            <h5 class='card-title'>Linguagem ".$row["linguagem_desafio"]."</h5>
                            <p class='card-text'>".$row["descricao_desafio"]."</p>
                            <div class='d-flex justify-content-between'>
                                <h7>Dificuldade: ".$row["dificuldade_desafio"]."</h7>
                                <a href='?page=responder&id_desafio=".$row["id_desafio"]."' class='btn btn-primary'>Responder</a>
                            </div>
                        </div>
                        <div class='card-footer text-muted'>
                            Prazo Final: ".$row["prazo_desafio"]." 
                        </div>
                        </div>";
            }
        }else{
            print "<div class='alert alert-danger col-8 mx-auto' role='alert'> Não existem questões registradas!</div>";
            }

?>
</div>