<?php
    # chamando arquivo
    include 'form_bens_1_admin.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> SAFD | Inicio </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
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
    <!-- <body class="hold-transition skin-green layout-fixed sidebar-mini"> -->
    <body class="hold-transition skin-green fixed sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <header class="main-header" >
                <?php
                  include 'header_admin.php';
                ?>
            </header>

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <?php
                  include 'menulat_admin.php';
                ?>
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href=""><i class="fa fa-dashboard"></i> Inicio</a></li>
                    </ol>
                    </br>
                    <h1> Tela do Administrador do Sistema </h1><hr>
                    <h4> - Aqui você poderá realizar o CRUD nos usuários, abrangendo a tabela função, funcionario e setor. </h4>
                    <!-- <h4> - Link para o formulário de cadastro de Demandas: <a target="blank" href="form_bens.php"> form_bens.php </a></h4> -->
            </div>
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
