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
    <link href="../../public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../../public/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../public/css/custom.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../../public/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
        <section class="login_content">
            <form>
              <h1>Usuario SIGRA</h1>
              <div class="form-group row">
              <label for="heard">Tipo de Usuario:</label>                          
                          <select class="select2_single form-control" id="heard">
                            <option value="">Selecciona</option>
                            <option value="1">Empresa</option>
                            <option value="2">Director Tecnico</option>                           
                          </select>
                      </div>
                      <div class="form-group row" id="emp" style="display: none;">
              <label for="heard">RUC:</label>
              <input type="ruc" class="form-control" required="" />
                      </div>
                      <div class="form-group row" id="ci" style="display: none;">
              <label for="heard">CI:</label>
              <input type="cedula" class="form-control" required="" />
                      </div>
                      <div class="form-group row">
              <label for="heard">Email:</label>
              <input type="email" class="form-control"  required="" />
                      </div>
              
              <div>
              <button type="submit" class="btn btn-info">Registrar</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Ya eres usuario?
                  <a href="../" class="to_register"> Iniciar Sesion </a>
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
    <!-- jQuery -->
    <script src="../../public/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="../../public/vendors/select2/dist/js/select2.full.min.js"></script>
    <script text="text/javascript">
 
     
      $("#heard").change(function(){
        if($(this).val() == "1"){        
          $("#emp").show();
          $("#ci").hide();
        }else if($(this).val() == "2"){
          $("#ci").show();
          $("#emp").hide();
        }else{
          $("#emp").hide();
          $("#ci").hide();
        }
      });
  
    </script>
  </body>

</html>