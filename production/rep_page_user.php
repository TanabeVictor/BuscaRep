<?php
include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';
include_once __DIR__ . '/busca_morador.php';
include_once __DIR__ . '/busca_gasto.php';
include_once __DIR__ . '/busca_usuario.php';
include_once __DIR__ . '/busca_avaliacao.php';


$user = $_SESSION[ 'user' ][ 'user' ];

$comando = "SELECT * FROM republica WHERE responsavel=('$user')";

$resultado = $conn->query( $comando );

if ( $conn->affected_rows == 0 ) {

	header( "location:http://localhost/production/BuscaRep/production/rep_default_page.php" );

}

$id_rep = $conn->query("SELECT id FROM republica WHERE responsavel=('$user')")->fetch_assoc()['id'];

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
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;"><a href="loged_page_user.php" class="site_title"> <img src="images/buscarep.png" width="40px" height="40px"> <span>BuscaRep</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<?php if ($_SESSION['user']['img_name'] == NULL):?>
							<img src="images/user.png" alt="avatar" height="50px" width="50px" class="img-circle profile_img">
							<?php else:?>
							<img src="upload/<?=$_SESSION['user']['img_name']?>" height="50px" width="50px" alt="avatar" class="img-circle profile_img">
							<?php endif;?>
						</div>
						<div class="profile_info">
							<span>Bem Vindo,</span>
						
							<h2>
								<?= $_SESSION['user']['user']?>
							</h2>
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
									<?php endif;?>
									<?= $_SESSION['user']['user']?>
									<span class=" fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu dropdown-usermenu pull-right">
									<li><a href="profile_page.php"> Perfil</a>
									</li>
									<li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Sair</a>
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
					<?php while($dado = mysqli_fetch_array($resultado)){ ?>
					<div class="clearfix"></div>

					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>República <?= $dado['name']?></h2>
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
												<img src="upload/<?=$dado['img_name']?>" alt="avatar" height="200px" width="200px">
												<?php endif;?>
											</div>
										</div>

										<ul class="list-unstyled user_data">
											<p></p>
											<li><em class="fa fa-map user-profile-icon"></em>&nbsp
												<?= $dado['city']. ' - '. $dado['state']?>
											</li>
											<li><em class="fa fa-map-marker user-profile-icon"></em> &nbsp
												<?= $dado['neighborhood'].', '.$dado['street']. ', '.$dado['number']. ', '.$dado['complement']?>
											</li>
											<li>
												<i class="fa fa-phone user-profile-icon"></i>&nbsp
												<?= masc_tel($dado['phone'])?>
											</li>

											<li class="m-top-xs">
												<i class="fa fa-envelope user-profile-icon">&nbsp <?= $dado['email']?></i>
											</li>
											<li class="m-top-xs">
												<i class="fa fa-institution user-profile-icon">&nbsp <?= $dado['agency']?></i>
											</li>
										</ul>
										</br>
										<!-- start skills -->
										<h4>Outros</h4>
										<ul class="list-unstyled user_data">
											<li>
												<p> <em class="fa fa-group user-profile-icon"></em> Número de Moradores </p>
												<p>
													<?= $dado['dweller']. ' / '.$dado['qtd'];?>
												</p>
											</li>
											<li>
												<p> <br><em class="fa fa-info user-profile-icon"></em> Tipo de República
													<p>
														<?= $dado['type']; ?>
													</p>
												</p>
											</li>
											<li>
												<p> <br><em class="fa fa-server user-profile-icon"></em> Serviços
													<p></p>
													<p>
														<?= $dado['services']; ?>
													</p>
											</li>
										</ul>
										<!-- end of skills -->
										<br/>
										<a class="btn btn-success" href="rep_ed_page.html"><i class="fa fa-edit m-right-xs"></i>Editar Perfil</a>
										<a class="btn btn-danger" href="rep_delete.php"><i class="fa fa-remove m-right-xs"></i> Deletar Perfil</a>
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

													<!-- start recent activity -->
													<ul class="messages" id="comments">

													  <?php foreach($avaliacao as $value){ ?>

													  <li>
															<?php if (isset($value['img_name'])):?>
															<img src="upload/<?=$value['img_name']?>" class="avatar" alt="Avatar" alt="">
															<?php else:?>
															<img src="images/user.png" class="avatar" alt="Avatar" alt="">
															<?php endif;?>
														<div class="message_date">

														<h3 class="date text-info"><?php 
														$data = $value['date'];
														$partes = explode("-", $data);
														$dia = $partes[2];
														$mes = $partes[1];
														$ano = $partes[0];													  
														echo $dia?></h3>
													    <?php $jd=gregoriantojd($mes,$dia,$ano);?>
														<p class="month"><?= jdmonthname($jd,0);?></p>
														</div>
														<div class="message_wrapper">
														  <h4 class="heading"><?= $value['author']?></h4>
														  <blockquote class="message"><?= $value['comentario']?></blockquote>
														  <br />
														</div>
													  </li>
													  <?php } ?>
													  </ul>
													<!-- end recent activity -->

												</div>
												<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
												<?php if($dado['dweller'] == $dado['qtd']): ?>
												<a class="fa fa-exclamation-circle"> Já atingiu o limite de moradores!</a>
												<?php else:?>
														<a class="btn btn-block" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab" data-toggle="modal" data-target="#modal_morador"><i class="fa fa-plus" ></i> Morador </a>
												<?php endif; ?>
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
																			<?= $user = $value['user_name'];?>
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
																			<a class="btn btn-danger" href="morador_delete.php"><i class="fa fa-remove m-right-xs"></i></a>
																		</td>
																	</tr>
																<?php } ?>
																</tbody>
															</table>
														</div>
													</div>
												</div>
												<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
													<a class="btn btn-block" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab" data-toggle="modal" data-target="#modal_gasto"><i class="fa fa-plus" ></i> Gasto </a>
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
																<?php foreach($gasto as $value) { ?>
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
													<?//php }?>
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
	</div>
	</div>




	<!-- Modal Morador -->
	<div id="modal_morador" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Novo Morador</h4>
				</div>
				<div class="modal-body">
					<form action="morador_insert.php?id=<?php echo $id_rep?>" method="POST" class="form-horizontal form-label-left">
						<div class="item form-group">

							<div class="x_content">
								<p>Selecione a pessoa que deseja adicionar: </p>
								<div class="table-responsive">
									<table class="table table-striped jambo_table bulk_action">
										<thead>
											<tr class="headings">
												<th class="column-title">&nbsp &nbsp Usuário</th>
												<th class="column-title">Nome</th>
												<th class="column-title"></th>
												<th class="bulk-actions" colspan="7">
													<a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions(<span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
												</th>
											</tr>
										</thead>

										<tbody>
											<?php foreach($usuario as $value){ ?>
											<tr class="even pointer">
												<td class="a-center ">
												<input type="checkbox" class="flat" name="morador" value="<?= $value['name']?>"> <?= $value['user']; ?>
												</td>
												<td class="" name="name" value="name">
													<?= $value['name']; ?>
												</td>
												<td>
												<a href="http://localhost/production/BuscaRep/production/profile_view.php?user=<?=$value['user'];?>" class="btn bg-blue btn-xs">Ver Perfil</a>
												</td>
												</td>
											</tr>
										</tbody>
										<?php } ?>
									</table>
								</div>
								<p class="fa fa-exclamation-circle"> Não é permitido inserir morador sem nome</p>
							</div>
						</div>

						<div class="ln_solid"></div>

						<div class="form-group">
							<div class="col-md-9 col-md-offset-3">
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Gasto -->
	<div id="modal_gasto" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Novo Gasto</h4>
				</div>
				<div class="modal-body">
					<form action="http://localhost/production/BuscaRep/production/gasto_insert.php" method="POST" class="form-horizontal form-label-left">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Data </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="date" type="date" name="date" class="form-control">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">Tipo de Gasto<span class="required">*</span>
                        			</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select id="type" class="form-control col-md-7 col-xs-12" name="type" required>
									<option></option>
									<option>Aluguel</option>
									<option>Agua</option>
									<option>Luz</option>
									<option>Internet</option>
									<option>Serviços Gerais</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="value">Valor<span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="value" step=0.01 type="number" name="value" class="form-control" required="required">
							</div>
						</div>

						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="services">Descrição</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea id="services" class="form-control" name="services" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-validation-threshold="10" placeholder="Empresa / Tipo de Serviço Geral"></textarea>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-9 col-md-offset-3">
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<?php

	function inverteData($data){
		if(count(explode("/",$data)) > 1){
			return implode("-",array_reverse(explode("/",$data)));
		}elseif(count(explode("-",$data)) > 1){
			return implode("/",array_reverse(explode("-",$data)));
    	}
	}

	function masc_tel( $TEL ) {
		$tam = strlen( preg_replace( "/[^0-9]/", "", $TEL ) );
		if ( $tam == 13 ) { // COM CÓDIGO DE ÁREA NACIONAL E DO PAIS e 9 dígitos
			return "+" . substr( $TEL, 0, $tam - 11 ) . "(" . substr( $TEL, $tam - 11, 2 ) . ")" . substr( $TEL, $tam - 9, 5 ) . "-" . substr( $TEL, -4 );
		}
		if ( $tam == 12 ) { // COM CÓDIGO DE ÁREA NACIONAL E DO PAIS
			return "+" . substr( $TEL, 0, $tam - 10 ) . "(" . substr( $TEL, $tam - 10, 2 ) . ")" . substr( $TEL, $tam - 8, 4 ) . "-" . substr( $TEL, -4 );
		}
		if ( $tam == 11 ) { // COM CÓDIGO DE ÁREA NACIONAL e 9 dígitos
			return "(" . substr( $TEL, 0, 2 ) . ")" . substr( $TEL, 2, 5 ) . "-" . substr( $TEL, 7, 11 );
		}
		if ( $tam == 10 ) { // COM CÓDIGO DE ÁREA NACIONAL
			return "(" . substr( $TEL, 0, 2 ) . ")" . substr( $TEL, 2, 4 ) . "-" . substr( $TEL, 6, 10 );
		}
		if ( $tam <= 9 ) { // SEM CÓDIGO DE ÁREA
			return substr( $TEL, 0, $tam - 4 ) . "-" . substr( $TEL, -4 );
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

	<!-- Trigger the modal with a button -->


	</div>
	</div>
</body>

</html>