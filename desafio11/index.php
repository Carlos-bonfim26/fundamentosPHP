<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Bonfim">
    <title>Reajuste de Preço</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php 
$reajuste = $_GET['reajuste']??0;
$valor = $_GET['valor']??0;
if($valor >0){
    $valorReajustado = $valor + ($valor * $reajuste / 100);
    $valorReajustado = number_format($valorReajustado,2, ",", ".");
} else{
    $valorReajustado = 0;
}
?>
<main>
    <div class="formulario">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="$_GET">
            <label for="valor">Preço do produto(R$)</label>
            <input type="number" name="valor" id="valor" step="0.01" required placeholder="Digite o valor do produto" value="<?=$valor?>">
            <label for="reajuste">Qual será o percentual do Reajuste? <span id="porcentagem"><?= $reajuste ?></span>%</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" value="<?=$reajuste?>">
            <input type="submit" value="Reajustar"></form>
    </div>
    <div class="resultado">
        <h2>Resultado do reajuste</h2>
        <span>
            <?= "O Produto de $valor R$, sofrendo um reajuste de $reajuste%, começara a custar <strong>$valorReajustado R$</strong>"?>
        </span>
    </div>
</main>
<script>
    const range = document.getElementById("reajuste");
    const span = document.getElementById("porcentagem");

    
    range.addEventListener("input", function() {
        span.textContent = this.value;
    });
</script>
</body>

</html>