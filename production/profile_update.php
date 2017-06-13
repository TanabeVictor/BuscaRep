<?php
include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';

echo $user = $_SESSION['user']['user'];

$birthday = $_POST[ 'birthday' ];

if ( empty( $birthday ) ) {
	$birthday = $_SESSION[ 'user' ][ 'birthday' ];
}
echo "$birthday <br>";

$phone = $_POST[ 'phone' ];

if ( empty( $phone ) ) {
	$phone = $_SESSION[ 'user' ][ 'phone' ];
}
echo "$phone <br>";

$gender = $_POST[ 'gender' ];

if ( empty( $gender ) ) {
	$gender = $_SESSION[ 'user' ][ 'gender' ];
}
echo "$gender <br>";

$img = $_FILES['arquivo'];

	if(!empty($img['name'])):
		$extensao = strtolower( substr( $_FILES[ 'arquivo' ][ 'name' ], -4 ) );
		$novo_nome = md5( time() ) . $extensao;
		$diretorio = "upload/";

		move_uploaded_file( $_FILES[ 'arquivo' ][ 'tmp_name' ], $diretorio . $novo_nome );

		echo $novo_nome;
		$comando = $conn->query(" UPDATE usuario SET birthday='$birthday', gender='$gender', phone='$phone', img_name= '$novo_nome' WHERE user='$user'");

		header("location:http://localhost/production/BuscaRep/production/loged_page_user.php");
	
		else:
			
			$comando = $conn->query(" UPDATE usuario SET birthday='$birthday', gender='$gender', phone='$phone' WHERE user='$user'");
			echo "Entrou nessa condição!";
			header("location:http://localhost/production/BuscaRep/production/loged_page_user.php");

	endif;

