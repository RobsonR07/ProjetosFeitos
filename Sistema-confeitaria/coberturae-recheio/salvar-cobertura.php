<section id="menu" class="col-8 mx-auto">
        <div class="col-4 justify-content-center mx-auto">
                <h4 style="text-align: center;">Armazenamento<h4>
            </div>
            <div class="col-2 justify-content-center mx-auto">
                <img src="../img/disquet.png" width="100%" height="100%"/>
            </div>

<?php

    $sabor  = @$_REQUEST["sabor_cobertura"];
    $opcio  = @$_REQUEST["opcionais_cobertura"];

    switch(@$_REQUEST["acao"]){
        case 'cadastrar':

            $sql = "INSERT INTO cobertura (sabor_cobertura, opcionais_cobertura) VALUES ('$sabor','$opcio')";

            $res = $conn->query($sql);

            if($res==true){
                print"<br/><div class='alert alert-success col-6 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                Cadastro Realizado com sucesso! <a href='index-admin.php?page=cad-core' class='alert-link'>Cadastrar Nova Cobertura</a>, Para realizar novo cadastro!
            </div>";
            }else{ 
                print"<br/><div class='alert alert-danger col-6 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                Erro no cadastro! <a href='index-admin.php?page=cad-core' class='alert-link'>Tente novamente</a>!
            </div>";
            }
        break;
    }

?>
   </section>

<style>
#body{
	background-color: #fff;
}

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
</style>