<div class="title">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 45;
$soma = $a + $b;
echo $soma;

echo '<br>';
echo isset($soma);

// avisa a página que o valor estpa nulo
unset($soma);
echo '<br>';
var_dump($soma);

$variavel = 10;
echo '<br>'. $variavel;

$variavel = "Agora sou uma string";
echo '<br>' . $variavel;

// nome de variável
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; //mas pode causar erro em alguns sistemas
// $6var= 'invalida';
// $%var7 = 'invalida';
// $var8 = 'invalida';
// há outras variaveis que já sao atribuidas pelo sistema

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);


