
    <section id="menu" class="col-8 mx-auto">
        <div class="col-4 justify-content-center mx-auto">
                <h4 style="text-align: center;">Armazenamento<h4>
            </div>
            <div class="col-2 justify-content-center mx-auto">
                <img src="./img/disquet.png" width="100%" height="100%"/>
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

    switch(@$_REQUEST["acao"]){
        case 'cadastrar':
        
            $sql = "INSERT INTO funcionariocurriculo (nome_funcionario, cargo_funcionario, cpf_funcionario, sexo_funcionario, cep_funcionario, endereco_funcionario, cidade_funcionario, uf_funcionario, numero_funcionario, complemento_funcionario, telefone_funcionario, senha_funcionario) 
                    VALUES ('$nome','$cargo','$cpf','$sex','$cep','$ender','$cidade','$uf','$numero','$comple','$tel', md5('$senha'))";

            $res = $conn->query($sql);

                if($res==true){
                    print"<br/><div class='alert alert-success col-6 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                    Curriculo Enviado com sucesso! Aguarde o setor RH de nossa empresa realizar a analise de seus dados.<br/> <a href='index.php?page=home' class='alert-link'>Clique</a>, Para retornar!
                </div>";
                }else{ 
                    print"<br/><div class='alert alert-danger col-6 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                    Erro no cadastro! <a href='index.php?page=trab' class='alert-link'>Tente novamente</a>!
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