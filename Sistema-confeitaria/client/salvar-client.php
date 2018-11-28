
    <section id="menu" class="col-8 mx-auto">
        <div class="col-4 justify-content-center mx-auto">
                <h4 style="text-align: center;">Armazenamento<h4>
            </div>
            <div class="col-2 justify-content-center mx-auto">
                <img src="./img/disquet.png" width="100%" height="100%"/>
            </div>
<?php

    $nome   = @$_REQUEST["nome_client"];
    $cpf    = @$_REQUEST["cpf_client"];
    $tel    = @$_REQUEST["telefone_client"];
    $cep    = @$_REQUEST["cep_client"];
    $ender  = @$_REQUEST["endereco_client"];
    $numero = @$_REQUEST["numero_client"];
    $comple = @$_REQUEST["complemento_client"];
    $cidade = @$_REQUEST["cidade_client"];
    $uf     = @$_REQUEST["uf_client"];
    $senha  = @$_REQUEST["senha_client"];

    switch(@$_REQUEST["acao"]){
        case 'cadastrar':

            $sql = "INSERT INTO client (nome_client, cpf_client, cep_client, endereco_client, cidade_client, uf_client, numero_client, complemento_client, telefone_client, senha_client) 
            VALUES ('$nome','$cpf','$cep','$ender','$cidade','$uf','$numero','$comple','$tel', md5('$senha'))";

            $res = $conn->query($sql);

                if($res==true){
                    print"<br/><div class='alert alert-success col-6 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                    Cadastro Realizado com sucesso! <a href='index.php?page=cad-client' class='alert-link'>Cadastrar Novo Cliente</a>, Para realizar novo cadastro!
                </div>";
                }else{ 
                    print"<br/><div class='alert alert-danger col-6 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                    Erro no cadastro! <a href='index.php?page=cad-client' class='alert-link'>Tente novamente</a>!
                </div>";
                }
        break;

        case 'editar':

            $sql = "UPDATE client
					SET nome_client = '$nome', cpf_client = '$cpf', cep_client = '$cep', endereco_client = '$ender', cidade_client = '$cidade', uf_client = '$uf', numero_client = '$numero',complemento_client = '$comple', telefone_client = '$tel'
					WHERE cpf_client = '{$_SESSION['usuario']}'";
					
            $res = $conn->query($sql);
            
            if($res==true){
                print"<br/><div class='alert alert-success col-6 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                Cadastro Editado com sucesso! <a href='index.php?page=edit-client' class='alert-link'>Clique aqui</a>, Para retornar a pagina principal!
                </div>";
            }else{ 
                print"<br/><div class='alert alert-danger col-6 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                Erro na edição! <a href='index.php?page=cad-pedido' class='alert-link'>Tente novamente</a>!
                </div>";
            }

        break;

        case 'excluir':
            
            $sql = "DELETE FROM client 
                    WHERE cpf_client = '{$_SESSION['usuario']}'";
			
            $res = $conn->query($sql);
            
            if($res==true){
                print"<br/><div class='alert alert-success col-6 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                Cadastro Deletado com sucesso! <a href='index.php?page=exit-client' class='alert-link'>Clique aqui</a>, Para retornar a pagina principal!
                </div>";
            }else{ 
                print"<br/><div class='alert alert-danger col-6 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                Erro na exclução! <a href='index.php?page=delete-client' class='alert-link'>Tente novamente</a>!
                </div>";
            }

        break;

    }

?>
    </section>

<style>
#body{
	background-color: #ffff;
}

#menu{
    margin-top:5%;
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
</style>