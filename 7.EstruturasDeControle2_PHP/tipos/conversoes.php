<div class="titulo">Conversões</div>

<?php

echo is_int(PHP_INT_MAX);

// int para float
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);

// float para int
echo '<p>Float para int</p>';
var_dump((int) 6.8);
echo '<br>';
var_dump(intval(2.999));
echo '<br>';
var_dump((int) round(2.8));

// operações com string
echo '<p>Strigs</p>';
var_dump(3+"2");
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2);
echo '<br>', is_string("3" . 2);
echo '<br>', is_string("3" + 2);
echo '<br>';
// var_dump(1 + "cinco"); -- o código não funciona, apenas ignora a string 
// var_dump(1 + "5 cinco"); -- também não rodou
// var_dump(1 + "cinco 5"); -- também não rodou
// var_dump(1 + "2+5"); -- não rodou
var_dump(1 + "3.2");
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");