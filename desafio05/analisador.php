<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Bonfim">
    <title>analisado</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="analise-box">
        <h1>analisando um número real</h1>

        <?php 
        $numFloat =  floatval($_POST["numero"]);
        
        try{  
            
    
            $numReal = floor($numFloat);
            $sobra = $numFloat - $numReal;
          
            echo "<p> O número real digitado foi $numReal</p>";
            echo "<p> a sobra do número é $sobra </p>";
    
            echo "<a href='index.html'>Voltar aqui</a>";} catch (Exception $e){
                echo "<p>Erro!! por favor volte e digite o número da maneira pedida</p>";

                echo "<a href='index.html'>Voltar aqui</a>";
            }
      
        ?>
        </div>
    </div>

    
</html>