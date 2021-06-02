<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>

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
                <div class="col-5">
                    <div class="card">
                        <!-- <div class="card-header border-0">tes</div> -->
                        <div class="card-body">
                            <!-- <?= view_cell('\App\Libraries\Dashboards::raka')?> -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <!-- <div class="card-header border-0">tes</div> -->
                        <div class="card-body">
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <!-- <div class="card-header border-0">tes</div> -->
                        <div class="card-body">
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