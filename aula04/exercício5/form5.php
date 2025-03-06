<?php

    $cor = $_POST['corescolhida'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cor de Fundo Aplicada</title>
</head>
<body style="background-color: <?php echo $cor; ?>;">

    <p>A cor escolhida foi: <?php echo $cor; ?></p>
    <a href="form5.html">Voltar</a>

</body>
</html>