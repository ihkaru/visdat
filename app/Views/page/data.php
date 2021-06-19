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
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3>Data Covid-19 Per Provinsi di Indonesia</h3>
                            Sumber :
                            <a
                                href="https://bnpb-inacovid19.hub.arcgis.com/datasets/data-harian-kasus-per-provinsi-covid-19-indonesia/data">
                                https://bnpb-inacovid19.hub.arcgis.com/datasets/data-harian-kasus-per-provinsi-covid-19-indonesia/data
                            </a>
                            <p>Data tersebut menyajikan bagaimana sebaran Kasus Covid-19 per Provinsi di Indonesia. Data
                                terdiri dari atribut Kasus Positif, Kasus Sembuh dan Kasus Meninggal, yang bersumber
                                dari
                                laporan harian Kementerian Kesehatan RI.</p>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3>Data Harian Nilai Tukar USD terhadap IDR</h3>
                            <p>Data berasal dari Google Finance. Metode pengumpulan data dilakukan dengan menggunakan
                                formula (=Currency) pada google spreadsheet yang secara otomatis men-generate data
                                exchange rate dari sumber yang ada.
                            </p>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3>Data Harian Covid19 Indonesia Maret 2020 - Maret 2021</h3>
                            Sumber :
                            <a href="https://www.kaggle.com/hendratno/covid19-indonesia">
                                https://www.kaggle.com/hendratno/covid19-indonesia
                            </a>
                            <p>Data di atas merupakan hasil kompilasi dari beberapa sumber penyedia data covid-18,
                                antara lain covid19.go.id, kemendagri.go.id, bps.go.id, and
                                bnpb-inacovid19.hub.arcgis.com. Data yang digunakan adalah data level nasional, dengan
                                cara dilakukan filter terhadap atribut Location</p>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3>Data Nilai impor (Juta US$) Indonesia</h3>
                            Sumber :
                            <br>
                            <a href="https://www.bps.go.id/indicator/8/1754/2/nilai-impor-migas-nonmigas.html">
                                https://www.bps.go.id/indicator/8/1754/2/nilai-impor-migas-nonmigas.html
                            </a>
                            <br>
                            <a href="https://www.bps.go.id/indicator/8/1754/1/nilai-impor-migas-nonmigas.html">
                                https://www.bps.go.id/indicator/8/1754/1/nilai-impor-migas-nonmigas.html
                            </a>
                            <br>
                            <p>Data berasal dari BPS yang sudah diolah dari dokumen kepabeanan Ditjen Bea dan Cukai (PEB
                                dan PIB). Data merupakan total nilai impor migas-nonmigas yang mengacu pada nilai Cost,
                                Insurance dan Freight (CIF). </p>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3>Data Nilai ekspor (Juta US$) Indonesia</h3>
                            Sumber :
                            <br>
                            <a href="https://www.bps.go.id/indicator/8/1753/1/nilai-ekspor-migas-nonmigas.html">
                                https://www.bps.go.id/indicator/8/1753/1/nilai-ekspor-migas-nonmigas.html
                            </a>
                            <br>
                            <a href="https://www.bps.go.id/indicator/8/1753/2/nilai-ekspor-migas-nonmigas.html">
                                https://www.bps.go.id/indicator/8/1753/2/nilai-ekspor-migas-nonmigas.html
                            </a>
                            <br>
                            <p>Data berasal dari BPS yang sudah diolah dari dokumen kepabeanan Ditjen Bea dan Cukai (PEB
                                dan PIB). Data merupakan total nilai ekspor migas-nonmigas yang mengacu pada nilai Free
                                on Board (FOB)</p>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3>Data Nilai Inflasi (%) Indonesia</h3>
                            Sumber :
                            <br>
                            <a href="https://www.bi.go.id/id/statistik/indikator/data-inflasi.aspx">
                                https://www.bi.go.id/id/statistik/indikator/data-inflasi.aspx
                            </a>
                            <br>
                            <p>Data berasal dari Bank Indonesia melalui perhitungan yang dilakukan oleh Badan Pusat
                                Statistik (BPS). Nilai inflasi tersebut merupakan inflasi tahunan (yoy) artinya
                                perbandingan angka inflasi pada waktu yang sama di periode berbeda dalam basis satu
                                tahun.</p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>