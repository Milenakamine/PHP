<div class="titulo">Atividade Operadores Lógicos</div>

<!--
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<!-- precisaremos fazer um formulário -->



<!-- Quando utilizamos o GET, os parâmetros são passados no header da requisição. 
Por isso, podem ser vistos pela URI, como no caso do nosso formulário de login. 
O POST, ao contrário do GET, envia os parâmetros no corpo da requisição HTTP. 
Escondendo eles da UR-->


<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php


// se a informação estiver setada vamos puxar as informações que foram selecionadas
// então no caso eleas estão setadas e puxaremos as informações do post, no caso o select, que foi determinado como t1 e t2
// se o meu o meu t1 for igual a 1, será positivo
// se o meu t2 for igual a 1, será positivo
// o tv foi dado como false
// sorvete foi dado como falso 
    // nessa situação começam as condições
    // se a minha situação 1(t1) e minha situação 2(t2) = ambas positivas
    // resultará 50
    // se a minha situação 1(t1) e minha situação 2(t2) = alguma das duas forem positivas
    // resultará em 32
    // 

if(isset($_POST['t1']) && isset($_POST['t2'])) {
    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;

    if($t1 && $t2) {
        $tv = '50"';
    } elseif($t1 xor $t2) {
        $tv = '32"';
    }

    if($t1 or $t2) {
        $sorvete = true;
    }

    if($tv) {
    $resultado = "Vamos comprar uma TV de $tv";
    } else {
        $resultado = "Sem TV dessa vez :(";
    }

    $saudavel = !$sorvete;

    if($saudavel) {
        $resultado .= '<br>Estamos mais saudáveis!';
    } else {
        $resultado .= '<br>Sorvete liberado \o/';
    }

    echo "<p>$resultado</p>";
}








?>