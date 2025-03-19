<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Bonfim">
    <title>calculo idade</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
    $anoNasc = $_GET['dataNasc']??0;
    $anoAtual = date('Y');

    $idade = $anoNasc > $anoAtual? "<span>Mentiroso! diga em que ano você realmente nasceu </span>": "Você tem ". $anoAtual - $anoNasc . " anos de idade, ou vai fazer esse ano";
   
    ?>
<main>
        <div class="formulario">
            <h1>Descubra sua idade</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="$_GET">

                <label for="dataNasc">Em qual ano que você nasceu?</label>
                <input type="number" name="dataNasc" id="dataNasc" step="0.01" required placeholder="Digite o ano que voce nasceu"> 
                <input type="submit" value="Calcular Raizes">
               
            </form>
        </div>
        <div class="resultado">
            <h2>Resultado</h2>
            <span>
              <?= $idade?>
            </span>
        </div>
    </main>
    
</body>
</html>