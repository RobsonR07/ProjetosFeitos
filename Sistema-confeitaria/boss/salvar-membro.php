<section id="menu" class="col-8 mx-auto">
        <div class="col-4 justify-content-center mx-auto">
                <h4 style="text-align: center;">Armazenamento<h4>
            </div>
            <div class="col-2 justify-content-center mx-auto">
                <img src="../img/disquet.png" width="100%" height="100%"/>
            </div>
<?php

    $nome   = @$_REQUEST["nome_funcionario"];
    $cargo  = @$_REQUEST["cargo_funcionario"];
    $cpf    = @$_REQUEST["cpf_funcionario"];
    $sex    = @$_REQUEST["sexo_funcionario"];
    $tel    = @$_REQUEST["telefone_funcionario"];
    $cep    = @$_REQUEST["cep_funcionario"];
    $ender  = @$_REQUEST["endereco_funcionario"];
    $numero = @$_REQUEST["numero_funcionario"];
    $comple = @$_REQUEST["complemento_funcionario"];
    $cidade = @$_REQUEST["cidade_funcionario"];
    $uf     = @$_REQUEST["uf_funcionario"];
    $senha  = @$_REQUEST["senha_funcionario"];
    $id     = @$_REQUEST["id_funcionario"];
    

    switch(@$_REQUEST["acao"]){
        case 'promover':
        
            //Adiciona na tabela dos funcionarios
            $sql = "UPDATE funcionario
                    SET nome_funcionario = '$nome', cargo_funcionario = '$cargo', senha_funcionario = '$senha', sexo_funcionario = '$sex', cpf_funcionario = '$cpf', cep_funcionario = '$cep', endereco_funcionario = '$ender', cidade_funcionario = '$cidade', uf_funcionario = '$uf', numero_funcionario = '$numero',complemento_funcionario = '$comple', telefone_funcionario = '$tel'
                    WHERE id_funcionario = ".$id;

            $res = $conn->query($sql);

                if($res==true){
                    print"<br/><div class='alert alert-success col-6 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                    Funcionario Promovido com sucesso! <br/> <a href='?pageadm=admin' class='alert-link'>Clique</a>, Para retornar!
                </div>";
                    
                }else{ 
                    print"<br/><div class='alert alert-danger col-6 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                    Erro no cadastro! <a href='?pageadm=admin' class='alert-link'>Tente novamente</a>!
                </div>";
                }
        break;
       
        case 'vala':

            //Mete vala em tutututututu
            $dele   = " DELETE FROM funcionario
                        WHERE id_funcionario = ".$_REQUEST["id_funcionario"];

            $resde = $conn->query($dele);

            if($resde==true){
                print"<br/><div class='alert alert-success col-6 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                Funcionario Demitido com sucesso! <br/> <a href='?pageadm=admin' class='alert-link'>Clique</a>, Para retornar!
            </div>";
                
            }else{ 
                print"<br/><div class='alert alert-danger col-6 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                Erro na Demissão! <a href='?pageadm=admin' class='alert-link'>Tente novamente</a>!
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