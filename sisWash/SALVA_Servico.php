<?php require_once('Connections/MySQL_LavaCar.php'); ?>
<?php

$nome = $_POST['nome'];
$valor = $_POST['valor'];
$comissao = $_POST['comissao'];

mysql_select_db($database_MySQL_LavaCar, $MySQL_LavaCar);
mysql_query("UPDATE Servico SET valor='$valor', comissao='$comissao' WHERE nome=".$nome, $MySQL_LavaCar) or die(mysql_error());



  $insertGoTo = "sucesso.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
?>
