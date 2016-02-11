<?php
require_once('Connections/MySQL_LavaCar.php'); 
?>
<?php

$cpfC = $_REQUEST['cpfC'];
$cpfF = $_REQUEST['cpfF'];
$nomeS = $_REQUEST['nomeS'];
$nomeD = $_REQUEST['nomeD'];

if(isset($cpfC)){
	$buscaC = mysql_query("SELECT * FROM Cliente WHERE cpfC=".$cpfC) or die(mysql_error()); 
	$rowC = mysql_num_rows($buscaC) or exit(mysql_error());
	if ($rowC > 0){
	
		while ($linha = mysql_fetch_array($buscaC)){
			$nome = $linha['nome'];
			$datanasc = $linha ['datanasc'];
			$endereco = $linha ['endereco'];
			$cep = $linha ['cep'];
			$Empresa_idEmpresa = $linha ['Empresa_idEmpresa'];
		}
	}
	$buscaV = mysql_query("SELECT * FROM Veiculo WHERE Cliente_cpfC=".$cpfC) or exit(mysql_error()); 
	$rowV = mysql_num_rows($buscaV) or exit(mysql_error());
	if ($rowV > 0){
	
		while ($linha = mysql_fetch_array($buscaV)){
			$placa = $linha['placa'];
			$fabricante = $linha ['fabricante'];
			$modelo = $linha ['modelo'];
			$chassi = $linha ['chassi'];
			$tipo = $linha ['tipo'];
			$data_in = $linha ['data_in'];
			$data_out = $linha ['data_out'];
		}
	}
}

if(isset($cpfF)){
	$buscaF = mysql_query("SELECT * FROM Funcionario WHERE cpfF=".$cpfF) or exit(mysql_error()); 
	$rowF = mysql_num_rows($buscaF) or exit(mysql_error());
	if ($rowF > 0){
	
		while ($linha = mysql_fetch_array($buscaF)){
			$nome = $linha['nome'];
			$endereco = $linha ['endereco'];
			$cep = $linha ['cep'];
			$salario = $linha ['salario'];
		}
	}
}

if(isset($nomeS)){
	$buscaS = mysql_query("SELECT * FROM Servico WHERE nome='$nomeS'") or exit(mysql_error()); 
	$rowS = mysql_num_rows($buscaS) or exit(mysql_error());
	if ($rowS > 0){
	
		while ($linha = mysql_fetch_array($buscaS)){
			$valor = $linha ['valor'];
			$comissao = $linha ['comissao'];
		}
	}
}

if(isset($nomeD)){
	$buscaD = mysql_query("SELECT * FROM Despesas WHERE nome='$nomeD'") or exit(mysql_error()); 
	$rowD = mysql_num_rows($buscaD) or exit(mysql_error());
	if ($rowD > 0){
	
		while ($linha = mysql_fetch_array($buscaD)){
			$valor_2 = $linha ['valor'];
			$data_2 = $linha ['data_2'];
			$Empresa_idEmpresa = $linha ['Empresa_idEmpresa'];
		}
	}
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p>&nbsp;</p>
<form method="post" name="form1" action="SALVA_Cliente.php">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">CpfC:</td>
      <td><input type="text" name="cpfC" value="<?php print($cpfC); ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Empresa_idEmpresa:</td>
      <td><input type="text" name="Empresa_idEmpresa" value="<?php echo $Empresa_idEmpresa; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nome:</td>
      <td><input type="text" name="nome" value="<?php echo $nome; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Datanasc(AAAA-MM-DD):</td>
      <td><input type="text" name="datanasc" value="<?php echo $datanasc; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Endereco:</td>
      <td><input type="text" name="endereco" value="<?php echo $endereco; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Cep:</td>
      <td><input type="text" name="cep" value="<?php echo $cep; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Placa:</td>
      <td><input type="text" name="placa" value="<?php echo $placa; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Fabricante:</td>
      <td><input type="text" name="fabricante" value="<?php echo $fabricante; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Modelo:</td>
      <td><input type="text" name="modelo" value="<?php echo $modelo; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Chassi:</td>
      <td><input type="text" name="chassi" value="<?php echo $chassi; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Tipo:</td>
      <td><input type="text" name="tipo" value="<?php echo $tipo; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Data_in(AAAA-MM-DD):</td>
      <td><input type="text" name="data_in" value="<?php echo $data_in; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Data_out(AAAA-MM-DD):</td>
      <td><input type="text" name="data_out" value="<?php echo $data_out; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Editar"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form method="post" name="form2" action="SALVA_Despesas.php">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Empresa_idEmpresa:</td>
      <td><input type="text" name="Empresa_idEmpresa" value="<?php echo $Empresa_idEmpresa; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Valor:</td>
      <td><input type="text" name="valor" value="<?php echo $valor_2; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nome:</td>
      <td><input type="text" name="nome" value="<?php echo $nomeD; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Data_2(AAAA-MM-DD):</td>
      <td><input type="text" name="data_2" value="<?php echo $data_2; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Editar"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form method="post" name="form3" action="SALVA_Funcionario.php">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">CpfF:</td>
      <td><input type="text" name="cpfF" value="<?php echo $cpfF; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nome:</td>
      <td><input type="text" name="nome" value="<?php echo $nome; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Endereco:</td>
      <td><input type="text" name="endereco" value="<?php echo $endereco; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Cep:</td>
      <td><input type="text" name="cep" value="<?php echo $cep; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Salario:</td>
      <td><input type="text" name="salario" value="<?php echo $salario; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Editar"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form3">
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form method="post" name="form4" action="SALVA_Servico.php">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Nome:</td>
      <td><input type="text" name="nome" value="<?php echo $nomeS; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Valor:</td>
      <td><input type="text" name="valor" value="<?php echo $valor; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Comissao:</td>
      <td><input type="text" name="comissao" value="<?php echo $comissao; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Editar"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form4">
</form>
<p>&nbsp;</p>
</body>
</html>