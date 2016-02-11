<?php require_once('Connections/MySQL_LavaCar.php'); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form method="get" name="form1" action="remover.php">
		<table align="center">
    		<tr valign="baseline">
      			<td nowrap align="right">CpfC:</td>
     			<td><input type="text" name="cpfC" value="" size="32"></td>
   			</tr>
			<tr valign="baseline">
    		  <td nowrap align="right">&nbsp;</td>
    		  <td><input type="submit" value="Envie"></td>
   			</tr>
 		</table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
</body>
</html>