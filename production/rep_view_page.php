<?php
include_once __DIR__ . '/connection/connect.php';

$id = $_GET[ 'id' ];

$comando = "SELECT * FROM republica WHERE id=('$id')";

$resultado = $conn->query( $comando );
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
					<?php while($dado = mysqli_fetch_array($resultado)){ ?>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>República <?php echo $dado["name"]; ?></h2>

									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<div class="col-md-3 col-sm-3 col-xs-12 profile_left">
										<div class="profile_img">
											<div id="crop-avatar">
												<!-- Current avatar -->
												<img src="upload/<?php echo $dado[" img_name "];?>" width="200px" height="200px" alt="Avatar">
											</div>
										</div>

										<ul class="list-unstyled user_data">
											<p></p>
											<li><em class="fa fa-map user-profile-icon"></em>
												<?php echo $dado["city"];?> -
												<?php echo $dado["state"];?>
											</li>
											<li><em class="fa fa-map-marker user-profile-icon"></em>
												<?php echo $dado["neighborhood"];?> ,
												<?php echo $dado["street"];?> ,
												<?php echo $dado["number"];?> ,
												<?php echo $dado["complement"]; ?>
											</li>
											<li>
												<i class="fa fa-phone user-profile-icon"></i>
												<?php echo $dado["phone"]; ?>
											</li>

											<li class="m-top-xs">
												<i class="fa fa-envelope user-profile-icon">
													<?php echo $dado["email"]; ?>
												</i>
											</li>
											<li class="m-top-xs">
												<i class="fa fa-institution user-profile-icon">
													<?php echo $dado["agency"]; ?>
												</i>
											</li>
										</ul>
										<br>
										<!-- start skills -->
										<h4>Outros</h4>
										<ul class="list-unstyled user_data">
											<li>
												<p> <em class="fa fa-group user-profile-icon"></em> Número de Moradores </p>
												<p>
													<?php echo $dado["dweller"]; ?> /
													<?php echo $dado["qtd"]; ?>
												</p>
											</li>
											<li>
												<p> <br><em class="fa fa-info user-profile-icon"></em> Tipo de República
													<p>
														<?php echo $dado["type"]; ?>
													</p>
												</p>
											</li>
											<li>
												<p> <br><em class="fa fa-server user-profile-icon"></em> Serviços
													<p></p>
													<p>
														<?php echo $dado["services"]; ?>
													</p>
											</li>
										</ul>
										<a class="btn bg-blue" href="rep_ed_page.html"><i class="fa fa-star"></i> Avaliar</a>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">

										<div class="x_panel">
											<div class="x_title">
												<h2>Galeria de Fotos</h2>
												<ul class="nav navbar-right panel_toolbox">
													<li><span style="padding-left:100px"><a class="collapse-link"><i class="fa fa-chevron-up"></span>
														</i>
														</a>
													</li>
												</ul>
												<div class="clearfix"></div>
											</div>
											<div class="x_content">

												<div class="row">
													<div class="col-md-3">
														<div class="image view view-first">
															<img style="width: 100%; display: block;" src="images/media.jpg" alt="image"/>
															<div class="mask">
																<p>Your Text</p>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="image view view-first">
															<img style="width: 100%; display: block;" src="images/media.jpg" alt="image"/>
															<div class="mask">
																<p>Your Text</p>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="image view view-first">
															<img style="width: 100%; display: block;" src="images/media.jpg" alt="image"/>
															<div class="mask">
																<p>Your Text</p>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="image view view-first">
															<img style="width: 100%; display: block;" src="images/media.jpg" alt="image"/>
															<div class="mask">
																<p>Your Text</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--galeria-->
										<div class="" role="tabpanel" data-example-id="togglable-tabs">
											<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
												<li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Avaliações</a>
												</li>
												<li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Moradores</a>
												</li>
												<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Gastos</a>
												</li>
												<li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Outros</a>
												</li>
											</ul>
											<div id="myTabContent" class="tab-content">
												<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
													<p>Lista de Avaliações...</p>
													<!-- start recent activity -->
													<ul class="messages">
													</ul>
													<!-- end recent activity -->

												</div>
												<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

													<!-- start user projects -->
													<table class="data table table-striped no-margin">
														<thead>
															<tr>
																<th>ID</th>
																<th>Nome do Morador</th>
																<th>Entrada</th>
																<th class="hidden-phone">Estadia</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1</td>
																<td>Robertinho</td>
																<td>20/02/2015</td>
																<td class="hidden-phone">until today</td>
																<td class="vertical-align-mid">&nbsp;</td>
															</tr>
															<tr>
																<td>2</td>
																<td>Mr.Catra</td>
																<td>03/08/2013</td>
																<td class="hidden-phone">until today</td>
																<td class="vertical-align-mid">&nbsp;</td>
															</tr>
															<tr>
																<td>3</td>
																<td>Pele</td>
																<td>17/03/2014</td>
																<td class="hidden-phone">until 12/11/2015</td>
																<td class="vertical-align-mid">&nbsp;</td>
															</tr>
															<tr>
																<td>4</td>
																<td>Saitama</td>
																<td>30/04/2009</td>
																<td class="hidden-phone">until today</td>
																<td class="vertical-align-mid">&nbsp;</td>
															</tr>
														</tbody>
													</table>
													<!-- end user projects -->

												</div>
												<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
													<p>Lista de Gastos...</p>
												</div>
												<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
													<p>Informações Adicionais...</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
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