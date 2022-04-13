<!-- integraçaõ entre php e html: possibilidades -->
<diV class="titulo">Integração CSS </diV>


<!-- mistura do html e do php
O titulo está em html, mas esta srndo definido pelo php -->
<!-- Neste há um bloco de php que possa ter várias sentenças -->
<h1 center>

    <?php
        echo 'Olá';
        echo '<small>';
        echo ' Mundo';
        echo '</small>';
    
    ?>


</h1>


<!-- Nesse quesito é uma única exprssão dentro do php, se colocar outra divi apó o "" dará erro. -->
<?= "<div center > Outra forma mais simplicada de se 'expressar'.</div>" ?>
<br>

<div center><button dobro> <?= "Legal"?> </button></div>

<style>
    button{
        padding: 5px 20px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }
    /* os seletores são facilitadores, pois é só chama-los quando qquando desejat utilizar */

    [center]{
        display:flex;
        justify-content: center;
    }
    [azul]{
        color:#4286f4;
    }
    [dobro]{
        font-size:2rem
    }
</style>


<!-- não há nenhuma restição do código php dentro do html e do html dentro do php, mas sempre que for utilizada,
é preciso chamar a tag certa, para identificar onde é php e onde é html. SEMPRE EXPLICAR QUE LINGUAGEM É.  -->