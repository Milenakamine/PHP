<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma string', '<br>';
var_dump("Eu também");
#o var dump puxa o tamanho da string e o conteudo da string, os acentos e acrescimos diferentes contam, 
#mas podem ser calculados de um modo diferente 

echo '<br>';
//concatenação de sting

echo "Nós também " . 'somos';
echo '<br>';
echo("Número é " . 123);

// ao inves de utilizar o echo, pode ser utilizado o print
print("<br>Também existe o função print");
print "<br>Também existe o função print";


// algumas funções
echo '<br>' . strtoupper('maximizado');
// o texto escrito minusculo se transforma em maiusculo com o strtoupper
echo '<br>' . strtolower('MINIMIZADO');
// o texto escrito maiusculo se transforma em minusculo com o strtolower
echo '<br>' . ucfirst('só a primeira letra');
// só a primeira letra vai com maiuscula
echo '<br>' . ucwords('todas as palavras');
// todo inicio de palavra começara com maiuscula
echo '<br>' . strlen('Quantas letras?');
// calcula o tamanho da string, quantas letras tem a string
// o strlen não se comporta mto bem com acento, então utiliza-se  mb_strlen
echo '<br>' . mb_strlen("Eu também", "utf-8");
// calcula o tamanha da string, quantas letras tem a string
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // parte
// O cursos vai começar a ler a partir da contagem 7 e vai terminar na casa 5 da contagem
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');
// para substituir, ele vai procurar a primeira palavra colocada na função 'isso' e quando ele achar na string vai 
// substituir pelo o que vem após, que no caso é a paralavra 'aquilo'.
