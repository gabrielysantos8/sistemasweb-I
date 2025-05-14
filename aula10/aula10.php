<?php
    include_once 'Conta.class.php';

    $conta1 = new Conta();

    $conta1->Nome = "Fulado da Silva";
    $conta1->Cpf = "123.456.789-00";
    // $conta1->Saldo = 1500;

    $conta1->Consultar();
    echo "<hr>";

    echo $conta1->Depositar(1500);
    echo "<hr>";

    $conta1->Consultar();
    echo "<hr>";

    echo $conta1->Sacar(700);
    echo "<hr>";

    $conta1->Consultar();
    echo "<hr>";

?>