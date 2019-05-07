<?php

echo "Hello World! \n";

// -- Operações Aritiméticas! --
// Soma
echo 5 + 5;
echo "\n";
// Subtração
echo 10 - 3;
echo "\n";
// Multiplicação
echo 3 * 4;
echo "\n";
// Divisão
echo 14 / 2;
echo "\n";
// Resto
echo 13 % 4;
echo "\n";
// Exponenciação
echo 3 ** 2;
echo "\n";

// -- Variáveis! --
$nome = "Mateus"; // String
$idade = 22; // Inteiro (int)
$salario = 100.50; // Float (Decimal, Double)
$bool = true; // Boolean (Verdadeiro ou Falso)
$valor = null; // Valor Nulo
$vazio = ""; // Vazio

$desconto = 200.00;

$salario_liquido = $salario - $desconto;

var_dump($nome);
var_dump($idade);
var_dump($salario);
var_dump($bool);
var_dump($valor);
var_dump($vazio);
var_dump($salario_liquido);

echo "\n";

// -- Strings! --
$texto_simples = 'Hello ' . $nome . ' Welcome to world!';
$texto_duplas = "Hellow World! Duplas $nome";

echo $texto_simples;
echo "\n";
echo $texto_duplas;
echo "\n";

$texto = "Não";
echo strlen($texto);
echo "\n";

echo mb_strtoupper($texto, "UTF8");
echo "\n";
echo mb_strlen($texto, "UTF8");
?>