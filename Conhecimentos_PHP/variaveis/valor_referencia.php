<div class="titulo">Valor vs Referência</div>

<?php

// atribuição é feita por cópia 
//  se desejar que seja por referência é preciso do &



$variavel = 'valor inicial';
echo $variavel;

// Atribuição por Valor - cópia
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo " $variavelValor";

// Atribuição por Referência 
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel $variavelReferencia";

?>