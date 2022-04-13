<div class="title">Atividade Array</div>

<?php
// primeira atividade
$lista = array(
    1,
    4 =>  2,
    3 =>  3,
    'a' =>  4,
    5,
    '9' =>  6,
    '06' => 7,
    0 => 8
);

// Array([0] => 8 [4] => 2 [3] => 3 [a] => 4 [5] => 5
// [9] => 6 => [06] => 7)
print_r($lista);


//segunda atividade

echo "<br>";
$meses = array(
    1 => "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
);

print_r($meses);
echo '<br>' . $meses[5];
echo '<br>' . $meses[12];


// Terceira atividade
$nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];
$index = array_rand($nomes);
echo "<div center><h1>{$nomes[$index]}</h1></div>";



?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>
