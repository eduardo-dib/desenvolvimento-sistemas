<?php
function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    return $num1 - $num2;
}

function multiply($num1, $num2) {
    return $num1 * $num2;
}

function divide($num1, $num2) {
    if ($num2 == 0) {
        return "Erro: Divisão por zero.";
    } else {
        return $num1 / $num2;
    }
}

function exponent($num1, $num2) {
    return pow($num1, $num2);
}

function sqrtFunc($num1, $num2) {
    return sqrt($num1 + $num2);
}

function factorial($num1, $num2) {
    $result = 1;
    for ($i = 1; $i <= $num1 + $num2; $i++) {
        $result *= $i;
    }
    return $result;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];
    
    switch ($operation) {
        case "add":
            $result = add($num1, $num2);
            break;
        case "subtract":
            $result = subtract($num1, $num2);
            break;
        case "multiply":
            $result = multiply($num1, $num2);
            break;
        case "divide":
            $result = divide($num1, $num2);
            break;
        case "exponent":
            $result = exponent($num1, $num2);
            break;
        case "sqrt":
            $result = sqrtFunc($num1, $num2);
            break;
        case "factorial":
            $result = factorial($num1, $num2);
            break;
    }
    
    echo "<h3>Resultado: " . number_format($result, 2) . "</h3>";
}
?>
