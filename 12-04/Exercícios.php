<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*QUESTÃO 1: Desenvolva um código onde se tenha uma função que calcule a média do aluno após 4 avaliações. 
        Ressalta-se que é necessário apresentar o nome do aluno e dizer se tal foi aprovado, reprovado ou está em recuperação.
        Deve-se apresentar tal solução para 3 alunos simultaneamente.*/
        function calcularMedia($nome, $nota1, $nota2, $nota3, $nota4){
              $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

              if($media >= 7 && $media < 10){
                return "<br>O aluno(a) " . $nome . " teve uma média de " . $media . " e foi aprovado";
              }
              elseif($media < 7 && $media >=5){
                return "<br>O aluno(a) " . $nome . " teve uma média de " . $media . " e está de recuperação";
              }
              else{
                return "<br>O aluno(a) " . $nome . " teve uma média de " . $media . " e foi reprovado";
              }

              
        }
        $rand1 = rand(1,10);
        $rand2 = rand(1,10);
        $rand3 = rand(1,10);
        echo "QUESTÃO 1: <br>";
        echo calcularMedia("Eduardo",$rand1, $rand1, $rand1, $rand1);
        echo calcularMedia("Bruno", $rand2, $rand2, $rand2, $rand2);
        echo calcularMedia("Bruno", $rand3, $rand3, $rand3, $rand3);

        /*  QUESTÃO 2 Desenvolva um código onde se tenha uma função que recebe dois valores inteiros como argumentos e retorne sua soma. 
        Caso o valor da soma seja negativo o método deverá retornar o valor zero.*/
        echo "<br> <br>QUESTÃO 2: <br>";
        function soma($num1, $num2){
            $soma = $num1 + $num2;
            if($soma < 0){
                return 0;
            }
            else{
                return "<br>O resultado da soma de " . $num1 . " e ". $num2 . " é: " . $soma;
            }
        }
        $num1 = rand(-50,50);
        $num2 = rand(-50,50);
        echo soma($num1, $num2);

        /* QUESTÃO 3 Desenvolva um código onde se tenha uma função para que o usuário tenha a possibilidade de escolher entre as operações matemáticas de subtração, soma, multiplicação, exponenciação ou divisão. 
        Por fim, o usuário deve fornecer dois números para que sejam realizadas tais operações. Deve ser apresentado na tela do navegador o resultado e o tipo da operação escolhida. Vai rodar no console*/
        echo "<br> <br>QUESTÃO 3: <br>";
        
         function calcular($operacao, $num1, $num2) {
             switch ($operacao) {
                 case 'soma':
                     return $num1 + $num2;
                 case 'subtracao':
                     return $num1 - $num2;
                 case 'multiplicacao':
                     return $num1 * $num2;
                 case 'divisao':
                     if ($num2 != 0) {
                         return $num1 / $num2;
                     } else {
                         return "Não é possível dividir por 0";
                     }
                 case 'exponenciacao':
                     return $num1 ** $num2;
                 default:
                     return "Inválido";
             }
         }
         
         
         echo "Escolha a operação:\n";
         echo "1.Soma\n";
         echo "2.Subtração\n";
         echo "3.Multiplicação \n";
         echo "4.Divisão\n";
         echo "5.Exponenciação\n";
         $opcao = readline("Digite o número da operação desejada: ");
        
         $num1 = readline("Digite o primeiro número: ");
         $num2 = readline("Digite o segundo número: ");
         $num1 = (float) $num1;
         $num2 = (float) $num2;
         switch ($opcao) {
             case 1:
                 $resultado = calcular('soma', $num1, $num2);
                 $tipo_operacao = 'soma ';
                 break;
             case 2:
                 $resultado = calcular('subtracao', $num1, $num2);
                 $tipo_operacao = 'subtração ';
                 break;
             case 3:
                 $resultado = calcular('multiplicacao', $num1, $num2);
                 $tipo_operacao = 'multiplicação ';
                 break;
             case 4:
                 $resultado = calcular('divisao', $num1, $num2);
                 $tipo_operacao = 'divisão ';
                 break;
             case 5:
                 $resultado = calcular('exponenciacao', $num1, $num2);
                 $tipo_operacao = 'exponenciação';
                 break;
             default:
                 echo "inválido";
                 exit;
         }
         
         echo "O resultado da " . $tipo_operacao. " é: " . $resultado;

         /*QUESTÃO 4 Desenvolva um código onde se tenha uma função que tem como argumento as notas de um dado aluno quesão armazenadas em um vetor, na sequência calcule a média geral. 
         Caso a média final seja maior ou igual a 6 o aluno está aprovado, caso seja menor que 6 o aluno está reprovado. Por fim, faça uma condição que se amédia final for maior que 10 seja apresentada uma mensagem dizendo que alguma(s) das notas digitadas pelo usuário é inválida*/
         echo "<br> <br>QUESTÃO 4: <br>";
 


   function calcularMediaVetor($notas) {
       $num_notas = count($notas);
       $soma1 = array_sum($notas);
   
       foreach ($notas as $nota) {
           if ($nota < 0 || $nota > 10) {
               echo "Alguma(s) das notas digitadas é inválida.\n";
               return;
           }
       }
   
      
       foreach ($notas as $nota) {
           $soma1 += $nota;
       }
   
       
       
       $num_notas = count($notas);
       $media1 = $soma1 / $num_notas;
   
      
       if ($media1 >= 7) {
           echo "<br>O aluno está aprovado com média" . $media1;
       } else {
           echo "<br>O aluno está reprovado com média " . $media1;
       }
   }



   $notas_aluno1 = [7, 8, 9, 10];
   $notas_aluno2 = [5, 6, 7, 8];
   $notas_aluno3 = [8, 9, 11, 10];
   
   echo "<br>Aluno 1 <br>";
   calcularMedia($notas_aluno1);
   
   echo "Aluno 2 <br>";
   calcularMedia($notas_aluno2);
   
   echo "Aluno 3 <br>";
   calcularMedia($notas_aluno3);
   
   /*QUESTÃO 5 Desenvolva um código onde se tenha função que faz o cálculo fatorial de um número e exiba tal número natela do navegador no formato, por exemplo, !5 = 120*/
   echo "<br> <br>QUESTÃO 5: <br>";

         function calcularFatorial($numero) {
             if ($numero == 0 || $numero == 1) {
                 return 1;
             } else {
                 $fatorial = 1;
                 for ($i = 1; $i <= $numero; $i++) {
                     $fatorial *= $i;
                 }
                 return $fatorial;
             }
         }
         

         $numero = rand(1,10);
         
         $resultado = calcularFatorial($numero);
        
         echo "!$numero = $resultado";
   
    ?>
</body>
</html>