<?php
session_start();
//Se tiver vazio não conectar
if(empty($_POST['email_professor']) || empty($_POST['senha_professor'])){
    header("Location: ?page=prof");
    exit();
}

    $usuario = mysqli_real_escape_string($conn, $_POST['email_professor']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha_professor']);

    $sql = "SELECT * FROM professor WHERE email_professor = '{$usuario}' AND senha_professor = md5('{$senha}')";

    $res = mysqli_query($conn,$sql);

    $linha = mysqli_num_rows($res);
//Condicional da senha e email correta
        if($linha == 1){
            $_SESSION['usuarioprof'] = $usuario;
            header("Location: ./admin-prof/dashboard.php");
            exit();
        }else{
            $_SESSION['incorretoprof'] = true;
            header("Location: ?page=prof");
            exit();
        }
?>