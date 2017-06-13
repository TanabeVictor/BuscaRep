<?php
include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';


$comando = "SELECT * FROM usuario WHERE rep_name IS NULL ORDER BY name";
$res = $conn->query($comando)->fetch_all(MYSQL_ASSOC);
//echo '<pre>'.var_export($res,true).'</pre>';
$usuario = $res;


?>