<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>

<body>


    <?php
    $nome = 'PHP';
    //Aspas simples,não reconhece a variável
    echo 'Minha linguagem favorita é $nome <br>';
    //Aspas duplas, reconhece a variável
    echo "Minha linguagem favorita é $nome";

    $teste = "<br>PHP\u{1F418}🙌<br>";
    echo $teste;

    /* \u é chamado de sequência de escape em PHP. É utilizada da versão 7 em diante para exibição de caractres especiais UniCode.
    */

    $name = "Acelino";
    $sname = "Freitas";
    echo "$name $sname <br>";
    echo "$name \"Popó\" $sname <br>";

    //Sintaxe HereDoc

    $nome02 = 'PHP';
    echo <<<TESTE
       Linguagem $nome02 é muito utilizada <br>
    TESTE;

    //Sintaxe NowDoc
    $nome03 = "PHP";
    echo <<< Teste
     Linguagem $nome03 é muito utilizada <br>
    Teste;


    //Manipulação de Strings

    $nome01Manipula = ' Linguagem JavaScript ';
    $nome02Manipula = 'linguagem python';
    $nome03Manipula = 'LINGUAGEM PHP';

    echo "O número de caracteres é " . strlen($nome01Manipula);

    echo "<br>";

    function validarData($data)
    {
        $partes = explode('/', $data);
        if (count($partes) != 3) {
            echo "<br>A data está incorreta";
            $dia = $partes[0];
            echo $dia;
            $mes = $partes[1];
            echo $mes;
            $ano = $partes[2];
            echo $ano;
        }
    }

    validarData('03/07/2023');


    //Expressões regulares nos permitem pesquisar textos dentro de outros texto e verificar se determinados textos seguem um padrão pré-definido
    function validar($data_02)
    {
        $padrao = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-0]{4}$/';
        $resultado = preg_match($padrao, $data_02);
        if ($resultado == 1) {
            return "A data informada está correta";
        } else {
            return "A data informada está incorreta";
        }
    }

    $data_02 = '01/01/2024';

    echo validar($data_02);


    echo "<br> Os caracteres iniciais das palavras " . ucwords($nome02Manipula) . " foram convertidas para maiúsculas";

    //Converte a string para minúsculas

    echo "<br>A string " . strtolower($nome03Manipula) . " foi convertida para minúscula <br>";

    //str_replace(find, replace, string, count)
    echo  str_replace('linguagem', 'Aprendendo', $nome02Manipula);

    //substr_replace(string, replacement, start, length)
    echo substr_replace($nome01Manipula, '<br> Eu gosto da ', 0, 0);

    echo "<br>";

    echo substr_replace($nome01Manipula, ' node', 10, 11);

    echo "<br>";

    //substr(string, start, length)

    echo "A função só retorna parte da string LINGUAGEM PHP, que é somente " . substr($nome03Manipula, 10, 3);

    echo "<br><br>";
    $primeiroArray = array(1, 2, 3, 4, 5);
    var_dump($primeiroArray);
    echo "<br>";
    $segundoArray = [1, 2, 3, 4, 5];
    var_dump($segundoArray);

    echo "<br>";

    /*$array02 = array(
        "cliente01 " =>
        array(
            "nome" => "Bernardo",
            "sobrenome" => "Telles",
            "ddd" => "41",
            "telefone" => "3521-6669",
        ),
        "cliente02" =>
        array(
            "nome" => "Felipe",
            "sobrenome" => "Nunes",
            "ddd" => "42",
            "telefone" => "99902-6168",
        ),
    );

    echo "O nome do primeiro cliente é " . $array02['cliente01']['nome'];*/

    //A função array_merge() mescla dois ou mais vetores
    $first = array("Hello", "World");
    $second = array("exit", "here");
    $merge = array_merge($first, $second);
    print_r($merge);

    echo "<br>";

    foreach ($merge as $valor) {
        echo $valor . " ";
    }

    echo "<br>";

    //A função array_sum() soma os valores de um vetor

    $numeros = [98, 76, 56, 80];
    $total = array_sum($numeros);
    echo $total;

    echo "<br>";

    //O array_diff() identifica valores de um array que não estão presentes em outros. Esta função compara os valores de dois (ou mais) arrays e retorna um array que contém as entradas do array 1 que não estão presentes nos demais

    $vet01 = array("Bill", "Claire", "Ella", "Simon", "Judy");
    $vet02 = array("Jack", "Claire", "Toni");

    $difference = array_diff($vet01, $vet02);
    print_r ($difference);
        ?>
</body>

</html>