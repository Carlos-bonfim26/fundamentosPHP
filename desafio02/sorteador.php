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
        <div class="resultado">
            <?php
            $sorteio = rand(1, 100);
            echo "<p> O número sorteado foi: $sorteio</p>";
            ?>
        </div>
    </div>
</body>
</html>