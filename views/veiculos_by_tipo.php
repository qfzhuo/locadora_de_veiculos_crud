<?php
@$erro = $_GET["erro"];
if($erro) echo "<script> window.alert('$erro')</script>";

$query = "SELECT * FROM VEICULOS ORDER BY TIPO ASC";
$consulta_veiculos = mysqli_query($conexao, $query);
?>

<h1>Veículos ordenado por tipo</h1>

<hr>

<table class="table table-hover mt-4">
    <thead>
    <tr>
        <th scope="col">Tipo</th>
        <th scope="col">Placa</th>
        <th scope="col">Modelo</th>
        <th scope="col">Marca</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php
    while($linha = mysqli_fetch_array($consulta_veiculos)) {
        echo "<tr>";
        echo "<td>".$linha["TIPO"]."</td>";
        echo "<td>".$linha["PLACA"]."</td>";
        echo "<td>".$linha["MODELO"]."</td>";
        echo "<td>".$linha["MARCA"]."</td>";
        echo "<tr>";
    }
    ?>
    </tbody>
</table>
