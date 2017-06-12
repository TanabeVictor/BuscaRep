<?php
include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';
include_once __DIR__ . '/busca_morador.php';

$id = $_GET['id'];

$res = $conn->query("SELECT * FROM gastos WHERE id_rep=('$id')")->fetch_all(MYSQL_ASSOC);
$gastos = $res;
//echo '<pre>'.var_export($res,true).'</pre>';

$comando = "SELECT * FROM republica WHERE id=('$id')";

$resultado = $conn->query($comando);

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
               <?php if ($_SESSION['user']['img_name'] == NULL):?>
               	<img src="images/user.png" alt="..." height="50px" width="50px" class="img-circle profile_img">
                <?php else:?>
                <img src="upload/<?=$_SESSION['user']['img_name']?>" alt="..." height="50px" width="50px" class="img-circle profile_img">
                <?php endif;?>
              </div>
              <div class="profile_info">
                <span>Bem Vindo,</span>
                <h2><?= $_SESSION['user']['user']?></h2>
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
					<?php if ($_SESSION['user']['img_name'] == NULL):?>
					<img src="images/user.png" alt="">
					<?php else:?>
					<img src="upload/<?=$_SESSION['user']['img_name']?>" alt="">
					<?php endif;?><?= $_SESSION['user']['user']?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile_page.php"> Perfil</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
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
											   <?php if ($dado["img_name"] == "NULL"):?>
												<img src="images/image_default.jpg" alt="avatar" height="200px" width="200px">
												<?php else:?>
												<img src="upload/<?=$dado["img_name"]?>" alt="avatar" height="200px" width="200px">
												<?php endif;?>
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
												<?php echo masc_tel($dado["phone"]);?>
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
														<?php echo $dado['services']; ?>
													</p>
											</li>
										</ul>
										<a class="btn bg-blue" href="rep_ed_page.html"><i class="fa fa-star"></i> Avaliar</a>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<div class="" role="tabpanel" data-example-id="togglable-tabs">
											<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
												<li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Avaliações</a>
												</li>
												<li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Moradores</a>
												</li>
												<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Gastos</a>
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
													<div class="x_content">
														<div class="table-responsive">
															<table class="table table-striped jambo_table bulk_action">
																<thead>
																	<tr class="headings">
																		<th class="column-title"></th>
																		<th class="column-title">Nome</th>
																		<th class="column-title">Entrada</th>
																		<th class="column-title">Estadia</th>
																		<th class="column-title"></th>
																		<th class="bulk-actions" colspan="7">
																			<a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
																		</th>
																	</tr>
																</thead>

																<tbody>
																<?php foreach($morador as $value) { ?>
																	<tr class="even pointer">
																		<td class="a-center ">
																		</td>
																		<td class=" ">
																			<?=$value['name']; ?>
																		</td>
																		<td class=" ">
																			<?= inverteData($value['entrada']) ?>
																		</td>
																		<td class=" ">
																		<?php if(empty($value['estadia'])):?>
																			<?= "until today"?>
																		<?php else:?>	
																			<?= inverteData($value['estadia'])?>
																		<?php endif; ?>
																		</td>
																		<td>
																		</td>
																	</tr>
																<?php } ?>
																</tbody>
															</table>
														</div>
													</div>
												</div>
												<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
													<div class="x_content">
														<div class="table-responsive">
															<table class="table table-striped jambo_table bulk_action">
																<thead>
																	<tr class="headings">
																		<th class="column-title"></th>
																		<th class="column-title">Data</th>
																		<th class="column-title">Tipo</th>
																		<th class="column-title">Valor</th>
																		<th class="column-title">Descrição</th>
																		<th class="column-title"></th>
																		<th class="bulk-actions" colspan="7">
																			<a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
																		</th>
																	</tr>
																</thead>

																<tbody>
																<?php foreach($gastos as $value) { ?>
																	<tr class="even pointer">
																		<td class="a-center ">
																		</td>
																		<td class=" ">
																			<?= inverteData($value['date']) ?>
																		</td>
																		<td class=" ">
																			<?=  $value['type'] ?>
																		</td>
																		<td class=" ">
																			<?=  "R$ ".$value['value']?>
																		</td>
																		<td class=" ">
																			<?=  $value['description']?>
																		</td>
																		<td>
																		</td>
																	</tr>
																<?php } ?>
																</tbody>
															</table>
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

		<?php

		function inverteData($data){
			if(count(explode("/",$data)) > 1){
				return implode("-",array_reverse(explode("/",$data)));
			}elseif(count(explode("-",$data)) > 1){
				return implode("/",array_reverse(explode("-",$data)));
			}
		}

	    function masc_tel($TEL) {
		$tam = strlen(preg_replace("/[^0-9]/", "", $TEL));
		  if ($tam == 13) { // COM CÓDIGO DE ÁREA NACIONAL E DO PAIS e 9 dígitos
		  return "+".substr($TEL,0,$tam-11)."(".substr($TEL,$tam-11,2).")".substr($TEL,$tam-9,5)."-".substr($TEL,-4);
		  }
		  if ($tam == 12) { // COM CÓDIGO DE ÁREA NACIONAL E DO PAIS
		  return "+".substr($TEL,0,$tam-10)."(".substr($TEL,$tam-10,2).")".substr($TEL,$tam-8,4)."-".substr($TEL,-4);
		  }
		  if ($tam == 11) { // COM CÓDIGO DE ÁREA NACIONAL e 9 dígitos
		  return "(".substr($TEL,0,2).")".substr($TEL,2,5)."-".substr($TEL,7,11);
		  }
		  if ($tam == 10) { // COM CÓDIGO DE ÁREA NACIONAL
		  return "(".substr($TEL,0,2).")".substr($TEL,2,4)."-".substr($TEL,6,10);
		  }
		  if ($tam <= 9) { // SEM CÓDIGO DE ÁREA
		  return substr($TEL,0,$tam-4)."-".substr($TEL,-4);
		  }
	 	}
					  
		?>
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