<?php

$servidor = "127.0.0.1";
$usuario  = "root";
$senha	  = "";
$dbname   = "buscarep";

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);
mysqli_set_charset($conn,"utf8");
	
?>