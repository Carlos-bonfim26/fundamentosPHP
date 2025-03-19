<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Bonfim">
    <title>calcular raizes</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php 
$num = $_GET['num']??0;
if($num >0){
    $raizQuadrada = $num ** (1/2);
    $raizCubica = $num ** (1/3);
    $raizQuadrada = number_format($raizQuadrada,3, ",", ".");
    $raizCubica = number_format($raizCubica,3, ",", ".");
}else{
    $raizQuadrada = 0;
    $raizCubica = 0;
}
?>
    <main>
        <div class="formulario">
            <h1>Escolha um número</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="$_GET">

                <label for="num">Número</label>
                <input type="number" name="num" id="num" step="0.01" required placeholder="Digite um número" value="<?=$num?>"> 

                <input type="submit" value="Calcular Raizes">
               
            </form>
        </div>
        <div class="resultado">
            <h2>Resultado</h2>
            <span>
               <?= "analisando o número $num, cheguei a conclusão que sua Raiz Quadrada é $raizQuadrada e sua Raiz Cúbica é $raizCubica"?>
            </span>
        </div>
    </main>

</body>

</html>