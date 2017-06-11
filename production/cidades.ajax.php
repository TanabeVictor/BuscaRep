<?php


include_once __DIR__ . '/connection/connect.php';
$id = $_GET['id'];

$sql = "SELECT cod_cidades, nome FROM cidades WHERE estados_cod_estados=$id ORDER BY nome";

$array = $conn->query($sql)
					->fetch_all(MYSQLI_ASSOC);


echo json_encode($array,JSON_UNESCAPED_UNICODE);