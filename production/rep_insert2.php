<?php
include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';

$user = $_SESSION['user']['user'];

$rep = $conn->query("SELECT id, name FROM republica WHERE responsavel=('$user')")->fetch_all(MYSQL_ASSOC)[0];
echo '<pre>'.var_export($rep,true).'</pre>';
$id = $rep['id'];

$date = date('Y-m-d');
$comando2 = "INSERT INTO morador(user_name, id_rep, entrada) VALUES ('$user','$id','$date')";
$exec = $conn->query($comando2);
var_dump($exec);

$name = $rep['name'];
$command = "UPDATE usuario SET rep_name=('$name') WHERE name=('$user')";
$result = $conn->query($command);
var_dump($result);

//header("location:http://localhost/production/BuscaRep/production/loged_page_user.php");