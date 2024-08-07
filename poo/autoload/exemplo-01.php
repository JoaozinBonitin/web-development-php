<?php
//incluindo classes com o autoload

spl_autoload_register(function ($nomeClasse) {
    require_once("$nomeClasse.php");
});

$carro = new DelRey();

$carro->acelerar(80);

?>