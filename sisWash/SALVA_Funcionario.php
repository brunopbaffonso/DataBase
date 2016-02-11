<?php require_once('Connections/MySQL_LavaCar.php'); ?>
<?php

$cpfF = $_POST['cpfF'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$salario = $_POST['salario'];

mysql_select_db($database_MySQL_LavaCar, $MySQL_LavaCar);
mysql_query("UPDATE Funcionario SET cpfF='$cpfF', nome='$nome', endereco='$endereco', cep='$cep', salario='$salario' WHERE cpfF=".$cpfF, $MySQL_LavaCar) or die(mysql_error());



  $insertGoTo = "sucesso.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
?>
