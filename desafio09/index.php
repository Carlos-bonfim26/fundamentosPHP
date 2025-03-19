<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Bonfim">
    <title>médias</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    $n1 = $_GET['num1'] ?? 0;
    $n2 = $_GET['num2'] ?? 0;
    $p1 = $_GET['peso1'] ?? 1;
    $p2 = $_GET['peso2'] ?? 1;

    $mediaAritmetica = ($n1 + $n2) / 2;

    $mediaPonderada = ($n1 * $p1 + $n2 * $p2) / ($p1 + $p2);

    $mediaAritmetica = number_format($mediaAritmetica, 2, ",", ".");

    $mediaPonderada = number_format($mediaPonderada, 2, ",", ".");

    ?>
    <main>

        <div class="formulario">
            <h1>Analisador de médias</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="$_GET">
                <label for="num1">número 1:</label>
                <input type="number" name="num1" id="num1" step="0.01" required placeholder="Digite um número" value="<?= $n1 ?>">
                <label for="peso1">peso 1:</label>
                <input type="number" name="peso1" id="peso1" step="0.01" required placeholder="Digite o peso" value="<?= $p1 ?>">
                <label for="num2">número 2:</label>
                <input type="number" name="num2" id="num2"step="0.01" required placeholder="Digite um número" value="<?= $n2 ?>">
                <label for="peso2">peso 2:</label>
                <input type="number" name="peso2" id="peso2" step="0.01" required placeholder="Digite um número" value="<?= $p2 ?>">
                <input type="submit" value="calcular">
            </form>
        </div>
        <div class="resultado">
            <h2>Calculo das médias</h2>
            <?=
            "<span> analisando os números $n1 e $n2 </span><br>
            <span>
            ° A média aritmética é $mediaAritmetica \n
            </span>
            <span>
            ° A média ponderada é $mediaPonderada
            </span>
            "

            ?>
        </div>
    </main>


</body>

</html>