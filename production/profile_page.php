<?php
include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';

$user = $_SESSION[ 'user' ][ 'user' ];
$id = $conn->query("SELECT id FROM republica WHERE responsavel='$user'")->fetch_assoc()['id'];


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
			<div class="navbar nav_title" style="border: 0;"><a href="loged_page_user.php" class="site_title"> <img src="images/buscarep.png" width="40px" height="40px"> <span>BuscaRep</span></a></div>

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
                <h2><?= $_SESSION['user']['user']?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a><em class="fa fa-home"></em> República <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     <li><a href="rep_cad_page_user.php"> Nova República+</a></li>
						<li><a href="rep_page_user.php">Sua República</a></li>
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
												<?php $image_name = $_SESSION['user']['img_name'];?>
												<?php if ($image_name == NULL):?>
												<img src="images/user.png" alt="Avatar" width="200px" height="200px">
												<?php else:?>
												<img src="upload/<?=$image_name?>" alt="Avatar" width="200px" height="200px">
												<?php endif;?>
											</div>
										</div>
										<br>
										
										<a class="btn btn-success" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab" data-toggle="modal" data-target="#modal_gasto"><i class="fa fa-edit m-righ-xs"></i> Editar&nbsp &nbsp</a>
										<?php if($id != NULL): ?>
											<a class="fa fa-exclamation-circle"> Você não pode deletar um perfil responsavel por uma república</a>
										<?php else: ?>
											<a class="btn btn-danger" href="user_delete.php"><i class="fa fa-remove m-right-xs"></i> Deletar&nbsp &nbsp</a>
										<?php endif; ?>
										<br/>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<h2>
												<?php if($_SESSION['user']['rep_name']):?>
												<i class="fa fa-home ">&nbsp<?= $_SESSION['user']['rep_name']?></i>
												<?php else:?>
												<i class="fa fa-home"> A procura de um lar...</i>
												<?php endif; ?>
												<br></br>
												<?php if($_SESSION['user']['gender'] == "Masculino"):?>
												<i class="fa fa-mars">&nbsp<?= $_SESSION['user']['gender']?></i>
												<?php elseif($_SESSION['user']['gender'] == "Feminino"):?>
														<i class="fa fa-venus">&nbsp <?= $_SESSION['user']['gender']?></i>
												<?php else:?>
													<i class="fa fa-neuter">&nbsp Desconhecido</i>	
												<?php endif;?>
												<br></br>
												<?php $date = $_SESSION['user']['birthday'];?>
												<i class="fa fa-birthday-cake">&nbsp <?= inverteData($date)?></i>
												<br></br>
												<?php $phone = $_SESSION['user']['phone'] ?>
												<i class="fa fa-phone">&nbsp <?= masc_tel("$phone")?></i>
												<br></br>
										</h2>
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
	
	<!-- Modal Editar -->
	<div id="modal_gasto" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Editando</h4>
				</div>
				<div class="modal-body">
						<form action="http://localhost/production/BuscaRep/production/profile_update.php" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                       <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="arquivo">Imagem </label> 
                			<div class="col-md-6 col-sm-6 col-xs-12">
                			<image id="profileImage" src="images/user.png"/>
							<br></br>
               				<input id="arquivo" class="form-control col-md-7 col-xs-12" type="file" name="arquivo">
						   </div>
                       </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="birthday">Data de Nascimento </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" name="birthday" type="date" class="form-control">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" for="phone">Telefone </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="phone" class="form-control col-md-7 col-xs-12" placeholder="com DDD e sem Simbolos" type="text" name="phone">
                        </div>
					  </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gender">Sexo</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="gender" class="form-control col-md-7 col-xs-12"  name="gender">                 
                            <option></option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                          </select>
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