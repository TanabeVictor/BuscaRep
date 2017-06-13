<?php
include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';

echo $user = $_SESSION['user']['user'];

	if(isset($_FILES['arquivo'])):
		$extensao = strtolower( substr( $_FILES[ 'arquivo' ][ 'name' ], -4 ) );
		$novo_nome = md5( time() ) . $extensao;
		$diretorio = "upload/";

		move_uploaded_file( $_FILES[ 'arquivo' ][ 'tmp_name' ], $diretorio . $novo_nome );
	else:
		$novo_nome = $_SESSION[ 'user' ][ 'img_name' ];
	endif;
	
echo "$novo_nome <br>";

$name = $_POST[ 'name' ];

if (!isset($name)) {
	$name = $_SESSION[ 'user' ][ 'name' ];
}

echo "$name <br>";

$birthday = $_POST[ 'birthday' ];

if ( !isset( $birthday ) ) {
	$birthday = $_SESSION[ 'user' ][ 'birthday' ];
}
echo "$birthday <br>";

$phone = $_POST[ 'phone' ];

if ( !isset( $phone ) ) {
	$phone = $_SESSION[ 'user' ][ 'phone' ];
}
echo "$phone <br>";

$gender = $_POST[ 'gender' ];

if ( !isset( $gender ) ) {
	$gender = $_SESSION[ 'user' ][ 'gender' ];
}
echo "$gender <br>";

$comando = $conn->query(" UPDATE usuario SET name='$name', birthday='$birthday', gender='$gender', phone='$phone', img_name='$novo_nome' WHERE user='$user'");

header("location:http://localhost/production/BuscaRep/production/loged_page_user.php");