<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

   $texto = "&u gosto d& estudar a linguag&m PHP &m finais de semana";
   

   $corrigido= str_replace(["&u", "d&", "g&m", "&m"], ["eu", "de", "gosto", "no"], $texto);
   
   echo "Texto corrigido: $textocorrigido<br>";

?>
</body>
</html>