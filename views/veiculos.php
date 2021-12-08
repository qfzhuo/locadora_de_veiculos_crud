<?php
@$erro = $_GET["erro"];
if($erro) echo "<script> window.alert('$erro')</script>";

$query = "SELECT * FROM VEICULOS";
$consulta_veiculos = mysqli_query($conexao, $query);
?>


<h1>Veículos</h1>
<div class="row">
    <div class="col-12 d-flex justify-content-end">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#inserir_veiculo" aria-expanded="false" aria-controls="inserir_veiculo">
            Cadastrar Novo Veículo
        </button>
    </div>
</div>


<div class="collapse" id="inserir_veiculo">
    <form method="post" action="services/insert/veiculo.php" class="bg-muted p-4">
        <div class="row">
            <div class="form-group col-6">
                <label for="placa_veiculo">Placa</label>
                <input type="text" class="form-control" id="placa_veiculo" name="placa_veiculo" placeholder="Placa do Veículo">
            </div>
            <div class="form-group col-6">
                <label for="modelo_veiculo">Modelo</label>
                <input type="text" class="form-control" id="modelo_veiculo" name="modelo_veiculo" placeholder="Modelo do Veículo">
            </div>
            <div class="form-group col-6">
                <label for="marca_veiculo">Marca</label>
                <input type="text" class="form-control" id="marca_veiculo" name="marca_veiculo" placeholder="Marca do Veículo">
            </div>
            <div class="form-group col-6">
                <label for="tipo">Tipo</label>
                <input type="text" class="form-control" id="tipo_veiculo" name="tipo_veiculo" placeholder="Tipo do Veículo">
            </div>
            <div class="form-group col-12 text-right">
                <button type="submit" class="btn btn-primary">Cadastrar Veículo</button>
            </div>
        </div>
    </form>
</div>


<hr>

<table class="table table-hover mt-4">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Placa</th>
        <th scope="col">Modelo</th>
        <th scope="col">Marca</th>
        <th scope="col">Tipo</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php
    while($linha = mysqli_fetch_array($consulta_veiculos)) {
        $ID_VEICULO = $linha["ID_VEICULO"];
        echo "<tr>";
        echo "<th>".$linha["ID_VEICULO"]."</th>";
        echo "<td>".$linha["PLACA"]."</td>";
        echo "<td>".$linha["MODELO"]."</td>";
        echo "<td>".$linha["MARCA"]."</td>";
        echo "<td>".$linha["TIPO"]."</td>";
        echo "<td class='d-flex justify-content-around'> 
                <a href='?pagina=veiculo_edit&id_veiculo=$ID_VEICULO'>
                  <i class='fas fa-pen cursor-pointer edit'></i> 
                </a>
                <a href='services/delete/veiculo.php?veiculo=$ID_VEICULO'>
                 <i class='fas fa-trash cursor-pointer delete'></i> 
                </a>
              </td>";
        echo "<tr>";
    }
    ?>
    </tbody>
</table>

