<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "jose";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login); //metodo para ligar os valores
$stmt->bindParam(":PASSWORD", $password); //metodo para ligar os valores

$stmt->execute();

echo "Dados Inseridos com Sucesso!";
?>