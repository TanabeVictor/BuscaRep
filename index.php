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
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Nome de Usuário" required="required" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Senha" required="required" />
              </div>
              <div>
                <a class="btn btn-default submit" href="production/loged_page_user.php">Entrar</a>
                <a class="reset_pass" href="#">Esqueceu a senha?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Novo no site?
                  <a href="#signup" class="to_register"> Criar Conta </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="production/images/buscarep.png" width="40" height="40"> Sistema BuscaRep</h1>
                  <p>©Developed by Atares IT</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Nova Conta</h1>
              <div>
                <input type="text" class="form-control" placeholder="Nome de Usuário" required="required" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="required" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Senha" required="required" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Confirme a Senha" required="required" />
              </div>
              <div>
                <a class="btn btn-default submit" href="production/loged_page_user.php">Criar</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Já é membro?
                  <a href="#signin" class="to_register"> Logar </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="production/images/buscarep.png" width="40" height="40"> Sistema BuscaRep</h1>
                  <p>©Developed by Atares IT</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
