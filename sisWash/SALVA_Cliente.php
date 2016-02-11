<?php require_once('Connections/MySQL_LavaCar.php'); ?>
<?php

$cpfC = $_POST['cpfC'];
$Empresa_idEmpresa = $_POST['Empresa_idEmpresa'];
$nome = $_POST['nome'];
$datanasc = $_POST['datanasc'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];

$placa = $_POST['placa'];
$fabricante = $_POST['fabricante'];
$modelo = $_POST['modelo'];
$chassi = $_POST['chassi'];
$tipo = $_POST['tipo'];
$data_in = $_POST['data_in'];
$data_out = $_POST['data_out'];

mysql_select_db($database_MySQL_LavaCar, $MySQL_LavaCar);
mysql_query("UPDATE Cliente SET Empresa_idEmpresa='$Empresa_idEmpresa', nome='$nome', datanasc='$datanasc', endereco='$endereco', cep='$cep' WHERE cpfC=".$cpfC, $MySQL_LavaCar) or die(mysql_error());
mysql_query("UPDATE Veiculo SET placa='$placa', fabricante='$fabricante', modelo='$modelo', chassi='$chassi', tipo='$tipo', data_in='$data_in', data_out='$data_out' WHERE cpfC=".$cpfC, $MySQL_LavaCar) or die(mysql_error());



  $insertGoTo = "sucesso.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
?>
