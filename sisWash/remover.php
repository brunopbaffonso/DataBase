<?php
require_once('Connections/MySQL_LavaCar.php'); 
?>
<?php

$cpfC = $_REQUEST['cpfC'];
$cpfF = $_REQUEST['cpfF'];
$nomeS = $_REQUEST['nomeS'];
$nomeD = $_REQUEST['nomeD'];

if(isset($cpfC)){
	if((mysql_query("DELETE FROM Cliente WHERE cpfC=".$cpfC) && mysql_query("DELETE FROM Veiculo WHERE Cliente_cpfC=".$cpfC))==TRUE){
		header(sprintf("Location: sucesso.php"));
	}
	else header(sprintf("Location: erro.php"));
}

if(isset($cpfF)){
	if(mysql_query("DELETE FROM Funcionario WHERE cpfF=".$cpfF)==TRUE){
		header(sprintf("Location: sucesso.php"));
	}
	else header(sprintf("Location: erro.php"));
}

if(isset($nomeS)){
	if(mysql_query("DELETE FROM Servico WHERE nome='$nomeS'")==TRUE){
		header(sprintf("Location: sucesso.php"));
	}
	else header(sprintf("Location: erro.php"));
}

if(isset($nomeD)){
	if(mysql_query("DELETE FROM Despesas WHERE nome='$nomeD'")==TRUE){
		header(sprintf("Location: sucesso.php"));
	}
	else header(sprintf("Location: erro.php"));
}

?>
