<div class="titulo">If Else</div>

<?php
if(true) {
    echo "Serei impresso?<br>";
}
// se a condição passa for verdadeira o echo será impresso, caso contrário não;
// (true/false) a condição colocada antes
// então o valor é verdadeiro e será imprimido na página



if(false) {
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte B<br>";
} else {
    echo "Falso - Parte A<br>";
    echo "Falso - Parte B<br>";
}
// se a condição passa for verdadeira o echo será impresso, caso contrário não;
// (true/false) a condição colocada antes
// então o valor foi dado como falso, então ele retornará na página o 
// echo "Falso - Parte A<br>";
// echo "Falso - Parte B<br>";


if(false) {
    echo "Passo A<br>";
} else if(false) {
    echo "Passo B<br>";
} elseif(false) {
    echo "Passo C<br>";
} elseif(false) {
    echo "Passo D<br>";
} elseif(false) {
    echo "Passo E<br>";
} else {
    echo "Úlitmo Passo<br>";
}
// foi dado diversas condições para uma situação em epecifico
//  a primeira condição já foi dada como falsa, então não irá imprimir nada;
// tudo oq for dito como falso não terá nenhum resultado
// toda ação tem uma reação: se chover hoje, eu não irei sair
// choveu? não/false, então eu irei sair
// choveu? sim/true, então não irei sair
// as condições que forem passadas como corretas/true sairá como resposta

echo "Fim<br>";