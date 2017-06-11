<?php

$servidor = "127.0.0.1";
$usuario  = "root";
$senha	  = "";
$dbname   = "buscarep";

$conn = new mysqli($servidor, $usuario, $senha, $dbname );
$conn->set_charset("utf8");
