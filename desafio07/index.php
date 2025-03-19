<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Bonfim">
    <title>Salario Minimo</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php 
    $salario = $_GET['salario']??0;
    $salarioMinimo = 1509;

    $qntdSalarios = $salario / $salarioMinimo;
    $qntdSalarios = floor($qntdSalarios);
   
    $resto = 0;
    
    if($qntdSalarios >= 1 && $salario > $salarioMinimo * $qntdSalarios){
        $resto = $salario - ($salarioMinimo * $qntdSalarios);
    }
    else if($qntdSalarios < 1){
        $qntdSalarios = 0;
        $resto = $salario;
    }
    $resto = number_format($resto, 2, ",", ".");
    ?>
    <main>
        <div class="formulario">
            <h1>Informe seu Salário</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="$_GET">
                
                    <label for="salario">Salário(R$)</label>
                    <input type="number" name="salario" id="salario" step="0.01" required placeholder="Digite seu salário" value="<?=$salario?>">
                
                <input type="submit" value="Calcular">
                <p>Considerando o Salário minino de R$ 1.509</p>
            </form>
        </div>
        <div class="resultado">
            <h2>Resultado</h2>
            <span>
                <?= "Você recebe <strong>$qntdSalarios salários Minímos</strong> + $resto R$"?>
            </span>
        </div>
    </main>


</body>

</html>