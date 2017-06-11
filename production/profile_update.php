<?php

include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';

$user = $_SESSION['user']['user'];


if(isset($_FILES['arquivo'])){
	$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
	$novo_nome = md5(time()).$extensao;
	$diretorio = "upload/";
	
	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
}

if($_POST['arquivo'] == NULL){
	$novo_nome = $_SESSION['user']['img_name'];
}

$name = $_POST['name'];
if($name == ""){
	$name = $_SESSION['user']['name'];
}

$birthday = $_POST['birthday'];
if($birthday == ""){
	$birthday = $_SESSION['user']['birthday'];
}

$phone = $_POST['phone'];
if ($phone == ""){
	$phone = $_SESSION['user']['phone'];
}

$gender = $_POST['gender'];
if($gender == "..."){
	$gender = $_SERVER['user']['gender'];
}


$comando = "UPDATE usuario SET img_name=('$novo_nome'), name=('$name'), birthday=('$birthday'), phone=('$phone'), gender=('$gender')  WHERE user=('$user')";

$resultado = $conn->query($comando);


header("location:http://localhost/production/BuscaRep/production/profile_page.php");