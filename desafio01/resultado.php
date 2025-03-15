<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Bonfim">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="container">

    <div class="resultado">

   <h2>Seu resultado:</h2>
        <?php 
        $num = $_POST["numero"] ?? null;
        if($num != null){
        echo "<p> o antecessor de $num é: ". ($num -1) . " e o seu sucessor é: ". ($num + 1) . "</p>";
        }else{
            echo "<p>Erro!! por favor volte e preencha o campo</p>";
        }
        ?>
    </div>
</div>
    
</body>
</html>