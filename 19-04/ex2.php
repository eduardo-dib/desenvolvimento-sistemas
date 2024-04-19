<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      /*
       Desenvolva um código onde sejam cadastrados 10 registros em um array multidimensional, 
       conforme abaixo.
       Primeiramente deve ser listado todos os registros (nome do carro, fabricante, cor e ano de fabricação). 
       Em um segundo momento, 
       retire a informação do ano de fabricação dos carros que foram fabricados antes de 2023.
      */

      $registrosCarros = [
        ["nome" => "Mustang", "fabricante" => "Ford", "cor" => "Vermelho", "ano" => 2022],
        ["nome" => "Argo", "fabricante" => "Fiat", "cor" => "Branco", "ano" => 2023],
        ["nome" => "Onix", "fabricante" => "GM", "cor" => "Prata", "ano" => 2024],
        ["nome" => "Corolla", "fabricante" => "Toyota", "cor" => "Preto", "ano" => 2020],
        ["nome" => "Versa", "fabricante" => "Nissan", "cor" => "Cinza", "ano" => 2018],
        ["nome" => "HB20", "fabricante" => "Hyundai", "cor" => "Marrom", "ano" => 2023],
        ["nome" => "Prius", "fabricante" => "Toyota", "cor" => "Prata", "ano" => 2024],
        ["nome" => "Endeavor", "fabricante" => "Mitsubishi", "cor" => "Azul", "ano" => 2019],
        ["nome" => "Lamborghini Revuelto", "fabricante" => "Lamborghini", "cor" => "Amarelo", "ano" => 2024],
        ["nome" => "Impreza", "fabricante" => "Subaru", "cor" => "Azul", "ano" => 2019]
    ];
    
    echo "Carros<br>";
    foreach ($registrosCarros as $carro) {
        echo "{$carro['nome']}, {$carro['fabricante']}, {$carro['cor']}, {$carro['ano']}<br>";
    }
    
    foreach ($registrosCarros as $i => $carro) {
        if ($carro['ano'] < 2023) {
            unset($registrosCarros[$i]);
        }
    }
    

    echo "<br>Registros após remoção dos carros fabricados antes de 2023:<br>";
    foreach ($registrosCarros as $carro) {
        echo "{$carro['nome']}, {$carro['fabricante']}, {$carro['cor']}, {$carro['ano']}<br>";
    }

?>
</body>
</html>