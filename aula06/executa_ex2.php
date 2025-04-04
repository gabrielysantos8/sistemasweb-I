<?php
    $linhas = $_POST['linhas'];
    $colunas = $_POST['colunas'];

    if ($linhas > 0 && $colunas > 0){
        echo "<table>";
    }else{
        echo"Impossível criar tabela. Digite números maiores que 0.";
    }

    echo "<tr>";
    for ($c = 1; $c <= $colunas; $c++) {
        echo "<th>Título $c</th>";
    }

    $l = 0;
    while ($l < $linhas){
        echo "<tr>";
        $l++;

        $c = 0;
        while ($c < $colunas){
            echo "<td>Linha ".($l+1)."- Coluna ".($c+1)."</td>";
            $c++;
        }
    }

    echo "<table>";
    
?>

<style>
    table {
        width: 50%;
        border-collapse: collapse;
        text-align: center;
    }
    th, td {
        border: 2px solid black;
        padding: 10px;
    }

    th{
        background-color:rgb(107, 226, 167);
    }
</style>