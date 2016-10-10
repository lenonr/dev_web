<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAFD | Inicio </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bootstrap/css/ionicons.min.css">
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

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> Inicio > Página de Busca </i></a></li>
          </ol>
        </br>
        <!--<div class="col-xs-6">
          <h4> Página de Busca </h4>
          <br>
          <label align> Nenhum resultado encontrado! </label>
        </div>-->

        <section class="content">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Resultados</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                          <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row"><div class="col-sm-6"></div>
                              <div class="col-sm-3"></div>
                            </div><div class="row">
                            <div class="col-sm-12">
                              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                              <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="" aria-sort="descending">Número requisição</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Material</th>                           <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Solicitante</th></tr>
                            </thead>
                            <tbody>
                            <!--<tr role="row" class="odd">
                                <td class="sorting_1">Webkit</td>
                                <td class="">Safari 3.0</td>
                                <td>OSX.4+</td>
                                <td>522.1</td>
                                <td>A</td>
                              </tr><tr role="row" class="even">
                                <td class="sorting_1">Webkit</td>
                                <td class="">Safari 2.0</td>
                                <td>OSX.4+</td>
                                <td>419.3</td>
                                <td>A</td>
                              </tr><tr role="row" class="odd">
                                <td class="sorting_1">Webkit</td>
                                <td class="">Safari 1.3</td>
                                <td>OSX.3</td>
                                <td>312.8</td>
                                <td>A</td>
                              </tr><tr role="row" class="even">
                                <td class="sorting_1">Webkit</td>
                                <td class="">Safari 1.2</td>
                                <td>OSX.3</td>
                                <td>125.5</td>
                                <td>A</td>
                              </tr><tr role="row" class="odd">
                                <td class="sorting_1">Webkit</td>
                                <td class="">S60</td>
                                <td>S60</td>
                                <td>413</td>
                                <td>A</td>
                              </tr><tr role="row" class="even">
                                <td class="sorting_1">Webkit</td>
                                <td class="">OmniWeb 5.5</td>
                                <td>OSX.4+</td>
                                <td>420</td>
                                <td>A</td>
                              </tr><tr role="row" class="odd">
                                <td class="sorting_1">Webkit</td>
                                <td class="">iPod Touch / iPhone</td>
                                <td>iPod</td>
                                <td>420.1</td>
                                <td>A</td>
                              </tr><tr role="row" class="even">
                                <td class="sorting_1">Trident</td>
                                <td class="">Internet Explorer 7</td>
                                <td>Win XP SP2+</td>
                                <td>7</td>
                                <td>A</td>
                              </tr><tr role="row" class="odd">
                                <td class="sorting_1">Trident</td>
                                <td class="">Internet
                                  Explorer 6</td>
                                <td>Win 98+</td>
                                <td>6</td>
                                <td>A</td>
                              </tr><tr role="row" class="even">
                                <td class="sorting_1">Trident</td>
                                <td class="">Internet
                                  Explorer 5.5</td>
                                <td>Win 95+</td>
                                <td>5.5</td>
                                <td>A</td>
                              </tr></tbody>-->
                          </table>
                        </div></div>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                </section>

      </div><!-- /.content-wrapper -->

      <div class="tab-content no-padding">
        <div class="tab-pane" id="#dg">
          <label>direcao geral</label>
        </div>

        <div class="tab-pane" id="dad">
          <label>direcao administrativo</label>
        </div>
      </div>

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
