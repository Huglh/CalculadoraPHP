<?php
$num1 = isset($_POST["num1"]) ? $_POST["num1"] : 0;
$num2 = isset($_POST["num2"]) ? $_POST["num2"] : 0;
$operacao = 0;
$resultado = '';

if ($num2 != 0) {
    if (isset($_POST["soma"])) {
        $operacao = $num1 + $num2;
        $resultado = "<h3>Soma $num1 + $num2</h3><h2>Valor da soma: $operacao</h2>";
    } elseif (isset($_POST["subtrair"])) {
        $operacao = $num1 - $num2;
        $resultado = "<h3>Subtração $num1 - $num2</h3><h2>Valor da subtração: $operacao</h2>";
    } 
        elseif (isset($_POST["dividir"])) {
            $operacao = $num1 / $num2;
            $resultado = "<h3>Divisão $num1 / $num2</h3><h2>Valor da divisão: $operacao</h2>";
    } 
        elseif (isset($_POST["multiplicar"])) {
            $operacao = $num1 * $num2;
            $resultado = "<h3>Multiplicação $num1 * $num2</h3><h2>Valor da multiplicação: $operacao</h2>";
    }
} 
    else {
        $resultado = "<h3>Erro: Divisão por zero não é permitida!</h3>";
}

echo $resultado;
?>
