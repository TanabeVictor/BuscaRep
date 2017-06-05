 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Página Inicial</title>

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
  
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
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
                    <img src="images/img.jpg" alt="">Usuário Teste
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Perfil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Configurações</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Ajuda</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown"><a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"> <em class="fa fa-envelope-o"></em> <span class="badge bg-green">4</span> </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Usuário Teste</span>
                          <span class="time">1 mins ago</span>
                        </span>
                        <span class="message">
                          Olá! Eu sou um email teste
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
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
                <h3>Cadastro Usuário</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Pesquisar">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">></button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
            
                  <div class="x_panel">
                  <div class="x_title">
                    <h2>Formulário - Usuário</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   
                     <form action="user_insert.php" method="POST" id="form" data-parsley-validate class="form-horizontal form-label-left">
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nome <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="last-name" class="control-label col-md-3 col-sm-3 col-xs-12">Sobrenome</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="lastname" class="form-control col-md-7 col-xs-12" type="text" name="lastname">
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">E-mail</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" class="form-control col-md-7 col-xs-12" type="text" name="email">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Data de Nascimento <span class="required"></span>
                        </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" name="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="date">
                        </div>
                      </div>
                      
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">Tipo de Perfil<span class="required">*</span>
                        </label>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="type" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="type" required>                 
                            <option> Escolha um tipo </option>
                            <option>Acessante</option>
                            <option>Administrador</option>
                          </select>
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Senha <span class="required">*</span>
                        </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" name="password" class="password form-control col-md-7 col-xs-12" required="required" type="password">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirmar Senha <span class="required">*</span>
                        </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="confirm" name="confirm" class="password form-control col-md-7 col-xs-12" required="required" type="password">
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancelar</button>
                          <button type="submit" value="Cadastrar" class="btn btn-success">Salvar</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
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