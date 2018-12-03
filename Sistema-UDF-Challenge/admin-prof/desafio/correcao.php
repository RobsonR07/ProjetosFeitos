<?php include("../prof/verifica.php");

    $sql1 = "SELECT dr.*, a.*
            FROM respostadesafio AS dr
            INNER JOIN aluno AS a
            ON a.id_aluno = dr.aluno_id_aluno";
    
    $sql = "SELECT d.*, p.* 
            FROM desafiogeral AS d
            INNER JOIN professor AS p
            ON p.id_professor = d.professor_id_professor ORDER BY id_desafio DESC";

    $res = $conn->query($sql) or die ($conn->error);

    $quest = $res->fetch_assoc();

    $res1 = $conn->query($sql1) or die ($conn->error);

    $quest1 = $res1->fetch_assoc();

?>
<div class="col-sm-9 col-md-7 col-lg-11 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body col-10 mx-auto">
                <h5 class="card-title text-center">Corrigir Desafio De <?php print $quest1["nome_aluno"]?></h5>
                <form action="?page=sal-correcao&acao=cadastrar" method="POST">
                    <div class="form-row">
                            <input type="hidden" value="<?php print $quest["id_desafio"]?>" name="id_desafio">
                            <input type="hidden" value="<?php print $quest1["aluno_id_aluno"]?>" name="id_aluno">
                            <input type="hidden" value="<?php print $quest1["id_resposta"]?>" name="id_resposta">
                        <div class="col-md" style="margin-top:3%">
                            <h5>Linguagem</h5>
                            <p><?php print $quest["linguagem_desafio"];?></p>
                        </div>
                        
                        <div class="col-md" style="margin-top:3%">
                            <h5>Prazo de Entrega</h5>
                            <p><?php print $quest["prazo_desafio"];?></p>
                        </div>

                        <div class="col-md" style="margin-top:3%">
                            <h5>Dificuldade</h5>
                            <p><?php print $quest["dificuldade_desafio"];?></p>
                        </div>
                    </div>

                    <div class="form-row">
                        
                        <div class="col-md" style="margin-top:3%">
                            <h5>Descrição do Desafio</h5>
                            <p><?php print $quest["descricao_desafio"];?></p>   
                        </div>
                    </div>

                    <div class="line"></div>
                    
                    <div class="col-md" style="margin-top:3%">
                            <h5>Resposta enviada</h5>
                            <p><?php print $quest1["resposta_desafio"];?></p>
                    </div>

                    <div class="col-md" style="margin-top:3%">
                            <h5>Correção</h5>
                            <select id="entrace" name="correcao_resposta">
                            <option selected value="Não Corrigido">Escolha</option>
                            <option value="Correto">Correto</option>
                            <option value="Incorreto">Incorreto</option>
                            </select>
                    </div>

                <hr class="my-4" style="background-color:#482c58">
                <div class="col-1 align-items-center mx-auto">
                    <button id="btn" class="btn btn-primary text-uppercase" type="submit">Enviar</button>
                </div>
                </form>
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