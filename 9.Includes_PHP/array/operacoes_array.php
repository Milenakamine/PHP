<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereço"] = "Rua A";

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
// contagem de quantos elementos tem em dados completos
echo '<br>' . count($dadosCompletos);

echo '<br>';

// como obter um array de forma randomica, aleatória:
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo " ${dadosCompletos['idade']}";


// remover um dado do array, aqui no cao esta ecluindo o nome
unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);


// para liberar o dado na memória, 'exclusão', mostra nulo
unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos);
$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];
$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);


// juntar os valores de doia arrays array_merge
$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

sort($decimais);
echo '<br>';
print_r($decimais);