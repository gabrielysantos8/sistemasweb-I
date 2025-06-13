<?php

    include_once 'Livro.class.php';

    $livro1 = new Livro("O Pequeno Príncipe", "Antoine de Saint-Exupéry");

    echo $livro1->exibirStatus() . "<br>";

    $livro1->emprestar();

    echo $livro1->exibirStatus() . "<br>";

    $livro1->devolver();

    echo $livro1->exibirStatus() . "<br>";

    

?>