<?php

    include_once 'Funcionario.class.php';

    $func1 = new Funcionario("Osvaldo", 2300);

    $func1->exibirInformacoes();

    $func1->aumentarSalario(40); 

    $func1->exibirInformacoes();

?>
