<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == "aluno@email.com" && $senha == "1234"){
        //manda para autorizado.php
        //echo "autorizado";
        header('location: painel/autorizado.html');
    }else{
        //manda para naoautorizado.php
        //echo "nao autorizado";
        header('location: painel/naoautorizado.html');
    }
?>