<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "joao";
$password = "qwerty";
$id = "2";

$stmt->bindParam(":LOGIN", $login); //metodo para ligar os valores
$stmt->bindParam(":PASSWORD", $password); //metodo para ligar os valores
$stmt->bindParam(":ID", $id); //metodo para ligar os valores

$stmt->execute();

echo "Dados Alterados com Sucesso!";

?>