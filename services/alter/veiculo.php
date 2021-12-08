<?php
include '../../db.php';

$id_veiculo = $_POST['id_veiculo'];
$placa = $_POST['placa_veiculo'];
$modelo = $_POST['modelo_veiculo'];
$marca = $_POST['marca_veiculo'];
$tipo = $_POST['tipo_veiculo'];


$query = "UPDATE VEICULOS
          SET PLACA = '$placa',
              MODELO = '$modelo',
              MARCA = '$marca',
              TIPO = '$tipo',
          WHERE ID_VEICULO = $id_veiculo ";

$execucao = mysqli_query($conexao, $query);
if( !$execucao ) {
    echo 'Código de erro:'.mysqli_error( $conexao ).'<br>';
    $erro = "Erro em editar veículo.";
    $erro = str_replace(" ", "%20", $erro);

    echo 'Mensagem de erro:'.mysqli_error( $conexao ).'<br>';
    header("location:../../index.php?pagina=veiculos&erro=$erro" );
} else {
    header("location:../../index.php?pagina=veiculos");
}
