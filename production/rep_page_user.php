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
			<div class="navbar nav_title" style="border: 0;"><a href="loged_page_user.php" class="site_title"> <img src="images/buscarep.png" width="40" height="40"> BuscaRep</a></div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/He-man.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bem Vindo,</span>
                <h2>Usuário</h2>
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
                        <li><a href="media_rep_user.php">Galeria</a></li>
                      	<li><a href="review_rep_user.php">Avaliações</a></li>
                      	<li><a href="inbox.php">Caixa de Menssagem</a></li> 
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
              <div class="col-md-12 col-sm-12 col-xs-12"> <div class="x_panel">
                  <div class="x_title">
                    <h2>República #ID</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                      <h3>Nome da República</h3>
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/Esqueleto-1983.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>

                      <ul class="list-unstyled user_data">
                       	<p></p>
                        <li><em class="fa fa-map user-profile-icon"></em> Cidade - Estado</li>
                        <li><em class="fa fa-map-marker user-profile-icon"></em> Rua,Número,Bairro,
                        Complemento</li>
                        <li>
                          <i class="fa fa-phone user-profile-icon"></i> (__) ____-____
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-envelope user-profile-icon"> user_email@email.com</i>
                        </li>
                       <li class="m-top-xs">
                          <i class="fa fa-institution user-profile-icon"> Locador</i>
                        </li>
                      </ul>

                      <a class="btn btn-success" href="rep_ed_page.html"><i class="fa fa-edit m-right-xs"></i>Editar Perfil</a>
                      <a class="btn btn-danger" href="rep_delete.php"><i class="fa fa-remove m-right-xs"></i> Deletar Perfil</a>
                      <br />

                      <!-- start skills -->
                      <h4>Outros</h4>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p> <em class="fa fa-group user-profile-icon"></em> Número de Moradores</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                        <li>
                          <p> <em class="fa fa-info user-profile-icon"></em> Tipo de República:<p>.</p></p>
                        </li>
                        <li>
                          <p> <em class="fa fa-server user-profile-icon"></em> Serviços:<p>.</p><p>.</p>
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
                              <p>Your Text</p>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                            <div class="mask">
                              <p>Your Text</p>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                            <div class="mask">
                              <p>Your Text</p>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                            <div class="mask">
                              <p>Your Text</p>
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
                           <a class="btn btn-block" href="gasto_cad_page_user.php"><i class="fa fa-plus" ></i> Gasto</a>
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
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
