<?php
session_start();
//Se tiver vazio não conectar
if(empty($_POST['codigo_ativacao'])){
    header("Location: ?page=token");
    exit();
}

    $code = mysqli_real_escape_string($conn, $_POST['codigo_ativacao']);

    $sql = "SELECT * FROM code WHERE code_ForRegister = '{$code}'";

    $res = mysqli_query($conn,$sql);

    $linha = mysqli_num_rows($res);
//Condicional da senha e email correta
        if($linha == 1){
            $_SESSION['token'] = $code;
            header("Location: ?page=cad-prof");
            exit();
        }else{
            $_SESSION['incorectcode'] = true;
            header("Location: ?page=token");
            exit();
        }
?>