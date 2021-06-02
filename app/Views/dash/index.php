<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-4 p-1">
          <div class="card mb-0">
            <div class="card-body p-0 mb-0" style='height: 250px;'>
              <?= view_cell('\App\Libraries\Dashboards::covid')?>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <div class="col-4 p-1">
          <div class="card mb-0">

            <div class="card-body p-0" style='height: 250px;'>
              <?= view_cell('\App\Libraries\Dashboards::eksporimpor')?>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <div class="col-4 p-1">
          <div class="card mb-0">

            <div class="card-body p-0 mb-0" style='height: 250px;'>
              <?= view_cell('\App\Libraries\Dashboards::inflasi')?>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col">
          <div class="card">

            <div class="card-body p-0">
              <?= view_cell('\App\Libraries\Dashboards::peta')?>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>