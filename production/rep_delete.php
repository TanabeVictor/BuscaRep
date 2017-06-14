<?php
include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';

$user = $_SESSION['user']['user'];

$id = $conn->query("SELECT id FROM republica WHERE responsavel='$user'")->fetch_assoc()['id'];

$comando = $conn->query("UPDATE republica SET ativo=false WHERE id='$id'");

$morador = $conn->query("SELECT * FROM morador WHERE id_rep=('$id')")->fetch_all(MYSQL_ASSOC);

foreach ($morador as $value):

$name = $value['user_name'];
$comando = $conn->query("UPDATE usuario SET rep_name=NULL WHERE name='$name'");

endforeach;

header("location:http://localhost/production/BuscaRep/production/loged_page_user.php");