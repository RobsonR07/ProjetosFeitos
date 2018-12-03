<div class="container" style="margin-top:2%;">
<h4>Bem Vindo! <?php print $ecu["nome_aluno"]?></h5>
<?php 
    
    $sql1 ="SELECT dr.*, a.*
            FROM respostadesafio AS dr
            INNER JOIN aluno AS a
            ON a.id_aluno = dr.aluno_id_aluno";

    $sql = "SELECT d.*, p.* 
            FROM desafiogeral AS d
            INNER JOIN professor AS p
            ON p.id_professor = d.professor_id_professor ORDER BY id_desafio DESC";

$res = $conn->query($sql) or die ($conn->error);

$quest = $res->fetch_assoc();

$qtd = $res->num_rows;

$res1 = $conn->query($sql1) or die ($conn->error);

$quest1 = $res1->fetch_assoc();

$qtd1 = $res1->num_rows;
?>

<div class="line"></div>

<div class="col-12">
    <div id="dados" class="col-12">
    <i class="fas fa-user-edit" style="color: #7386D5;"></i> Dados Cadastrados
    </div>

    <div class="col-10" style="margin-top: 3%;">
    <i class="far fa-address-card" style="color: #7386D5;"></i> <b>Nome</b>: <?php print $ecu["nome_aluno"]?><br/>
    <i class="fas fa-user-tag" style="color: #7386D5;"></i> <b>RGM</b>: <?php print $ecu["id_aluno"]?><br/>
    <i class="far fa-envelope-open" style="color: #7386D5;"></i> <b>E-mail</b>: <?php print $ecu["email_aluno"]?><br/>
    <i class="fas fa-user-graduate" style="color: #7386D5;"></i> <b>Curso</b>: <?php print $ecu["curso_aluno"]?><br/>
    </div>

    <div class="line"></div>

    <div id="dados" class="col-12">
    <i class="fas fa-exclamation-triangle" style="color: #7386D5;"></i> Desafios!
    </div>

    <div class="col-10" style="margin-top: 3%;">
    <p>Você tem <?php print $qtd; ?> Desafios! <br/><br/>Você respondeu <?php print $qtd1; ?> Desafios!</p>
    </div>
    
</div>
<div class="line"></div>
</div>

<style>
#dados{
    border: 0;
    box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, 0.2);
    border-radius: 2rem;
}
</style>