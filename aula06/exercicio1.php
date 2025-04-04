<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Estilizada</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            text-align: center;
            margin: 20px auto;
        }
        th, td {
            border: 2px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
<table>
        <tr>
            <th>Título 1</th>
            <th>Título 2</th>
            <th>Título 3</th>
            <th>Título 4</th>
        </tr>
        <?php
            for ($i = 1; $i <= 8; $i++) { 
                $cor = ($i % 2 == 0) ? "#4169E1" : "#00FFFF";
                echo "<tr style='background-color: $cor;'> 
                        <td>Coluna 1 da linha $i</td>
                        <td>Coluna 2 da linha $i</td>
                        <td>Coluna 3 da linha $i</td>
                        <td>Coluna 4 da linha $i</td>
                      </tr>";
            }

        ?>
    </table>
</body>
</html>