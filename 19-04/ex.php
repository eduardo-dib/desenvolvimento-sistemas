<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/*Utilizando o conceito de vetor aprendido em aula, 
peça ao usuário que digite 5 números, 
sendo que deve ser apresentado em tela o maior número digitado. 
Ressalta-se que a solução deve ser feita com os laços derepetição FOR e FOREACH. 
Qual a diferença? É possível fazer tal operação por meio de uma função
   */   

   echo "Digite 5 números:\n";


   $nums = [];


   for ($i = 0; $i < 5; $i++) {
       $num = readline("Número " . ($i + 1) . ": ");
       $nums[] = $num;
   }

   //foreach
   $maiorNumero = $nums[0];

   foreach ($nums as $num) {
       if ($num > $maiorNumero) {
           $maiorNumero = $num;
       }
   }
   echo "O maior número digitado é: $maiorNumero\n";

   //for
   echo "Digite 5 números:\n";

    $nums2 = [];
    
    for ($i = 0; $i < 5; $i++) {
        $num2 = readline("Número " . ($i + 1) . ": ");
        // Adicionar o número ao array
        $nums2[] = $num2;
    }

    $maiorNumero2 = $nums3[0];
    
    for ($i = 1; $i < count($nums2); $i++) {
        if ($nums2[$i] > $maiorNumero2) {
            $maiorNumero2 = $numbs2[$i];
        }
    }

    echo "O maior número digitado é: $maiorNumero2\n";

    //foreach é especifico e otimizado para arrays, listas etc, o for é usado pra dar um loop em qualquer bloco de código
    function maiorNumero($nums3) {
        $maiorNumero3 = $nums3[0];
        foreach ($nums3 as $num3) {
            if ($num3> $maiorNumero3) {
                $maiorNumero3 = $num3;
            }
        }
        

        return $maiorNumero3;
    }
    
    echo "Digite 5 números:\n";
    
    $nums3 = [];
    
    for ($i = 0; $i < 5; $i++) {

        $number = readline("Número " . ($i + 1) . ": ");

        $numbers[] = $number;
    }
    

    $maiorNumero3 = maiorNumero($nums3);
    

    echo "O maior número digitado é: $maiorNumero3\n";
?>
</body>
</html>