<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
// diferença de aspas duplas e apenas uma aspa
echo '<br> $numero';
echo "<br> $numero";

$texto = "A sua nota é: $numero";
echo "<br>$texto";

$objeto = 'caneta';
// echo "<br>Eu tenho 5 $objetos"; -- roda com ATENÇÃO
echo "<br>Eu tenho 5 {$objeto}s.";
echo "<br>Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s";

$nome = "Milena Akamine";
$mensagem = "Seja bem-vindo, {$nome}";
echo '<br> $nome'; 
//quando tem apenas uma aspa não faz a operação e aparece na tela,
// ela apenas mostra oq foi escrito lá dentro
echo "<br> $nome";
// já as aspas duplas realiza a operação que está dentro dela 
// então vai chamar a variável que foi definida no nome.
