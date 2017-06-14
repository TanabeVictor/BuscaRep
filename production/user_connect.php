<?php
include_once __DIR__ . '/connection/connect.php';

$user = $_POST['user_name'];
$password = $_POST['password'];

echo $password = hash('sha512',$password);

$resultado = $conn->query("SELECT * FROM usuario WHERE user = '$user' AND password = '$password'");

if ($conn->affected_rows == 0) {

	header("location:http://localhost/production/BuscaRep/index.php?error=true");

} else {
	session_start();
	$_SESSION['user'] = $resultado->fetch_all(MYSQLI_ASSOC)[0];
		echo $usuario = $_SESSION['user']['user'];
		echo $senha = hash('sha512','admin');
		echo $senha_use = $_SESSION['user']['password'];
		//echo $senha = hash('sha512',$senha);
		
		if($usuario === 'admin' && $senha === $senha_use){
			header("location:http://localhost/production/BuscaRep/production/loged_admin.php");
		}
		
		else{
			header("location:http://localhost/production/BuscaRep/production/loged_page_user.php");
		}
}
