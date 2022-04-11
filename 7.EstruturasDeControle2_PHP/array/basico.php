<div class="title">Array</div>

<?php
$lista = array(1, 2, 3.4, "texto");
echo $lista . '<br>';
var_dump($lista);
echo '<br>';
print_r($lista);// aparece na tela de forma mais entendivel


// como ascessa um elemento de um array a partir dos conchetes e o indice dele, com array inexado.

$lista[0] = 1234; //aletrar um array
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>';
var_dump($lista[4]); //retornanulo pois não existe


$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[11]; // cuidado!, pois pega acento como um elemento contado tbm
echo '<br>' . mb_substr($texto, 10, 1);

?>