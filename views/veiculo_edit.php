<?php
    $ID_VEICULO = $_GET["id_veiculo"];

    @$erro = $_GET["erro"];
    if($erro) echo "<script> window.alert('$erro')</script>";

    $query = "SELECT * FROM VEICULOS WHERE ID_VEICULO = $ID_VEICULO";
    $consulta_veiculo = mysqli_query($conexao, $query);
?>

<?php while($linha = mysqli_fetch_array($consulta_veiculo)) { ?>

    <h1>
        Editando Veículo: <?= $linha["ID_VEICULO"]; ?>
    </h1>

    <form method="post" action="services/alter/veiculo.php" class="bg-muted p-4">
        <input type="text" value="<?= $linha["ID_VEICULO"]; ?>" name="id_veiculo" class="d-none">
        <div class="row">
            <div class="form-group col-6">
                <label for="placa_veiculo">Placa</label>
                <input type="text" class="form-control" id="placa_veiculo" name="placa_veiculo" placeholder="Placa do Veículo" value="<?= $linha["PLACA"]; ?>">
            </div>
            <div class="form-group col-6">
                <label for="modelo_veiculo">Modelo</label>
                <input type="text" class="form-control" id="modelo_veiculo" name="modelo_veiculo" placeholder="Modelo do Veículo" value="<?= $linha["MODELO"]; ?>">
            </div>
            <div class="form-group col-6">
                <label for="marca_veiculo">Marca</label>
                <input type="text" class="form-control" id="marca_veiculo" name="marca_veiculo" placeholder="Marca do Veículo" value="<?= $linha["MARCA"]; ?>">
            </div>
            <div class="form-group col-6">
                <label for="tipo_veiculo">Tipo</label>
                <input type="text" class="form-control" id="tipo_veiculo" name="tipo_veiculo" placeholder="Tipo do Veículo" value="<?= $linha["TIPO"]; ?>">
            </div>
            <div class="form-group col-12 text-right">
                <button type="submit" class="btn btn-primary">Salvar Veiculo</button>
            </div>
        </div>
    </form>

<?php } ?>
