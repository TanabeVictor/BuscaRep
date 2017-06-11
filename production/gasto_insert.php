<?php

include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';

$user= $_SESSION['user']['user'];

$comando = "SELECT id FROM republica WHERE responsavel=('$user')";

$resultado = $conn->query($comando)->fetch_assoc();
$id_rep = $resultado['id'];

$date = $_POST['date'];

if(empty($date)){
	$date = date('Y-m-d');
}

$type = $_POST['type'];
$value = $_POST['value'];
$description = $_POST['services'];



$comando = "INSERT INTO gastos (id_rep, date, type, value, description) VALUES ('$id_rep', '$date', '$type', '$value', '$description')";

$resultado = $conn->query($comando);

header("location:http://localhost/production/BuscaRep/production/rep_page_user.php");