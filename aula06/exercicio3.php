<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Produtos</title>
</head>
<body>
    <?php

        $produtos = [
            ['nome' => 'Batom', 'preco' => '10.99', 'categoria' => 'maquiagem'],
            ['nome' => 'Moletom', 'preco' => '89.90', 'categoria' => 'roupa'],
            ['nome' => 'Televisão', 'preco' => '2900.00', 'categoria' => 'eletrônico'],
            ['nome' => 'Calça jeans', 'preco' => '119.99', 'categoria' => 'roupa'],
            ['nome' => 'Máscara de cílios', 'preco' => '15.00', 'categoria' => 'maquiagem'],
            ['nome' => 'Notebook', 'preco' => '3000.00', 'categoria' => 'eletrônico']
        ];

        echo "<table>";
        echo "<tr><th>Nome</th><th>Preço (R$)</th><th>Categoria</th></tr>";

        foreach($produtos as $produto) {
            echo "<tr class='{$produto['categoria']}'>";
            echo "<td>{$produto['nome']}</td>";
            echo "<td>{$produto['preco']}</td>";
            echo "<td>{$produto['categoria']}</td>";
            echo "</tr>";
        }

    ?>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 3px solid gray;
            padding: 10px;
            text-align: left;
            color: gray;
        }
        th {
            background-color: black;
            
        }
        .eletrônico { background-color:rgb(216, 153, 241); }
        .roupa { background-color: #90EE90; }
        .maquiagem { background-color: #FFB6C1; }
    </style>
</body>
</html>