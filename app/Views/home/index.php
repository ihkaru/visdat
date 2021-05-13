<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 3</title>

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

  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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
        <a href="index3.html" class="brand-link">
          <img src="<?=base_url()?>/vendor/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">D. E. C. I.</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./index.html" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Covid 19 dan Ekonomi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Covid 19</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Ekonomi</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Sumber Data
                    <span class="badge badge-info right">6</span>
                  </p>
                </a>

              <li class="nav-item">
                <a href="#" class="nav-link">
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

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header py-1">
          <div class="container-fluid">
            <div class="row mb-1">
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title">Online Store Visitors</h3>
                      <a href="javascript:void(0);">View Report</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="d-flex">
                      <p class="d-flex flex-column">
                        <span class="text-bold text-lg">820</span>
                        <span>Visitors Over Time</span>
                      </p>
                      <p class="ml-auto d-flex flex-column text-right">
                        <span class="text-success">
                          <i class="fas fa-arrow-up"></i> 12.5%
                        </span>
                        <span class="text-muted">Since last week</span>
                      </p>
                    </div>
                    <!-- /.d-flex -->

                    <div class="position-relative mb-4">
                      <canvas id="visitors-chart" height="200"></canvas>
                    </div>

                    <div class="d-flex flex-row justify-content-end">
                      <span class="mr-2">
                        <i class="fas fa-square text-primary"></i> This Week
                      </span>

                      <span>
                        <i class="fas fa-square text-gray"></i> Last Week
                      </span>
                    </div>
                  </div>
                </div>
                <!-- /.card -->

                <div class="card">
                  <div class="card-header border-0">
                    <h3 class="card-title">Products</h3>
                    <div class="card-tools">
                      <a href="#" class="btn btn-tool btn-sm">
                        <i class="fas fa-download"></i>
                      </a>
                      <a href="#" class="btn btn-tool btn-sm">
                        <i class="fas fa-bars"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body table-responsive p-0">
                    <table class="table table-striped table-valign-middle">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Sales</th>
                          <th>More</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <img src="<?=base_url()?>/vendor/adminlte/dist/img/default-150x150.png" alt="Product 1"
                              class="img-circle img-size-32 mr-2">
                            Some Product
                          </td>
                          <td>$13 USD</td>
                          <td>
                            <small class="text-success mr-1">
                              <i class="fas fa-arrow-up"></i>
                              12%
                            </small>
                            12,000 Sold
                          </td>
                          <td>
                            <a href="#" class="text-muted">
                              <i class="fas fa-search"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img src="<?=base_url()?>/vendor/adminlte/dist/img/default-150x150.png" alt="Product 1"
                              class="img-circle img-size-32 mr-2">
                            Another Product
                          </td>
                          <td>$29 USD</td>
                          <td>
                            <small class="text-warning mr-1">
                              <i class="fas fa-arrow-down"></i>
                              0.5%
                            </small>
                            123,234 Sold
                          </td>
                          <td>
                            <a href="#" class="text-muted">
                              <i class="fas fa-search"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img src="<?=base_url()?>/vendor/adminlte/dist/img/default-150x150.png" alt="Product 1"
                              class="img-circle img-size-32 mr-2">
                            Amazing Product
                          </td>
                          <td>$1,230 USD</td>
                          <td>
                            <small class="text-danger mr-1">
                              <i class="fas fa-arrow-down"></i>
                              3%
                            </small>
                            198 Sold
                          </td>
                          <td>
                            <a href="#" class="text-muted">
                              <i class="fas fa-search"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img src="<?=base_url()?>/vendor/adminlte/dist/img/default-150x150.png" alt="Product 1"
                              class="img-circle img-size-32 mr-2">
                            Perfect Item
                            <span class="badge bg-danger">NEW</span>
                          </td>
                          <td>$199 USD</td>
                          <td>
                            <small class="text-success mr-1">
                              <i class="fas fa-arrow-up"></i>
                              63%
                            </small>
                            87 Sold
                          </td>
                          <td>
                            <a href="#" class="text-muted">
                              <i class="fas fa-search"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col-md-6 -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title">Sales</h3>
                      <a href="javascript:void(0);">View Report</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="d-flex">
                      <p class="d-flex flex-column">
                        <span class="text-bold text-lg">$18,230.00</span>
                        <span>Sales Over Time</span>
                      </p>
                      <p class="ml-auto d-flex flex-column text-right">
                        <span class="text-success">
                          <i class="fas fa-arrow-up"></i> 33.1%
                        </span>
                        <span class="text-muted">Since last month</span>
                      </p>
                    </div>
                    <!-- /.d-flex -->

                    <div class="position-relative mb-4">
                      <canvas id="sales-chart" height="200"></canvas>
                    </div>

                    <div class="d-flex flex-row justify-content-end">
                      <span class="mr-2">
                        <i class="fas fa-square text-primary"></i> This year
                      </span>

                      <span>
                        <i class="fas fa-square text-gray"></i> Last year
                      </span>
                    </div>
                  </div>
                </div>
                <!-- /.card -->

                <div class="card">
                  <div class="card-header border-0">
                    <h3 class="card-title">Online Store Overview</h3>
                    <div class="card-tools">
                      <a href="#" class="btn btn-sm btn-tool">
                        <i class="fas fa-download"></i>
                      </a>
                      <a href="#" class="btn btn-sm btn-tool">
                        <i class="fas fa-bars"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                      <p class="text-success text-xl">
                        <i class="ion ion-ios-refresh-empty"></i>
                      </p>
                      <p class="d-flex flex-column text-right">
                        <span class="font-weight-bold">
                          <i class="ion ion-android-arrow-up text-success"></i> 12%
                        </span>
                        <span class="text-muted">CONVERSION RATE</span>
                      </p>
                    </div>
                    <!-- /.d-flex -->
                    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                      <p class="text-warning text-xl">
                        <i class="ion ion-ios-cart-outline"></i>
                      </p>
                      <p class="d-flex flex-column text-right">
                        <span class="font-weight-bold">
                          <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                        </span>
                        <span class="text-muted">SALES RATE</span>
                      </p>
                    </div>
                    <!-- /.d-flex -->
                    <div class="d-flex justify-content-between align-items-center mb-0">
                      <p class="text-danger text-xl">
                        <i class="ion ion-ios-people-outline"></i>
                      </p>
                      <p class="d-flex flex-column text-right">
                        <span class="font-weight-bold">
                          <i class="ion ion-android-arrow-down text-danger"></i> 1%
                        </span>
                        <span class="text-muted">REGISTRATION RATE</span>
                      </p>
                    </div>
                    <!-- /.d-flex -->
                  </div>
                </div>
              </div>
              <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.1.0
        </div>
      </footer>
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
  </body>

</html>