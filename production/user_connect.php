<?php
include_once __DIR__ . '/connection/connect.php';

$user = $_POST['user_name'];
$password = $_POST['password'];

$password = hash('sha512',$password);

$resultado = $conn->query("SELECT * FROM usuario WHERE user = '$user' AND password = '$password'");

if ($conn->affected_rows == 0) {

	header("location:http://localhost/production/BuscaRep/index.php?error=true");

} else {
	session_start();
	$_SESSION['user'] = $resultado->fetch_all(MYSQLI_ASSOC);	
	header("location:http://localhost/production/BuscaRep/production/loged_page_user.php");
}

?>