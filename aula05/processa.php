<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == "aluno@email.com" && $senha == "1234"){
        $nome = "Aluno";
        header('location: privada.php?nome='.$nome);
    }else{
        header('location: erro.php');
    }
?>