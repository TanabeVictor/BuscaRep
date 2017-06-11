<?php
include_once __DIR__ . '/connection/connect.php';

$user = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$password = hash('sha512',$password);

$comando = "INSERT INTO usuario(user,email,password) VALUES ('$user', '$email', '$password')";

$conn->query($comando);

header("location:http://localhost/production/BuscaRep/#signin");