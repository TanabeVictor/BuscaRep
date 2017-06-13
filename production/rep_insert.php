<?php

include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';

echo $id = rand(1000,10000);
echo $name = $_POST['name'];
echo $type = $_POST['type'];
echo $state_id = $_POST['state'];
echo $state = $conn->query("SELECT nome FROM estados WHERE cod_estados=$state_id")->fetch_assoc()['nome']; 
echo $city_id = $_POST['city'];
echo $city = $conn->query("SELECT nome FROM cidades WHERE cod_cidades=$city_id")->fetch_assoc()['nome'];
echo $street = $_POST['street'];
echo $neighborhood = $_POST['neighboor'];
echo $number = $_POST['number'];
echo $complement = $_POST['complement'];
echo $email = $_POST['email'];
echo $phone = $_POST['phone'];
echo $qtd = $_POST['qtd'];
echo $services = $_POST['services'];
echo $agency = $_POST['agency'];
echo $responsavel = $_SESSION['user']['user'];
$msg = false;

if(isset($_FILES['arquivo'])){
	$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
	$novo_nome = md5(time()).$extensao;
	$diretorio = "upload/";
	
	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
}

$comando = "INSERT INTO republica(id, name, type, state, city, street, neighborhood, number, complement, email, phone, qtd, services, agency, img_name, responsavel) VALUES ('$id', '$name', '$type', '$state', '$city', '$street', '$neighborhood', '$number', '$complement', '$email', '$phone', '$qtd', '$services', '$agency', '$novo_nome', '$responsavel')";

$resultado = $conn->query($comando);

header("location:http://localhost/production/BuscaRep/production/loged_page_user.php");

    
