<?php

$con =  mysql_connect("localhost","root", "");
$db = mysql_select_db("buscarep", $con);

if(!$con){
	die("Erro na conexão de dados".mysql_error());
}

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=uutf8');

?>