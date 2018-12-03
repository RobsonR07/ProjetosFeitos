<?php 
@session_start();
    if(!$_SESSION['usuarioprof']){
        header('Location: index.php?page=home');
        exit();
    }
?>