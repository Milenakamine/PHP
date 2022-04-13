<!-- integraçaõ entre php e html: possibilidades -->
<diV class="titulo">Integração HTML </diV>


<!-- mistura do html e do php
O titulo está em html, mas esta srndo definido pelo php -->
<!-- Neste há um bloco de php que possa ter várias sentenças -->
<h1>

    <?php
        echo 'Olá';
        echo '<small>';
        echo ' Mundo';
        echo '</small>';
    
    ?>


</h1>


<!-- Nesse quesito é uma única exprssão dentro do php, se colocar outra divi apó o "" dará erro. -->
<?= "<div> Outra forma mais simplicada de se 'expressar'.</div>" ?>
<br>

<div><button> <?= "Legal"?> </button></div>

