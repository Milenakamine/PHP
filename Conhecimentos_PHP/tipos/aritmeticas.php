<div class="titulo">Operações Aritméticas</div>

<?php 
echo 1+1, '<br>';
var_dump(1+1.0);
echo '<br>';
echo 1+2.5, '<br>';
echo 10 - 2, '<br>';
echo 2*5, '<br>';
echo 7/4, '<br>';
// o php mesmo não tendo nenhum valor float introduzido 
// resulta em uma valor float se for o resultado da operação
// só não irá resultar se for expresso que é para resultar de forma inteira, ex:
echo intdiv(7,4), '<br>'; //foi colocado em operação o INT = INTEIRO, DIV = DIVIDIR e os números
//que serão divididos
echo 7%4, '<br>';
//para decobrir se o número é par ou impar

echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2;