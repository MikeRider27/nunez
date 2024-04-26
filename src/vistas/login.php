<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../public/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../public/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <form action="/home" method="post">
              <h1>Inicio</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username"/><!-- required="" />-->
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password"/>
              </div>
              <div>
                <!-- butom con color gris -->
                <button type="submit" class="btn btn-info">Iniciar Sesión</button>
              
                <a class="reset_pass" href="#">Olvido su Contraseña?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Nuevo Usuario?
                  <a href="./user/create" class="to_register"> Crear Usuario </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-envelope"></i>  <i class="fa fa-whatsapp"></i> </h1>
                  <p>©2023 All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>       
      </div>
    </div>
  </body>
</html>