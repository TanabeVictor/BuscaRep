<?php
include_once __DIR__ . '/connection/connect.php';
include_once __DIR__ . '/loged_test.php';
$comando = "SELECT * FROM republica ORDER BY name ";


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
               	<img src="images/user.png" alt="avatar" class="img-circle profile_img">
                <?php else:?>
                <img src="upload/<?=$_SESSION['user']['img_name']?>" alt="avatar" class="img-circle profile_img">
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

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="search" name="repsearch" class="form-control" placeholder="Procurar por...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><em class="fa fa-search"></em></button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
				<div class="x_panel">
                  <div class="x_title">
                    <h2>Repúblicas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown"> </li>

                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           	<th class="column-title"></th>
                            <th class="column-title">ID</th>
                            <th class="column-title">Nome</th>
                            <th class="column-title">Endereço</th>
                            <th class="column-title">Telefone</th>
                            <th class="column-title">Vagas</th>
                            <th class="column-title"></th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php while($dado = mysqli_fetch_array($resultado)){ ?>
                           <tr class="even pointer">
                            <td class="a-center ">
                            
                            
                            </td>
                          	<td class=" "><?php echo $dado["id"]; ?></td>
                            <td class=" "><?php echo $dado["name"]; ?></td>
                            <td class=" "><?php echo $dado["neighborhood"] . ', ' .$dado["street"] . ', ' . $dado["number"]; ?></td>
                            <td class=" "><?php echo $dado["phone"]; ?></td>
                            <?php if($dado["able"]):?>
	
                            <td class=" "><botton class="border-dark bg-green btn-xs">Disponível</td>
                            <?php else:?>
                            <td class=" "><botton class="border-dark bg-red btn-xs">Indisponível</td>							
                            <?php endif; ?>					  
                           	<td>
                            <a href="rep_view_page.php?id=<?php echo $dado["id"] ?>" class="fa fa-search-plus" class="btn btn-xs">Visualizar</a>
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
