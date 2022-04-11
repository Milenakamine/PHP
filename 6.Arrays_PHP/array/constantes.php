<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('Laranja', 'Abacaxi');
// FRUTAS = 'teste';
// FRUTAS[0] = 'banana';
// FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
// CARROS["BMW"] = '325i';
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
// CIDADES[0] = 'Rio de Janeiro';
echo '<br>' . CIDADES[1];

echo "<br>";



// echo Constant; 
// imprime "Hello world."
// Lança um erro Error: Undefined constant "Constant"
// Anteriormente ao PHP 8.0.0, imprimia "Constant" e emitia um warning.
// Simple scalar value
const CONSTANT = 'Hello World <br>';
echo CONSTANT;

// Scalar expression
const ANOTHER_CONST = CONSTANT.' Goodbye World <br>';
echo ANOTHER_CONST;

const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1]; // imprime "cat"

// Array constante
define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[2]; 
?>