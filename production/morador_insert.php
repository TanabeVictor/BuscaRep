<?php 

include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';

$user_name = $_POST['morador'];
$id_rep = $_GET['id'];
$date = date('Y-m-d');


$comando = "INSERT INTO morador(user_name, id_rep, entrada) VALUES ('$user_name','$id_rep','$date')";
$resultado = $conn->query($comando);


$rep_name = $conn->query("SELECT name FROM republica WHERE id=$id_rep")->fetch_assoc()['name'];
$command = "UPDATE usuario SET rep_name=('$rep_name') WHERE name=('$user_name')";
$result = $conn->query( $command );

$rep = $conn->query("SELECT dweller, qtd FROM republica WHERE id=$id_rep")->fetch_all(MYSQL_ASSOC)[0];
//echo '<pre>'.var_export($rep,true).'</pre>';

$command2 = "UPDATE republica SET dweller=dweller+1 WHERE id=$id_rep";
$result2 = $conn->query( $command2 );

header("location:http://localhost/production/BuscaRep/production/rep_page_user.php");