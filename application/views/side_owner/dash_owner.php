<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="container-fluid mt-3">

        <h3>Selamat Datang, <strong>Ada Apa Dengan Koffie</strong> </h3>

        <div class="row mt-5">
            <div class="col-6">
                <div class="card">
                    <div class="stat-widget-one">
                        <div class="stat-content">
                            <div class="stat-text">Total Reservasi</div>
                            <div class="stat-digit gradient-3-text">50 Reservasi</div>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar gradient-3" style="width: 50%;" role="progressbar"><span class="sr-only">50% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="stat-widget-one">
                        <div class="stat-content">
                            <div class="stat-text">Total Pendapatan</div>
                            <div class="stat-digit gradient-6-text">Rp 150.000.000,-</div>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar gradient-6" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Data Reservasi Hari Ini</h3>
                        <div class="active-member mt-4">
                            <div class="table-responsive mt-2">
                                <table class="table table-xs mb-0">
                                    <thead class="text-center mt-5">
                                        <tr>
                                            <th>Nama Cangkrukers</th>
                                            <!-- <th>Nama Cafe</th> -->
                                            <th>Total Biaya Reservasi</th>
                                            <th>Jumlah Kursi</th>
                                            <th>Tanggal Reservasi</th>
                                            <th>Status Reservasi</th>
                                            <!-- <th>Menu Pesanan</th> -->
                                            <th>Bukti Pembayaran DP Reservasi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td>Alfin Sugestian</td>
                                            <!-- <td>Ada Apa Dengan Koffee</td> -->
                                            <td>Rp 250.000,</td>
                                            <td>5 Kursi
                                            <td>Senin, 23 April 2020</td>
                                            <td><i class="fa fa-circle-o text-success mr-1"></i> <span class="mr-2">Diterima</td>
                                            <!-- <td><button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#detail-pesanan"><i class="ti-clipboard mr-2"></i> Lihat Menu</button></td> -->
                                            <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#detail-bukti-pembayaran"><i class="ti-image mr-2"></i> Detail</button></td>

                                        </tr>
                                        <tr>
                                            <td>Derry Ajes</td>
                                            <!-- <td>Ada Apa Dengan Koffee</td> -->
                                            <td>Rp 150.000,</td>
                                            <td>3 Kursi
                                            <td>Senin, 23 April 2020</td>
                                            <td><i class="fa fa-circle-o text-warning mr-1"></i> <span class="mr-2">Proses</td>
                                            <!-- <td><button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#detail-pesanan"><i class="ti-clipboard mr-2"></i> Lihat Menu</button></td> -->
                                            <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#detail-bukti-pembayaran"><i class="ti-image mr-2"></i> Detail</button></td>

                                        </tr>
                                        <tr>
                                            <td>Ucup</td>
                                            <!-- <td>Ada Apa Dengan Koffee</td> -->
                                            <td>Rp 450.000,</td>
                                            <td>6 Kursi
                                            <td>Senin, 23 April 2020</td>
                                            <td><i class="fa fa-circle-o text-danger mr-1"></i> <span class="mr-2">Ditolak</td>
                                            <!-- <td><button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#detail-pesanan"><i class="ti-clipboard mr-2"></i> Lihat Menu</button></td> -->
                                            <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#detail-bukti-pembayaran"><i class="ti-image mr-2"></i> Detail</button></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- #/ container -->
</div>
<!--**********************************
            Content body end
		***********************************-->


<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright &copy; Find Cafe's by <a href="https://themeforest.net/user/quixlab" style="color: #0984e3;">Karyo</a> <span style="color: #00b894;">Dev</span></p>
    </div>
</div>
<!--**********************************
            Footer end
        ***********************************-->
</div>
<!--**********************************
        Main wrapper end
    ***********************************-->
<!-- Modal Bukti Pembayaran -->
<div class="modal fade " id="detail-bukti-pembayaran" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Bukti Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="quixlab/images/media/media-1.png" type="application/pdf" width="100%" height="500px" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail Menu -->
<div class="modal fade" id="detail-pesanan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Menu</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="input-group mt-2">
                        <img src="asset/gambar_kopi/milk.png" class="rounded mr-2 ml-2" width="60" height="100" alt="">
                        <div class="form-group">
                            <h4 class="ml-5 mt-4 h4">Ice Milk</h4>
                            <span class="ml-5 row">
                                <h6 class="mt-2 h6">x 4</h6>
                                <h6 class="float-right ml-5 mt-2 h6">Rp 20.000,-</h6>
                            </span>
                        </div>
                    </div>
                    <div class="input-group mt-2">
                        <img src="asset/gambar_kopi/milk.png" class="rounded mr-2 ml-2" width="60" height="100" alt="">
                        <div class="form-group">
                            <h4 class="ml-5 mt-4 h4">Ice Milk</h4>
                            <span class="ml-5 row">
                                <h6 class="mt-2 h6">x 4</h6>
                                <h6 class="float-right ml-5 mt-2 h6">Rp 20.000,-</h6>
                            </span>
                        </div>
                    </div>
                    <div class="input-group mt-2">
                        <img src="asset/gambar_kopi/milk.png" class="rounded mr-2 ml-2" width="60" height="100" alt="">
                        <div class="form-group">
                            <h4 class="ml-5 mt-4 h4">Ice Milk</h4>
                            <span class="ml-5 row">
                                <h6 class="mt-2 h6">x 4</h6>
                                <h6 class="float-right ml-5 mt-2 h6">Rp 20.000,-</h6>
                            </span>
                        </div>
                    </div>
                    <div class="input-group mt-5">
                        <div class="form-group">
                            <span class="ml-3 row">
                                <h3 class="mt-2 h3">Total</h3>
                                <h3 class="float-right ml-5 mt-2 h3"><strong class="ml-5 text-success">Rp 60.000,-</strong> </h3>
                            </span>
                        </div>
                    </div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!--**********************************
        Scripts
    ***********************************-->
<script src="quixlab/plugins/common/common.min.js"></script>
<script src="quixlab/js/custom.min.js"></script>
<script src="quixlab/js/settings.js"></script>
<script src="quixlab/js/gleek.js"></script>
<script src="quixlab/js/styleSwitcher.js"></script>

<!-- Chartjs -->
<script src="quixlab/plugins/chart.js/Chart.bundle.min.js"></script>
<!-- Circle progress -->
<script src="quixlab/plugins/circle-progress/circle-progress.min.js"></script>
<!-- Datamap -->
<script src="quixlab/plugins/d3v3/index.js"></script>
<script src="quixlab/plugins/topojson/topojson.min.js"></script>
<script src="quixlab/plugins/datamaps/datamaps.world.min.js"></script>
<!-- Morrisjs -->
<script src="quixlab/plugins/raphael/raphael.min.js"></script>
<script src="quixlab/plugins/morris/morris.min.js"></script>
<!-- Pignose Calender -->
<script src="quixlab/plugins/moment/moment.min.js"></script>
<script src="quixlab/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
<!-- ChartistJS -->
<script src="quixlab/plugins/chartist/js/chartist.min.js"></script>
<script src="quixlab/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



<script src="quixlab/js/dashboard/dashboard-1.js"></script>

</body>

</html>