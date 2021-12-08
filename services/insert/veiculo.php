<?php
include '../../db.php';

$placa_veiculo = $_POST['placa_veiculo'];
$modelo_veiculo = $_POST['modelo_veiculo'];
$marca_veiculo = $_POST['marca_veiculo'];
$tipo_veiculo = $_POST['tipo_veiculo'];

$query = "INSERT INTO VEICULOS VALUES( NULL, '$placa_veiculo', '$modelo_veiculo', '$marca_veiculo', '$tipo_veiculo')";

mysqli_query($conexao, $query);
header('location:'.$_SERVER['HTTP_REFERER']);