<?php

    $nome = $_POST['cxnome'];
    $email = $_POST['cxemail'];
    $data = $_POST['cxdata'];
    $bandeira = $_POST['BandeirasdeCatoes'];

    echo "Dados recebidos:";
    echo "<br>";
    echo "Nome: " . $nome;
    echo "<br>";
    echo "E-mail: " . $email;
    echo "<br>";
    echo "Data de nascimento: " . $data;
    echo "<br>";
    echo "Bandeira do cartão de Crédito: " . $bandeira;

?>