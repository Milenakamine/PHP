<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); // true; 1 é igual a 1? sim
var_dump(1 > 1); // false; 1 é menor que 1? não 
var_dump(1 >= 1); // true; 1 é maior ou igual que 1? sim
var_dump(4 < 23); // true; 4 é menor que 23? sim
var_dump(1 <= 7); // true; 1 é menor ou igual a 7? sim
var_dump(1 != 1); // false; 1 é diferente de 1? não
var_dump(1 <> 1); // false;

var_dump(111 == '111'); // true
var_dump(111 === '111'); // false
var_dump(111 != '111'); // false
var_dump(111 !== '111'); // true

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";
$idade = 15;
if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} elseif($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos!";
}

echo '<p class="divisao">Spaceship</p><hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);


echo '<p class="divisao">Valores pode ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");