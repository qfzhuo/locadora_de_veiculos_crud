<?php

@$pagina = $_GET['pagina'];

switch ($pagina) {
  case 'veiculo_edit': include 'views/veiculo_edit.php'; break;
  case 'veiculos': include 'views/veiculos.php'; break;
  case 'veiculosbyplaca': include 'views/veiculos_by_placa.php'; break;
  case 'veiculosbymodelo': include 'views/veiculos_by_modelo.php'; break;
  case 'veiculosbytipo': include 'views/veiculos_by_tipo.php'; break;
  case 'veiculosbymarca': include 'views/veiculos_by_marca.php'; break;

  default: include 'views/home.php'; break;
}