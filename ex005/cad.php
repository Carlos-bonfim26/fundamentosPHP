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
    <header class="headerCad">
        <h1>Resultado do processamento</h1>
    </header>
    <main class="mainCad">
        <?php 

        $nome = $_GET["nome"] ?? null;
        $sobrenome = $_GET["sobrenome"] ?? null;
        if($nome != null && $sobrenome != null){
        echo "<p> Olá <strong>$nome $sobrenome</strong>, seja bem vindo ao meu site!</p>";
        }else{
            echo "<p>Erro!! por favor volte e preencha os campos</p>";
        }
        ?>
        <p><a href="index.html">Voltar para a Página anterior</a></p>
    </main>
</body>
</html>