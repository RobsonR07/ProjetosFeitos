<?php
@session_start();
    if(!@$_SESSION['funcionario']){
        header('Location: ../index.php?page=home');
        exit();
    }
?>