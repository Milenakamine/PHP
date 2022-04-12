<div class="titulo">Variáveis Variáveis</div>

<?php

$a = 'salário1 R$5.000';
// // o salário foi atribuído a variavel $a
$$a = 'salário2 R$ 7.500';
// agora o salário que está armazenado na variável $a será atribuida por outro valor, que é salário 2
echo "$a + {$$a}, <br>";
// outro exemplo da mesma situação é


$nome = 'MILENA (NOME)';
$$nome = 'AKAMINE (SOBRENOME)';
echo "$nome {$$nome}, <br>";


$v = 'salário';
$$v = 7.000;
echo "$v: {$$v}";

echo '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!!';
echo "$epa {$$epa} {$$$epa}";







?>