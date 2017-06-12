<?php
include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';

$comando = "SELECT * FROM usuario ORDER BY name";
$res = $conn->query($comando)->fetch_all(MYSQL_ASSOC);
$usuario = $res;

?>