<section id="menu" class="col-8 mx-auto">
        <div class="col-4 justify-content-center mx-auto">
                <h4 style="text-align: center;">Armazenamento<h4>
            </div>
            <div class="col-2 justify-content-center mx-auto">
                <img src="./img/disquet.png" width="100%" height="100%"/>
            </div>
<?php

    $nome   = @$_REQUEST["nome_escolhido"];
    $cob    = @$_REQUEST["cobertura_escolhida"];
    $rec    = @$_REQUEST["recheio_escolhido"];
    $sab    = @$_REQUEST["sabor_escolhido"];
    $peso   = @$_REQUEST["peso_pedido"];
    $forma  = @$_REQUEST["forma_pedido"];
    $data   = @$_REQUEST["dataentrega_pedido"];



    switch(@$_REQUEST["acao"]){
        case 'cadastrar':

        $sql = "INSERT INTO pedido (sabor_id_sabor, cobertura_id_cobertura, recheio_id_recheio, client_id_client, peso_pedido, forma_pedido, dataentrega_pedido, data_pedido) 
                VALUES ('$sab','$cob','$rec','$nome','$peso','$forma','$data',NOW())";

        $res = $conn->query($sql);

            if($res==true){
                print"<br/><div class='alert alert-success col-6 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                Encomenda Realizada com sucesso! <a href='index.php?page=cad-pedido' class='alert-link'>Clique aqui</a>, Para realizar nova encomenda!
            </div>";
            }else{ 
                print"<br/><div class='alert alert-danger col-6 mx-auto' role='alert' style='margin-top: 5%; margin-bottom: 10%;'>
                Erro no cadastro! <a href='index.php?page=cad-pedido' class='alert-link'>Tente novamente</a>!
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