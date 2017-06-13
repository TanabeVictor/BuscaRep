<?php

include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';

$id_rep = $_GET['id'];

$author = $_SESSION['user']['name'];
$img_name = $_SESSION['user']['img_name'];
$date = date('Y-m-d');
$cometario= $_POST['comentario'];



$comando = "INSERT INTO avaliacao (comentario, author, date, id_rep, img_name) VALUES ('$cometario', '$author', '$date', '$id_rep', '$img_name')";

$resultado = $conn->query($comando);

header("location:http://localhost/production/BuscaRep/production/rep_view_page.php?id=$id_rep");