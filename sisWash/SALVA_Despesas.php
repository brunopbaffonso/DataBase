<?php require_once('Connections/MySQL_LavaCar.php'); ?>
<?php

$valor = $_POST['valor'];
$nome = $_POST['nome'];
$data = $_POST['data_2'];

mysql_select_db($database_MySQL_LavaCar, $MySQL_LavaCar);
mysql_query("UPDATE Despesas SET valor='$valor', data_2='$data' WHERE nome=".$nome, $MySQL_LavaCar) or die(mysql_error());



  $insertGoTo = "sucesso.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
?>
