<div class="titulo">Atividade Include</div>

<?php
require_once('usuario.php');

$usuario = new Usuario('Milena Akamine', 21, 'aakaminemilena');
echo $usuario->apresentar();
unset($usuario);