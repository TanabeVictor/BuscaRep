<?php

include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';

$morador = $_GET['user'];
$date = date('Y-m-d');

$comando = $conn->query("UPDATE morador SET estadia='$date' WHERE user_name='$morador'");
$comando = $conn->query("UPDATE usuario SET rep_name=NULL WHERE name='$morador'");


$user = $_SESSION['user']['user'];
$comando = $conn->query("UPDATE republica SET dweller=dweller - 1 WHERE responsavel='$user'");

header("location:http://localhost/production/BuscaRep/production/rep_page_user.php");