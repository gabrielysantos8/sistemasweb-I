<?php
    
    include_once 'Carro.class.php';

    $carro1 = new Carro();
    $carro2 = new Carro();
    $carro3 = new Carro();
    $carro4 = new Carro();
    $carro5 = new Carro();


    $carro1->Marca = "Toyota";
    $carro1->Modelo = "Corolla XEi 2.0 (2024)";
    $carro1->Combustivel = "Flex (Gasolina e Etanol)";
    $carro1->Portas = 4;
    $carro1->Capacidade_tanque = "50 litros";

    $carro2->Marca = "Honda";
    $carro2->Modelo = "Civic EXL";
    $carro2->Combustivel = "Gasolina e Etanol";
    $carro2->Portas = 4;
    $carro2->Capacidade_tanque = "56 litros";

    $carro3->Marca = "Volkswagen";
    $carro3->Modelo = "T-Cross Highline";
    $carro3->Combustivel = "Gasolina e Etanol";
    $carro3->Portas = 4;
    $carro3->Capacidade_tanque = "52 litros";

    $carro4->Marca = "Chevrolet";
    $carro4->Modelo = "Prisma Joy 1.0";
    $carro4->Combustivel = "Gasolina e Etanol";
    $carro4->Portas = 4;
    $carro4->Capacidade_tanque = "54 litros";

    $carro4->Marca = "Chevrolet";
    $carro4->Modelo = "Corsa Classic 1.0";
    $carro4->Combustivel = "Gasolina e Etanol";
    $carro4->Portas = 4;
    $carro4->Capacidade_tanque = "54 litros";

    $carro1->MostrarDados();
    $carro2->MostrarDados();
    $carro3->MostrarDados();
    $carro4->MostrarDados();
    $carro5->MostrarDados();
?>

