<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAFD | Form. Bens </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  </head>
    <!--<body class="hold-transition skin-green fixed sidebar-mini">-->
    <body class="hold-transition skin-green layout-boxed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <header class="main-header" >
        <?php
          include 'header.php';
        ?>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <?php
        include 'menulat.php';
      ?>
    </aside>


      <!-- =============================================== -->
      <!--FORMULARIO DE BENS-->
      <!--<form onsubmit="alert('Solicitação enviada para avaliação para o DPDI!')">-->
      <form>
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->

          <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert"  aria-hidden="true">
              ×
            </button>
            <h4>
              <i class="icon fa fa-warning">
              </i>
              Informações importantes
              </h4>

          </div>

          <section class="content-header">
            <h4>
              REQUISIÇÃO DE COMPRA - BENS
            </h4>
            <ol class="breadcrumb">
              <li><a href=""><i class="fa fa-dashboard"></i> Inicio>Formulário para Solicitação de Bens>Avaliação Coordenador</i> </a></li>
            </ol>
          </section>


          <div class="form-group">
            <label> Superior imediato do Requisitante </label>
            <textarea class="form-control" rows="3"> Coordenação/Departamento/Direção/Pró-reitoria. Estou ciente da solicitação e autorizo o prosseguimento da solicitação.</textarea>
            <div class="checkbox">
              <label>
                <input type="checkbox">
                  Eu <b><?php echo $_SESSION["usuario"]?></b> autorizo o proceguimento desta solicitação
              </label>
              <label> Data:<?php ?> </label>
            </div>
          </div>
          <!--SIAPE-->
          <button type="submit" class="btn btn-danger pull-left">Interromper pedido do Solicitante</button>
          <button type="submit"class="btn btn-success pull-right">Enviar para a próxima etapa</button>
        </div>
      </form>

      <footer class="main-footer">
        <?php
          include 'footer.php';
        ?>
      </footer>

          <!-- Stats tab content -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
  </body>
</html>
