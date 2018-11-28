<?php
//Verificar se ele logou
include("verifica.php");

    //Gambiarra para mostrar o nome do client
    $name = "SELECT * FROM client WHERE cpf_client = '{$_SESSION['usuario']}'";

    $result = $conn->query($name) or die ($conn->error);

    $ecu = $result->fetch_assoc();

?>
    <!-- Menu Nav Bar -->
    <section id="menutop" class="col-12 mx-auto">
    <div class="d-flex justify-content-between">
        <h6>Bem Vindo, <?php echo $ecu["nome_client"]; ?>!</h6>

        <a id="link" href="?page=cad-pedido">Encomendar</a>

        <a id="link" href="?page=edit-client">Editar Cadastro</a>

        <a id="link" href="?page=list-history">Meus Pedidos</a>

        <a id="link" href="?page=exit-client">Sair</a>
    </div>
    </section>

    <!-- Menu de pedido -->
    <section id="menu" class="col-8 mx-auto">
        <div class="col-4 justify-content-center mx-auto">
            <h4 style="text-align: center;">Realizar Encomenda<h4>
        </div>
        <div class="col-2 justify-content-center mx-auto">
            <img src="./img/carrinho.png" width="100%" height="100%"/>
        </div><br/>
        <form action="index.php?page=sal-pedido&acao=cadastrar" method="POST">

            <div class="form-row">
                <div class="col-md">
                    <h4>Nome:</h4>
                    <!--nome name=nome_escolido -->
                    <input class="form-control" type="hidden" name="nome_escolhido" value="<?php print $ecu['id_client']; ?>">
                    <input class="form-control" type="text" name="enfeite" value="<?php print $ecu['nome_client']; ?>" readonly>
                    
                </div>
                <div class="col-md">
                    <h4>Cobertura:</h4>
                    <?php
                        // Dropdown da Cobertura name=cobertura_escolida
                    
                        $sqlcob = "SELECT * FROM cobertura";
                        $rescob = $conn->query($sqlcob) or die ($conn->error);;
                        

                        print("<select class='form-control' name='cobertura_escolhida'>");
                        while($row_cob = $rescob->fetch_assoc()){
                            print(" <option value = '{$row_cob['id_cobertura']}'>".$row_cob['sabor_cobertura']." e ".$row_cob['opcionais_cobertura']."</option>");
                        }
                        print("</select>");
                            
                    ?>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md">
                    <h4>Recheio:</h4>
                    <?php
                        // Dropdown do Recheio name=recheio_escolido
                    
                        $sqlrec = "SELECT * FROM recheio";
                        $resrec = $conn->query($sqlrec) or die ($conn->error);
                        

                        print("<select class='form-control' name='recheio_escolhido'>");
                        while($row_rec = $resrec->fetch_assoc()){
                            print(" <option value = '{$row_rec['id_recheio']}'>".$row_rec['sabor_recheio']." e ".$row_rec['opcionais_recheio']."</option>");
                        }
                        print("</select>");
                            
                    ?>
                </div>
                <div class="col-md">
                    <h4>*Sabor:</h4>
                    <?php
                        // Dropdown do nome name=nome_escolido
                    
                        $sqlsab = "SELECT * FROM sabor";
                        $ressab = $conn->query($sqlsab) or die ($conn->error);;
                        

                        print("<select id='validationServer04' class='form-control' name='sabor_escolhido' required>");
                        while($row_sab = $ressab->fetch_assoc()){
                            print(" <option value = '{$row_sab['id_sabor']}'>".$row_sab['nome_sabor']."</option>");
                        }
                        print("</select>");
                            
                    ?>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md">
                    <h4>*Peso (g):</h4>
                    <select id="peso" class="form-control" name="peso_pedido">
                        <option selected>====ESCOLHA====</option>
                        <option value="1">1.000 g</option>
                        <option value="2">2.000 g</option>
                        <option value="3">3.000 g</option>
                        <option value="4">4.000 g</option>
                        <option value="5">5.000 g</option>
                        <option value="6">6.000 g</option>
                    </select>
                </div>
           
                <div class="col-md">
                    <h4>*Forma:</h4>
                    <select id="peso" class="form-control" name="forma_pedido">
                        <option selected value="não especificado">
                            ====ESCOLHA====
                        </option>

                        <option value="Retangular">
                            Retangular
                        </option>
                        
                        <option value="Redonda">
                            Redonda
                        </option>
                        <option value="Redonda Com 1 Andar">
                            Redonda Com 1 Andar
                        </option>
                        
                        <option value="Quadrada Com 1 Andar">
                            Quadrada Com 1 Andar
                        </option>

                        <option value="Redonda Com 2 Andares">
                            Redonda Com 2 Andares
                        </option>
                        
                        <option value="Quadrada Com 2 Andares">
                            Quadrada Com 2 Andares
                        </option>
                    </select>
                </div>

                <div class="col-md">
                    <h4>*Data de entrega:</h4>
                    <input id="validationServer07" type="date" class="form-control" name="dataentrega_pedido" required>
                </div>

            </div>

            <div class="form-group">
                <center><button class="btn btn-warning" type="submit" style="margin-top:2%">ENVIAR</a></center>
            </div>
        </form>
    </section>


<style>
#body{
	background-color: #fff;
}

#menu{
    margin-top:5%;
    margin-left:20%;
    margin-right:20%;
    margin-bottom:5%;
    padding: 0px, 10px, 0px, 10px;
    background-color: #3c3d41;
    border-style: solid;
    border-width: 2px;
    border-color:#e8b200;
    border-radius: 3px 40px;
}

#menutop{
    margin-top:5%;
    margin-left:20%;
    margin-right:20%;
    margin-bottom:5%;
    padding-top:10px;
    background-color: #3c3d41;
    border-style: solid;
    border-width: 2px;
    border-color:#e8b200;
    border-radius: 500px;
}
    
h4{
    color: #e8b200;
    font-family: 'Baloo Bhaijaan', cursive;
    margin-top: 3%;
}

h6{
    color: #e8b200;
    font-family: 'Baloo Bhaijaan', cursive;
}
</style>
