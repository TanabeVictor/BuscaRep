<?php
include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';

$user_name = $_SESSION[ 'user' ][ 'user' ];
$resultado = "SELECT id_rep FROM morador WHERE user_name = $user_name ";
$resultado = $conn->query( $resultado );

if ( $resultado ) {

	$busca = "SELECT name FROM republica WHERE id = $resultado";
	$rep_name = $conn->query( busca );

} else {
	$rep_name = "Morador de rua";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/favicon.ico">
	<title>BuscaRep</title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
	<style>

	</style>
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;"><a href="loged_page_user.php" class="site_title"> <img src="images/buscarep.png" width="40" height="40"> BuscaRep</a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="images/user.png" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Bem Vindo,</span>
						
							<h2>Usuário</h2>
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- /menu profile quick info -->

					<br/>

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>Menu</h3>
							<ul class="nav side-menu">
								<li><a><em class="fa fa-home"></em> República <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="rep_cad_page_user.php"> Nova República+</a>
										</li>
										<li><a href="rep_page_user.php">Sua República</a>
										</li>
										<li><a href="media_rep_user.php">Galeria</a>
										</li>
										<li><a href="review_rep_user.php">Avaliações</a>
										</li>
										<li><a href="inbox.php">Caixa de Menssagem</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>

					</div>
					<!-- /sidebar menu -->
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<nav>
						<div class="nav toggle">
							<a id="menu_toggle"><i class="fa fa-bars"></i></a>
						</div>

						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt="">Usuário
                    <span class=" fa fa-angle-down"></span>
                  </a>
							
								<ul class="dropdown-menu dropdown-usermenu pull-right">
									<li><a href="javascript:;"> Profile</a>
									</li>
									<li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
									</li>
								</ul>
							</li>
							<!--caixa de messagem-->
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
						</div>

						<div class="title_right"> </div>
					</div>

					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>
										<?php echo $_SESSION['user']['name']?>
									</h2>

									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
										<div class="profile_img">
											<div id="crop-avatar">
												<!-- Current avatar -->
												<img src="upload/<?= $_SESSION['user'][" img_name "];?>" width="200px" height="200px" alt="Avatar">
											</div>
										</div>
										<br>
										<a class="btn bg-green" href="profile_edit.php"><i class="fa fa-edit"></i> Editar Perfil</a>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<div class="x_panel">
											<ul class="list-unstyled user_data">
												<p></p>
												<li>
													<em class="fa fa-home ">&nbsp<?= $rep_name?></em>
												</li>
												<li>
													<?php if($_SESSION['user']['gender'] == "Masculino"):?>
													<em class="fa fa-mars">&nbsp<?= $_SESSION['user']['gender']?></em>
													<?php else:?>
													<em class="fa fa-venus">&nbsp <?= $_SESSION['user']['gender']?></em>
													<?php endif;?>
												</li>
												<li>
													<em class="fa fa-birthday-cake">&nbsp <?= $_SESSION['user']['birthday']?></em>
												</li>
												<li>
													<em class="fa fa-phone">&nbsp <?= $_SESSION['user']['phone']?></em>
												</li>
											</ul>
										</div>
										<!--galeria-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /page content -->

	<!-- footer content -->
	<footer>
		<div class="pull-right">
			Sistema BuscaRep - Developed by<a href="https://antaresit.com">Antares IT</a>
		</div>
		<div class="clearfix"></div>
	</footer>
	<!-- /footer content -->

	<!-- jQuery -->
	<script src="../vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="../vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="../vendors/nprogress/nprogress.js"></script>

	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js"></script>
</body>

</html>