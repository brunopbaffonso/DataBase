<?php
error_reporting(E_ALL); 
ini_set('display_errors', '1'); 

# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_MySQL_LavaCar = "mysql.hostinger.com.br";
$database_MySQL_LavaCar = "u442896357_cardb";
$username_MySQL_LavaCar = "u442896357_user";
$password_MySQL_LavaCar = "A!12345678a";
$MySQL_LavaCar = mysql_connect($hostname_MySQL_LavaCar, $username_MySQL_LavaCar, $password_MySQL_LavaCar) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_MySQL_LavaCar, $MySQL_LavaCar);
?>