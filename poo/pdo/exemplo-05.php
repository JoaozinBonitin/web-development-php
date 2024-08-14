<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario = :ID");

$id = "1";

$stmt->bindParam(":ID", $id); //metodo para ligar os valores

$stmt->execute();

echo "Dados Excluidos com Sucesso!";

?>