<?php
session_start();
//Se tiver vazio não conectar
if(empty($_POST['email_aluno']) || empty($_POST['senha_aluno'])){
    header("Location: ?page=aluno");
    exit();
}

    $usuario = mysqli_real_escape_string($conn, $_POST['email_aluno']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha_aluno']);

    $sql = "SELECT * FROM aluno WHERE email_aluno = '{$usuario}' AND senha_aluno = md5('{$senha}')";

    $res = mysqli_query($conn,$sql);

    $linha = mysqli_num_rows($res);
//Condicional da senha e email correta
        if($linha == 1){
            $_SESSION['usuario'] = $usuario;
            header("Location: ./admin-aluno/dashboard.php");
            exit();
        }else{
            $_SESSION['incorreto'] = true;
            header("Location: ?page=aluno");
            exit();
        }
?>