<?php

//Se tiver vazio não conectar
if(empty($_POST['login_funcionario']) || empty($_POST['senha_funcionario'])){
    header("Location: ?page=home");
    exit();
}

    $funcionario = mysqli_real_escape_string($conn, $_POST['login_funcionario']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha_funcionario']);

    $sql = "SELECT * FROM funcionario WHERE cpf_funcionario = '{$funcionario}' AND senha_funcionario = md5('{$senha}')";

    $res = mysqli_query($conn,$sql);

    $linha = mysqli_num_rows($res);
//Condicional da senha e email correta
        if($linha == 1){
            $_SESSION['funcionario'] = $funcionario;
                header("Location: admin/index-admin.php");
            exit();
        }else{
            $_SESSION['incorreto'] = true;
                header("Location: ?page=login");
            exit();
        }
?>