<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hacode.com");
$cad->setSenha("123456");

$cad->registrarVenda();
?>