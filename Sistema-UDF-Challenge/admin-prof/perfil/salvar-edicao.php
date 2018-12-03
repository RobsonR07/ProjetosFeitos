<div class="col-sm-9 col-md-7 col-lg-10 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body col-10 mx-auto">
                <h5 class="card-title text-center">Armazenamento de <?php print $ecu["nome_professor"]; ?></h5>


<?php

    $nome   = @$_REQUEST["nome_professor"];
    $email  = @$_REQUEST["email_professor"];


    switch(@$_REQUEST["acao"]){

        case 'salvar':

        $sql = "UPDATE professor
					SET nome_professor = '$nome', email_professor = '$email'
					WHERE email_professor = '{$_SESSION['usuarioprof']}'";
					
            $res = $conn->query($sql);
            
            if($res==true){
                print"<br/><div class='alert alert-success col-8 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                Cadastro Editado com sucesso!<br/> <a href='?page=home' class='alert-link'>Clique aqui</a>, Para retornar a pagina principal!
                </div>";
            }else{ 
                print"<br/><div class='alert alert-danger col-8 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                Erro na edição! <a href='?page=perfil' class='alert-link'>Tente novamente</a>!
                </div>";
            }
        break;

        case 'deletar':
            
            $sql = "DELETE FROM professor 
                    WHERE email_professor = '{$_SESSION['usuarioprof']}'";
			
            $res = $conn->query($sql);
            
            if($res==true){
                print"<br/><div class='alert alert-success col-8 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                Cadastro Deletado com sucesso!<br/> <a href='../aluno/logout.php' class='alert-link'>Clique aqui</a>, Para retornar a pagina principal!
                </div>";
            }else{ 
                print"<br/><div class='alert alert-danger col-8 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                Erro na exclução! <a href='index.php?page=delete-client' class='alert-link'>Tente novamente</a>!
                </div>";
            }

        break;
    
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