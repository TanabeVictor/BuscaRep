<?php
include_once('connection/connect.php');
$id = $_GET['id'];

$comando = "SELECT * FROM republica WHERE id=('$id')";

$resultado = mysqli_query($conn, $comando);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Meta, title, CSS, favicons, etc. -->
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
			<div class="navbar nav_title" style="border: 0;"><a href="user_home.php" class="site_title"><em class="fa fa-hotel"></em> <span>Sistema BuscaRep</span></a></div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bem Vindo,</span>
                <h2>Usuário Teste</h2>
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
                  <li><a href="user_home.php"><em class="fa fa-home"></em> Home </a></li>
                  <li><a><em class="fa fa-edit"></em> Cadastro </a> <ul class="nav child_menu">
                      <li><a href="user_reg.php">Usuário</a></li>
                      <li><a href="userdefault_reg.php">Acessante</a></li>
                    </ul>
                  </li>
                  <li><a><em class="fa fa-desktop"></em> Consulta<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="user_view.php">Usuário</a></li>
                      <li><a href="userdefault_view.php">Acessante</a></li>
                    </ul>
                  </li>
                  <li><a><em class="fa fa-home"></em> República <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     <li><a href="rep_cad_page.php"> Nova República+</a></li>
				     <li><a href="rep_page.php">Sua República</a></li>
                     <li><a href="rep_view.php">Ver Repúblicas</a></li>
                    
                    </ul>
                  <li><a><em class="fa fa-bar-chart-o"></em> Estatísticas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
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
                    <img src="images/He-man.jpg" alt="">Usuário
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Perfil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span>Opções</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Ajuda</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown"><a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"> <em class="fa fa-envelope-o"></em> <span class="badge bg-green">4</span> </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Usuário</span>
                          <span class="time">1 min ago</span>
                        </span>
                        <span class="message">
                          Se fudeu...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Usuário</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Sua mãe é minha...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Usuário</span>
                          <span class="time">10 mins ago</span>
                        </span>
                        <span class="message">
                          Why so serious?!
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Usuário</span>
                          <span class="time">1 mounth ago</span>
                        </span>
                        <span class="message">
                          Me fudi no Peruano...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
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
              <div class="col-md-12 col-sm-12 col-xs-12"> <div class="x_panel">
                  <div class="x_title">
                    <h2>República <?php echo $dado["id"]; ?></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                      <h3><?php echo $dado["name"]; ?></h3>
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="upload/<?php echo $dado["img_name"];?>" alt="Avatar">
                        </div>
                      </div>

                      <ul class="list-unstyled user_data">
                       	<p></p>
                        <li><em class="fa fa-map user-profile-icon"></em> <?php echo $dado["city"];?> - <?php echo $dado["state"];?></li>
                        <li><em class="fa fa-map-marker user-profile-icon"></em> <?php echo $dado["street"];?> <?php echo $dado["neighboor"];?>,
                        <?php echo $dado["complement"]; ?></li>
                        <li>
                          <i class="fa fa-phone user-profile-icon"></i><?php echo $dado["phone"]; ?>
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-envelope user-profile-icon"> <?php echo $dado["email"]; ?></i>
                        </li>
                       <li class="m-top-xs">
                          <i class="fa fa-institution user-profile-icon"> <?php echo $dado["agency"]; ?></i>
                        </li>
                      </ul>

                      <a class="btn btn-success" href="rep_ed_page.php?id=<?php echo $dado["id"] ?>"><em class="fa fa-edit m-right-xs"></em>Editar Perfil</a>
                    <br>

                      <!-- start skills -->
                      <h4>Outros</h4>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p> <em class="fa fa-group user-profile-icon"></em>Número de Moradores</p>
                          inserir numero aqui
                        </li>
                        <li>
                          <p> <br><em class="fa fa-info user-profile-icon"></em> Tipo de República:<p><?php echo $dado["type"]; ?></p></p>
                        </li>
                        <li>
                          <p> <br><em class="fa fa-server user-profile-icon"></em> Serviços:<p></p><p><?php echo $dado["services"]; ?></p>
                        </li>
                      </ul>
                      <!-- end of skills -->
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

				<div class="x_panel">
                  <div class="x_title">
                    <h2>Galeria de Fotos</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><span style="padding-left:100px"><a class="collapse-link"><i class="fa fa-chevron-up"></span></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="row">
                      <div class="col-md-3">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                            <div class="mask">
                              <p>Imagem I</p>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                            <div class="mask">
                              <p>Imagem II</p>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                            <div class="mask">
                              <p>Imagem III</p>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                            <div class="mask">
                              <p>Imagem IV</p>
                            </div>
                          </div>
                      </div>
	                </div>
                  </div>
                </div>
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
						   
                           <a href="caminho" class="btn btn-block"><em class="fa fa-plus"></em> Avaliar</a>
                            <!-- start recent activity -->
                            <ul class="messages">
                               <li>
                               <?php
						        include_once('connection/connect.php');
						        $id = $_GET['id'];
                                $comando = "SELECT * FROM avaliacao WHERE id_rep=('$id')";
						        $resultado3 = mysqli_query($conn, $comando)?>
					     		
                          		<?php while($dado3 = mysqli_fetch_array($resultado3)){ ?>
                           
                                <img src="upload/<?php echo $dado3['img_name']?>" class="avatar" alt="Avatar">
                                <div class="message_date">
                                  
                                <h3 class="date text-error">
                               	<?php 
								$data = $dado3['date'];
								$partes = explode("-", $data);
								$dia = $partes[2];
								$mes = $partes[1];
							    $ano = $partes[0];													  
								echo $dia?>
                               	</h3>
                                 
                                <p class="month">Jun</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading"><?php echo $dado3['author'] ?></h4>
                                  <div>
                      			  <blockquote class="message"><?php echo $dado3['description'] ?></blockquote>
                                  <br />
								</div>
                              </li>
	 						 <?php } ?>
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
                              </tbody>
                            </table>
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab"><a href="gasto_cad_page.php?id=<?php echo $dado["id"] ?>" class="btn btn-block"><em class="fa fa-plus"></em> Gasto</a>
                          <table class="table table-striped projects">
                          <?php
						   include_once('connection/connect.php');
						   $id = $_GET['id'];
                           $comando = "SELECT * FROM gastos WHERE id_rep=('$id')";
						   $resultado2 = mysqli_query($conn, $comando)?>

                         <thead>
                        <tr>
                          <th>Tipo</th>
                          <th>Valor</th>
                          <th>Data</th>
                          <th>Descrição</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php while($dado2 = mysqli_fetch_array($resultado2)){ ?>
                         <tr>
                          <td><?php echo $dado2['type'] ?></td>
                          <td>
                            <a>R$<?php echo $dado2['value'] ?></a>
                            <br />
                            <small>Created <?php echo $dado2['date_creation'] ?></small>
                          </td>
                          <td><?php echo $dado2['date'] ?></td>
                          <td>
                            <?php echo $dado2['description'] ?><br>
                            <small>Corresponde a 30% Total</small>
                          </td>
                          
                          <td>
                            <a href="gasto_edit.php?id=<?php echo $dado2["id"] ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="gasto_delete.php?id=<?php echo $dado2["id"] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Deletar </a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                            <p>Informações adicionais...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></div>
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

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
 
    <script src="../vendors/starrr/dist/starrr.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
	<script>
      $(document).ready(function() {
        $(".stars").starrr();

        
        $('.stars-existing').on('starrr:change', function (e, value) {
          $('.stars-count-existing').html(value);
        });
      });
    </script>
</html>
