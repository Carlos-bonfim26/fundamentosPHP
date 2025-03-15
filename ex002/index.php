<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Bonfim">
    <title>php</title>
 
</head>
<body>
    

   <?php
   $nome = "Carlos Bonfim";
  print "<h1>Olá, $nome</h1>";
  date_default_timezone_set("America/Sao_Paulo");
  print "hoje é dia ". date('d/m/Y');
  print " </br> e a hora atual é ". date('H:i:s T');
   ?>




</body>
</html>