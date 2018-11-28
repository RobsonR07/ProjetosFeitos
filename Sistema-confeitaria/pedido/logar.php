<?php

//Se tiver vazio não conectar
if(empty($_POST['login_client']) || empty($_POST['senha_client'])){
    header("Location: ?page=home");
    exit();
}

    $usuario = mysqli_real_escape_string($conn, $_POST['login_client']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha_client']);

    $sql = "SELECT * FROM client WHERE cpf_client = '{$usuario}' AND senha_client = md5('{$senha}')";

    $res = mysqli_query($conn,$sql);

    $linha = mysqli_num_rows($res);
//Condicional da senha e email correta
        if($linha == 1){
            $_SESSION['usuario'] = $usuario;
                header("Location: ?page=cad-pedido");
            exit();
        }else{
            $_SESSION['incorreto'] = true;
                header("Location: ?page=login-client");
            exit();
        }
?>