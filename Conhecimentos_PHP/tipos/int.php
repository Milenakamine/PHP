<div class="titulo">Tipo Inteiro (int)</div>      

<div rosa>

<?php
    
    echo 'número: ', 11,   '<br>';
    echo 'Informação sobre a variável inserida: ' ;      
     var_dump(11);
    // o var dump dá algumas informações sobre a variável, inclusive o tipo da variável

    echo '<br>','Valor máximo do inteiro suportado na máquina: ' ,PHP_INT_MAX, '<br>';
    // comando para saber o valor máximo suporta pela máquina
    echo 'Valor minimo do inteiro suportado na máquina: ', PHP_INT_MIN, '<br>';
    // comando para saber o valor minimo suportado pelo máquina
    echo 'Base octal para Decimal:',017, '<br>'; 
    //comando para base octal, convertendo para decimal
    echo 'Binário para o Decimal:',0b1100101, '<br>';
    // comando para base binária, convertendo para decimal
    echo 'Base hexadecimal para o Decimal',0x11450, '<br>';
    // comando apra base hexadecimal, convertendo para decimal






    echo 'teste de conta', 11*12;

?>
</div>

<style>
  [rosa]{
      color:fuchsia;
  }

</style>