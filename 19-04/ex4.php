<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $string = "ARARA";

      $resultado = "";

      for ($i = 0; $i < strlen($string); $i++) {

          $letra = $string[$i];
          
          $letraRepetida = false;
          for ($j = 0; $j < strlen($resultado); $j++) {
              if ($resultado[$j] === $letra) {
                  $letraRepetida = true;
                  break;
              }
          }
          
          if (!$caractereRepetido) {
              $resultado .= $caractereAtual;
          }
      }
      
      echo "String sem caracteres repetidos: $resultado\n";
?>
</body>
</html>