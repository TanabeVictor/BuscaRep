<?php
include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';

$user= $_SESSION['user']['user'];

$comando = "SELECT id FROM republica WHERE responsavel=('$user')";

$resultado = $conn->query($comando)->fetch_assoc();
$id_rep = $resultado['id'];

$res = $conn->query("SELECT * FROM morador WHERE id_rep=('$id_rep')")->fetch_all(MYSQL_ASSOC);
//echo '<pre>'.var_export($res,true).'</pre>';
$morador = $res;

?>