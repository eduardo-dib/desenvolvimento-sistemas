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
                    <label for="n1">Primeiro Número:</label>
                    <input type="text" id="n1" name="n1" placeholder="Digite um número" >
                    <label for="n2">Segundo Número:</label>
                    <input type="text" id="n2" name="n2" placeholder="Digite outro número">

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
                if (isset($_POST['n1'], $_POST['n2'], $_POST['operacao'])) {
                    $n1 = str_replace(',', '.', $_POST['n1']); 
                    $n2 = str_replace(',', '.', $_POST['n2']); 
                    $operacao = $_POST['operacao'];
                
                    if ($n1 !== '' && $n2 !== '') {
                        $resultado = realizarOperacao($n1, $n2, $operacao);
                
                        if ($resultado !== false) {
                            echo "<div class='resultado'>Resultado: " . number_format($resultado, 2) . "</div>";
                        } else {
                            echo "<div class='erro'>Erro: $erro</div>";
                        }
                    } else {
                        echo "<div class='erro'>Por favor, preencha todos os campos!</div>";
                    }
                } else {
                    echo "<div class='erro'>Campos não podem estar vazios!</div>";
                }

                function realizarOperacao($n1, $n2, $operacao) {
                    global $erro;
                    if (is_numeric($n1) && is_numeric($n2)) {
                        $n1 = floatval($n1);
                        $n2 = floatval($n2);

                        switch ($operacao) {
                            case '+':
                                return $n1 + $n2;
                            case '-':
                                return $n1 - $n2;
                            case '*':
                                return $n1 * $n2;
                            case '/':
                                if ($n2 == 0) {
                                    $erro = "É impossível a divisão por 0!";
                                    return false;
                                } else {
                                    return $n1 / $n2;
                                }
                            case '^':
                                if ($n2 == 0) {
                                    return 1;
                                }
                                elseif($n2 == 1){
                                    return $n1;
                                
                                } else {
                                    return $n1 ** $n2;
                                }
                            case 'raiz':
                                $resultadoRaiz = $n1 + $n2;
                                if ($resultadoRaiz < 0) {
                                    $erro = "Não é possível extrair raiz quadrada de um número negativo";
                                    return false;
                                } else {
                                    
                                    $true = $resultadoRaiz / 2;
                                    $precisao = 0.0001; 
                                    $loop = 0; 
                            
                                    while (abs($true * $true - $resultadoRaiz) > $loop) {
                                        $true = ($true + $resultadoRaiz / $true) / 2;
                                        $loop++;
                            
                        
                                        if ($loop > 1000) {
                                            $erro = "Limite máximo de iterações alcançado";
                                            return false;
                                        }
                                    }
                                    return $true;
                                }
                            case 'fatorial':
                                $resultadoFatorial = 1;
                                for ($i = 1; $i <= ($n1 + $n2); $i++) {
                                    $resultadoFatorial *= $i;
                                }
                                return $resultadoFatorial;
                            default:
                                $mensagemErro = "Operação inválida!";
                                return false;
                        }
                    } else {
                        $erro = "Valores inválidos!";
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
        document.getElementById("n1").addEventListener("keydown", apenasNumeros);
        document.getElementById("n2").addEventListener("keydown", apenasNumeros);

    
        function apenasNumeros(event) {
            if (event.key == "Backspace" || event.key == "Delete" || event.key == "Tab" || event.key == "Escape" || event.key == "Enter") {
                return;
            }


            if (isNaN(parseInt(event.key))) {
                event.preventDefault();
            }
        }
    </script>
</body>
</html>
