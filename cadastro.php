<?php
include_once('conexão.php');
$nome = $_POST ['nome'];
$email = $_POST ['email'];
$cpf = $_POST ['cpf'];
$senha = $_POST ['senha'];

$sql= "INSERT INTO dados
(nome, email, cpf, senha) VALUES
('$nome', '$email', '$cpf', '$senha')";
$query= mysqli_query($conexao, $sql);
?>