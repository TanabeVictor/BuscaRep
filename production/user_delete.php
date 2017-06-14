<?php
include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';

$name = $_SESSION['user']['name'];

$comando = $conn->query("DELETE FROM avaliacao WHERE author='$name'");

$id = $conn->query("SELECT id_rep FROM morador WHERE user_name='$name' and estadia IS NULL")->fetch_assoc()['id_rep'];
$comando = $conn->query("UPDATE republica SET dweller=dweller - 1 WHERE id=$id");

$comando = $conn->query("DELETE FROM morador WHERE user_name='$name'");

$user = $_SESSION['user']['user'];
$comando = $conn->query("DELETE FROM usuario WHERE user='$user'");

//session_start();
session_unset();
session_destroy();

header("location:http://localhost/production/BuscaRep/index.php");
