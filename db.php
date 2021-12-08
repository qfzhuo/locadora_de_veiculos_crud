<?php

$servidor = "localhost:3307";
$usuario = "root";
$senha = "";
$db = "locadora_de_veiculo";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM VEICULOS";
$consulta_veiculos = mysqli_query($conexao, $query);