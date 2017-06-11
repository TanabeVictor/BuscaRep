<?php

include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';

$user = $_SESSION[ 'user' ][ 'user' ];

?>

<?php
if ( empty( $_FILES[ 'arquivo' ] ) ):
	$novo_nome = $_SESSION[ 'user' ][ 'img_name' ];
?>

<?php
else :
	$extensao = strtolower( substr( $_FILES[ 'arquivo' ][ 'name' ], -4 ) );
	$novo_nome = md5( time() ) . $extensao;
	$diretorio = "upload/";

move_uploaded_file( $_FILES[ 'arquivo' ][ 'tmp_name' ], $diretorio . $novo_nome );
?>
<?php endif; ?>

<?php echo "$novo_nome <br>";?>

<?php
if ( !isset( $novo_nome ) ) {
	$novo_nome = $_SESSION[ 'user' ][ 'img_name' ];
}
echo "$novo_nome <br>";

$name = $_POST[ 'name' ];
if ( empty( $name ) ) {
	$name = $_SESSION[ 'user' ][ 'name' ];
}

echo "$name <br>";

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

$comando = "UPDATE usuario SET img_name=('$novo_nome'), name=('$name'), birthday=('$birthday'), phone=('$phone'), gender=('$gender')  WHERE user=('$user')";

$resultado = $conn->query( $comando );


//header("location:http://localhost/production/BuscaRep/production/loged_page_user.php");