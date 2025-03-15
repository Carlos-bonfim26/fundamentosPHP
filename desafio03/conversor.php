<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Bonfim">
    <title>titulo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="container">
    <div class="conversor">
        <h1>Valores convertidos</h1>
        <?php
        $real = $_POST["real"];
        $dolar = $real / 5.81;
        $dolar = round($dolar, 2);
        echo "<p> <strong>R$$real</strong> convertido para dollar é igual a <strong>$$dolar</strong></p>";
        echo "<span> usando a cotação do dia 13/03/2025 que está 5,81,<br/> <a href = 'index.html'> volte aqui</a></span>"
        ?>
    </div>
</div>
   
</body>
</html>