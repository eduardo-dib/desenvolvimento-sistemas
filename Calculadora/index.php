<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora feita em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora feita em PHP</h1>
        <form method="post">
            <div class="inputs">
                    <label for="num1">Primeiro Número:</label>
                    <input type="text" id="num1" name="num1" placeholder="Digite o primeiro número" required>
                    <label for="num2">Segundo Número:</label>
                    <input type="text" id="num2" name="num2" placeholder="Digite o segundo número" required>

            </div>
            <div class="operacoes">
                <button type="submit" name="operacao" value="+">Adição</button>
                <button type="submit" name="operacao" value="-">Subtração</button>
                <button type="submit" name="operacao" value="*">Multiplicação</button>
                <button type="submit" name="operacao" value="/">Divisão</button>
                <button type="submit" name="operacao" value="^">Exponenciação</button>
                <button type="submit" name="operacao" value="raiz">Raiz Quadrada</button>
                <button type="submit" name="operacao" value="fatorial">Fatorial</button>
            </div>
            <?php
                if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacao'])) {
                    $num1 = str_replace(',', '.', $_POST['num1']); // Permite vírgula no input
                    $num2 = str_replace(',', '.', $_POST['num2']); // Permite vírgula no input
                    $operacao = $_POST['operacao'];

                    $resultado = realizarOperacao($num1, $num2, $operacao);

                    if ($resultado !== false) {
                        echo "<div class='resultado'>Resultado: " . number_format($resultado, 2) . "</div>";

                    } else {
                        echo "<div class='erro'>Erro: $mensagemErro</div>";
                    }
                }

                function realizarOperacao($num1, $num2, $operacao) {
                    global $mensagemErro;

                    if (is_numeric($num1) && is_numeric($num2)) {
                        $num1 = floatval($num1);
                        $num2 = floatval($num2);

                        switch ($operacao) {
                            case '+':
                                return $num1 + $num2;
                            case '-':
                                return $num1 - $num2;
                            case '*':
                                return $num1 * $num2;
                            case '/':
                                if ($num2 == 0) {
                                    $mensagemErro = "É impossível a divisão por 0!";
                                    return false;
                                } else {
                                    return $num1 / $num2;
                                }
                            case '^':
                                if ($num2 == 0) {
                                    return 1;
                                }
                                elseif($num2 == 1){
                                    return $num1;
                                
                                } else {
                                    return $num1 ** $num2;
                                }
                            case 'raiz':
                                $resultadoRaiz = sqrt($num1 + $num2);
                                if (!is_numeric($resultadoRaiz)) {
                                    $mensagemErro = "Raiz quadrada negativa!";
                                    return false;
                                } else {
                                    return $resultadoRaiz;
                                }
                            case 'fatorial':
                                $resultadoFatorial = 1;
                                for ($i = 1; $i <= ($num1 + $num2); $i++) {
                                    $resultadoFatorial *= $i;
                                }
                                return $resultadoFatorial;
                            default:
                                $mensagemErro = "Operação inválida!";
                                return false;
                        }
                    } else {
                        $mensagemErro = "Valores inválidos!";
                        return false;
                    }
                }
            ?>
        </form>
    </div>
    <footer>
        <p>&copy; 2024 - Desenvolvido para o Projeto</p>
    </footer>

    <script>
        // Adiciona evento de keydown aos campos de entrada
        document.getElementById("num1").addEventListener("keydown", apenasNumeros);
        document.getElementById("num2").addEventListener("keydown", apenasNumeros);

        // Função para permitir apenas números nos campos de entrada
        function apenasNumeros(event) {
            // Permite backspace, delete, tab, escape, enter
            if (event.key == "Backspace" || event.key == "Delete" || event.key == "Tab" || event.key == "Escape" || event.key == "Enter") {
                return;
            }

            // Verifica se o caractere digitado é um número
            if (isNaN(parseInt(event.key))) {
                event.preventDefault();
            }
        }
    </script>
</body>
</html>
