<?php

include_once('connection/connect.php');
include_once __DIR__ . '/loged_test.php';

$date = date ('Y-m-d');
$type = $_POST['type'];
$value = $_POST['value'];
$description = $_POST['services'];

$comando = "INSERT INTO gastos (id_rep, type, date, value, description) VALUES ('$id_rep','$type', '$date', '$value', '$description')";

$resultado = $conn->query($comando);

header("location:http://localhost/production/BuscaRep/production/rep_page_user.php");