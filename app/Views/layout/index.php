<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?=$judul?> | D.E.C.I.</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="<?=base_url()?>/vendor/adminlte/plugins/fontawesome-free/css/all.min.css">
        <!-- IonIcons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?=base_url()?>/vendor/adminlte/dist/css/adminlte.min.css">
    </head>
    <!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
    <script>
        function updateActiveMenu(elementid) {
            document.getElementById(elementid).classList.add('active');
        }

        function updateDashTitle(title) {
            document.getElementById('dashboard-title').innerHTML = title;
        }
    </script>


    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <p id='dashboard-title' class="h3 mb-0">Covid 19 dan Ekonomi</p>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="/" class="brand-link">
                    <img src="<?=base_url()?>/vendor/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">D. E. C. I.</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item menu-open">
                                <a href="/" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/sumber" id='sumber-link' class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        Sumber Data
                                    </p>
                                </a>

                            <li class="nav-item">
                                <a href="/kami" id='kami-link' class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Tentang Kami
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <?= $this->renderSection('content') ?>



            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="<?=base_url()?>/vendor/adminlte/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?=base_url()?>/vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE -->
        <script src="<?=base_url()?>/vendor/adminlte/dist/js/adminlte.js"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src="<?=base_url()?>/vendor/adminlte/plugins/chart.js/Chart.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?=base_url()?>/vendor/adminlte/dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?=base_url()?>/vendor/adminlte/dist/js/pages/dashboard3.js"></script>

        <!-- Update Laman -->
        <script>
            updateDashTitle('<?=$judul?>');
            updateActiveMenu('<?=$activenav?>-link');
        </script>
    </body>

</html>