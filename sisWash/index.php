<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<p>Bem vindo ao sisWash, Sistema construído para o Controle do LavaCar.</p>
<p>Desenvolvido para disciplina de OBD.</p>
<p>&nbsp;</p>
<p><b>Empresa_idEmpresa = 0</b></p><br>
<a href="digiteF.php">Atualização-FUNCIONARIO</a><br>
<a href="digiteC.php">Atualização-CLIENTE</a><br>
<a href="digiteS.php">Atualização-SERVIÇOS</a><br>
<a href="digiteD.php">Atualização-DESPESAS</a><br>
<br>
<a href="remF.php">Exclusão-FUNCIONARIO</a><br>
<a href="remC.php">Exclusão-CLIENTE</a><br>
<a href="remS.php">Exclusão-SERVIÇOS</a><br>
<a href="remD.php">Exclusão-DESPESAS</a><br>
<br>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form method="post" name="form1" action="CTRL_Cliente.php">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">CpfC:</td>
      <td><input type="text" name="cpfC" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Empresa_idEmpresa:</td>
      <td><input type="text" name="Empresa_idEmpresa" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nome:</td>
      <td><input type="text" name="nome" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Datanasc(AAAA-MM-DD):</td>
      <td><input type="text" name="datanasc" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Endereco:</td>
      <td><input type="text" name="endereco" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Cep:</td>
      <td><input type="text" name="cep" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Placa:</td>
      <td><input type="text" name="placa" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Fabricante:</td>
      <td><input type="text" name="fabricante" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Modelo:</td>
      <td><input type="text" name="modelo" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Chassi:</td>
      <td><input type="text" name="chassi" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Tipo:</td>
      <td><input type="text" name="tipo" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Data_in(AAAA-MM-DD):</td>
      <td><input type="text" name="data_in" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Data_out(AAAA-MM-DD):</td>
      <td><input type="text" name="data_out" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Cadastre CLIENTE & VEICULO"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form method="post" name="form2" action="CTRL_Despesas.php">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Empresa_idEmpresa:</td>
      <td><input type="text" name="Empresa_idEmpresa" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Valor:</td>
      <td><input type="text" name="valor" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nome:</td>
      <td><input type="text" name="nome" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Data_2(AAAA-MM-DD):</td>
      <td><input type="text" name="data_2" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Cadastre DESPESA"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form method="post" name="form3" action="CTRL_Funcionario.php">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">CpfF:</td>
      <td><input type="text" name="cpfF" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nome:</td>
      <td><input type="text" name="nome" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Endereco:</td>
      <td><input type="text" name="endereco" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Cep:</td>
      <td><input type="text" name="cep" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Salario:</td>
      <td><input type="text" name="salario" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Cadastre FUNCIONARIO"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form3">
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form method="post" name="form4" action="CTRL_Servico.php">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Nome:</td>
      <td><input type="text" name="nome" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Valor:</td>
      <td><input type="text" name="valor" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Comissao:</td>
      <td><input type="text" name="comissao" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Cadastre SERVIÇO"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form4">
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>