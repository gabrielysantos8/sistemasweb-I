<?php
    $nome = $_GET['nome'];
    $n1 = $_GET['nota1'];
    $n2 = $_GET['nota2'];
    $n3 = $_GET['nota3'];

   
    $media = ($n1 + $n2 + $n3) / 3;
    echo "A média das suas notas é: $media";

?>