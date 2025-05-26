<?php
    include_once 'Produto.class.php';

    $produto1 = new Produto("Teclado com Led", 130.00, 43);
    $produto1->AdicionarEstoque(10);
    $produto1->RemoverEstoque(13);
    $produto1->MostrarDetalhes();

    $produto2 = new Produto("Fone de Ouvido Bluetooth", 60.00, 30);
    $produto2->AdicionarEstoque(5);
    $produto2->RemoverEstoque(8);
    $produto2->MostrarDetalhes();

?>