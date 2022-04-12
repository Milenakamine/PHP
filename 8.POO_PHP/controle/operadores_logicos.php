<div class="titulo">Operadores Lógicos</div>


<?php
echo "<p class='divisao'>Negação Lógica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // not
// (mostra na tela qual o tipo de verdadeiro e falso, que é o tipo bool)




echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);
var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);
// na tabela verdade AND só é verdadeiro quando todas as alternativas forem verdadeiras, caso contrária será falsa
// é o que ocorre no exemplo acima, apenas a linha 13 e 17 do var_dump é positivo, então é o único que dará como verdadeiro na tela
// os outros que estão envolvido com false e true resultam no erro, no falso
//  a tabela and, quefoi definida por Von Neumman
// A e B = Entrada de energia elétrica e X(C)= Saída de energia.
// Só vai ser verdadeira quando ambas as portas forem verdadeira, quando A e B forem 1 será 1 (verdadeira)

// Por exemplo: A porta 13(A) está entrando energia, na porta 12(B) também está entrando energia, portanto, a resposta que sai na porta 11(X ou C) é verdadeira.
// 13 ⇒ Entrou energia; foi indicado o andar do elevador.
// 12 ⇒ Entrou energia; o elevador esta no andar indicado.
// 11 ⇒ Saiu energia; responde que é para o elevador parar e abrir as portas pois está no andar solicitado. 
// Se alguma das portas não conduzir energia, não há respostas; o elevador para o seu funcionamento.

// FUNÇÃO BOOLEANA AND⇒ X=A.B




echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

// já na tabela verdade OR é verdadeira quando alguma alternativa passada for verdadeira/true.
// A e B = Entrada de energia elétrica e X(C)= Saída de energia.
// Será verdadeiro se qualquer uma das 2 entradas forem verdadeiras.

// Por exemplo: A porta 10(A) está entrando energia, na porta 9(B) não há entrada de energia, sairá na porta 8(X ou C) a reposta verdadeira, sairá a energia elétrica.
// 10 ⇒ Entrou energia; foi forçada a porta da frente. (detector de arrombamento)
// 9 ⇒ Não entrou energia; não foi acionado o detector na porta do fundos.
// 8 ⇒ Sairá energia; será disparado o alarme da casa, pois em uma das portas houve a detecção de força.
// Então se qualquer entrada for positiva, o resultado será positivo.

// FUNÇÃO BOOLEANA OR ⇒ X=A+B


echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

// Na tabela verdade XOR quando os dois valores passados forem iguais, sairá como false 
// e aqueles que estão mesclados com true e false sairá como verdadeiro.
// TRUE E FALSE = VERDADEIRO
// TRUE E TRUE = FALSO
// FALSE E FALSE = FALSO
// FALSE E TRUE = VERDADEIRO
