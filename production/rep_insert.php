﻿<?php

include_once __DIR__ . '/connection/connect.php';

$id = rand(1000,10000);
$name = $_POST['name'];
$type = $_POST['type'];
$state_id = $_POST['state'];
$state = $conn->query("SELECT nome FROM estados WHERE cod_estados=$state_id")->fetch_assoc()['nome']; 
$city_id = $_POST['city'];
$city = $conn->query("SELECT nome FROM cidades WHERE cod_cidades=$city_id")->fetch_assoc()['nome'];
$street = $_POST['street'];
$neighboor = $_POST['neighboor'];
$number = $_POST['number'];
$complement = $_POST['complement'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$qtd = $_POST['qtd'];
$services = $_POST['services'];
$agency = $_POST['agency'];
$dweller = 0;
$msg = false;

if(isset($_FILES['arquivo'])){
	$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
	$novo_nome = md5(time()).$extensao;
	$diretorio = "upload/";
	
	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
}

$comando = "INSERT INTO republica(id, name, type, state, city, street, neighborhood, number, complement, email, phone, qtd, services, agency,img_name) VALUES ('$id', '$name', '$type', '$state', '$city', '$street', '$neighboor', '$number', '$complement', '$email', '$phone', '$qtd', '$services', '$agency', '$novo_nome')";

$resultado = $conn->query($comando);

header("location:http://localhost/SiteBuscaRep/production/loged_page_user.php");
?>
    