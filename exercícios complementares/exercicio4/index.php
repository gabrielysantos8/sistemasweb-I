<?php

    include_once 'Retangulo.class.php';

    $retangulo = new Retangulo();

    $retangulo->setLargura(8);
    $retangulo->setAltura(12);

    echo "Largura: " . $retangulo->getLargura() . "<br>";
    echo "Altura: " . $retangulo->getAltura() . "<br>";
    echo "Área: " . $retangulo->calcularArea() . "<br>";
    echo "Perímetro: " . $retangulo->calcularPerimetro() . "<br>";

?>