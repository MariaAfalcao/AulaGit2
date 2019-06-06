<?php

$valorDeComparacao = "Teste";
// operador ternário
// variável = comparacao ? valor_verdadeiro : valor_falso;
$valorAReceber = $valorDeComparacao == "Teste" ? 10 : 0;
echo $valorAReceber;

if ($valorDeComparacao == "Teste")
    $valorAReceber = 10;
else 
    $valorAReceber = 0;

echo $valorAReceber;

// operadores condicionais
/*

if
if...else
if...elseif...else 

*/

$if = 3;
if ($if == 0)
  echo "zero";
elseif ($if == 1)
  echo "um";
elseif ($if == 2)
  echo "dois";  
else
  echo "sem valor previsto";

if ($if == 0)
  echo "zero";
else
  echo "mentira";

$aluno = "João Paulo";
$notaFinal = 9;
// fazer um verificação se o valor da nota final é maior que 7, 
// imprimir parabéns e o nome do aluno
if ($notaFinal > 7) {
    $notaFinal = 10;
    echo "if<br>$notaFinal";
}
else
  echo "else<br>$notaFinal";

if ($notaFinal > 7) {
    $notaFinal = 10;
}
else {
  echo "else<br>$notaFinal";
}

if ($notaFinal > 7)
    $notaFinal = 10;
else
  echo "else<br>$notaFinal";

// fazer uma verificação se o valor da nota é igual a 9, 
// imprimir quase perfeito e o nome do aluno
// senão imprimir vamos e o nome do aluno

// fazer uma verificação se o valor da nota é maior ou igual a 7, 
// imprimir aprovado e o nome do aluno
// se senão, fazer uma verificação 
// se a nota é menor 7 e maior ou igual a 5, 
// imprimir recuperação e o nome do aluno
// senão imprimir reprovado e o nome do aluno

// switch
$notaFinal = 8;
switch ($notaFinal) {
    case 8:
    case 9:
        echo "nove";
        echo "oito";
        break;
    case 7:
        echo "sete";
        break;
    default:
        echo "Valor não disponível";
        break;
}

// loops

// for
for ($i=0; $i <= 5; $i++) {
    echo $i."<br>";
}

for ($j=5; $j >= 0; $j--) {
    echo $j."<br>";
}

// while
$varWhile = 5;
while ($varWhile > 0) {
    echo "Valor: $varWhile";
    $varWhile--;
}

$varDoWhile = 3;
do {
    echo "Valor doWhile: $varDoWhile";
    $varDoWhile--;
    break;
} while ($varDoWhile >= 0);

// foreach
$cars = array("Volvo", "BMW", "Toyota");

foreach ($cars as $key => $value) {
    echo $key . " " . $value . "<br>";
}

for ($k=0; $k < count($cars); $k++ ) {
    echo $k . " " . $cars[$k] . "<br>";
}

?>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>