<div class="row mt-5 mr-3 ml-3 mb-5">
    <div class="col-12 m-b-30">
        <h4 class="d-inline">Selamat Datang, <?= $this->session->userdata('nama_user'); ?></h4>
        <p class="text-muted">Pilih cafe atau warkop favoritmu sekarang!</p>
        <div class="row mt-5 mb-5">
            <?php foreach ($cafe_catalog as $row) { ?>
                <div class="mt-2 mb-2 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h5 class="card-title mt-2"><?= $row['nama_cafe']; ?></h5>
                            <?php if ($row['akses_cafe'] == 'online') { ?>
                                <h6 class="card-subtitle mb-2 mt-2 text-muted"><i class="fa fa-circle-o text-success mr-1"></i> <span class="mr-2">Masih Ada Kuota</h6>
                            <?php } elseif ($row['akses_cafe'] == 'offline') { ?>
                                <h6 class="card-subtitle mb-2 mt-2 text-muted"><i class="fa fa-circle-o text-danger mr-1"></i> <span class="mr-2">Full/Tutup</h6>
                            <?php } else { ?>
                                <h6 class="card-subtitle mb-2 mt-2 text-muted"><i class="fa fa-circle-o text-info mr-1"></i> <span class="mr-2">Akses belum di set oleh owner</h6>
                            <?php } ?>
                        </div>
                        <img class="img-fluid" src="<?= $row['banner_cafe']; ?>" alt="">
                        <div class="card-body">
                            <p class="card-text"><i class="ti-time mr-2"></i><?= $row['jam_buka']; ?></p>
                            <a href="<?= $row['url_maps']; ?>">
                                <p class="card-text"><i class="ti-pin mr-2"></i><?= $row['alamat_cafe']; ?></p>
                            </a>
                            <a href="https://www.instagram.com/<?= $row['sosmed']; ?>/?hl=en" class="mt-2">
                                <p class="card-text mt-3"><i class="ti-instagram mr-2"></i><?= $row['sosmed']; ?></p>
                            </a>

                        </div>
                        <div class="card-footer text-center">
                            <a href="#">
                                <?php if ($row['akses_cafe'] == 'online') { ?>
                                    <button type="button" class="btn btn-lg btn-warning text-white ml-2 mt-2 mb-2" data-toggle="modal" data-target="#reservNow<?= $row['id_cafe']; ?>">Pesan Sekarang</button>
                                <?php } elseif ($row['akses_cafe'] == 'offline') { ?>
                                    <button type="button" class="btn btn-lg btn-warning text-white ml-2 mt-2 mb-2" data-toggle="modal" data-toggle="tooltip" title="Maaf cafe tutup, tidak bisa pesan sekarang" data-target="#reservNow<?= $row['id_cafe']; ?>" disabled>Pesan Sekarang</button>
                                <?php } else { ?>
                                    <button type="button" class="btn btn-lg btn-warning text-white ml-2 mt-2 mb-2" data-toggle="modal" data-toggle="tooltip" title="Maaf akses cafe belum di set, tidak bisa pesan sekarang" data-target="#reservNow<?= $row['id_cafe']; ?>" disabled>Pesan Sekarang</button>
                                <?php } ?>

                            </a>
                        </div>
                    </div>
                </div>

                <!-- Modal Tambah -->
                <div class="modal fade" id="reservNow<?= $row['id_cafe']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Reservasi <?= $row['nama_cafe']; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url("get_Cafe/reserv_now"); ?>" method="post" enctype="multipart/form-data">
                                    <input type="text" class="form-control rounded" placeholder="" name="id_reserv" hidden>
                                    <input type="text" class="form-control rounded" placeholder="" name="id_user" value="<?= $this->session->userdata['id_user']; ?>" hidden>
                                    <input type="text" class="form-control rounded" placeholder="" name="id_cafe" value="<?= $row['id_cafe']; ?>" hidden>
                                    <div class="row align-items-top">
                                        <div class="col-md-4 col-lg-3">
                                            <div class="nav flex-column nav-pills">
                                                <a href="#v-pills-checkout" data-toggle="pill" class="nav-link active show"><i class="ti-receipt mr-2"></i> Data Reservasi</a>
                                                <a href="#v-pills-payment" data-toggle="pill" class="nav-link "><i class="ti-credit-card mr-2"></i> Pembayaran</a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="tab-content">

                                                <div id="v-pills-checkout" class="tab-pane fade active show">
                                                    <!-- informasi -->
                                                    <div class="input-group form-group">
                                                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Atas Nama Pesanan</span></label>
                                                        <input type="text" class="form-control rounded" placeholder="" name="nama_user" value="<?= $this->session->userdata['nama_user']; ?>" readonly>
                                                    </div>
                                                    <div class="input-group form-group">
                                                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Waktu Reservasi</span></label>
                                                        <input type="text" id="date-format" class="form-control" name="tgl_reserv" placeholder="Saturday 24 June 2017 - 21:44">
                                                    </div>
                                                    <div class="input-group form-group">
                                                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Jumlah Kursi</span></label>
                                                        <input type="number" class="form-control rounded" placeholder="" name="jumlah_kursi" aria-label="Amount (to the nearest dollar)">
                                                    </div>
                                                    <div class="input-group form-group">
                                                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Note</span></label>
                                                        <textarea type="text" class="form-control rounded" name="note_reserv" placeholder="Tambahkan catatan untuk cafe" rows="3" aria-label="Amount (to the nearest dollar)"></textarea>
                                                    </div>
                                                </div>
                                                <div id="v-pills-payment" class="tab-pane fade">
                                                    <!-- upload Pembayaran -->
                                                    <div class="input-group form-group">
                                                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Biaya Komitmen Reservasi</span></label>
                                                        <div class="btn-group mb-2">
                                                            <h4 class="h4 mt-2"><span class="ml-5"><strong class="">Rp 15.000,-</strong></span></h4>
                                                            <button class="btn btn-secondary text-white ml-5" type="button" data-toggle="modal" data-dismiss="modal" data-toggle="tooltip" data-target="#payGuide" title="Bank Virtual Account"><i class="ti-info-alt"></i></button>
                                                        </div>
                                                        <p class="ml-2 mt-2 text-muted">*) Untuk mengamankan slot meja yang telah dipesan, kamu hanya perlu melakukan commitment fee sebesar Rp 15.000,-/Reservasi dan akan dikembalikan 100% oleh owner cafe ketika anda telah sampai di cafe yang anda pesan.</p>
                                                    </div>
                                                    <div class="input-group form-group mt--5 mb-5">
                                                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Unggah Bukti Pembayaran</span>
                                                        </label>
                                                        <div class="col-lg-12 mt-2 text-center">
                                                            <img id="image-preview" src="quixlab/images/media/media-3.png" width="100%" height="500px" class="rounded">
                                                        </div>
                                                        <div class="custom-file text-center mr-5 ml-5" style="display: block; margin: -10% auto;">
                                                            <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="bukti_pembayaran" onchange="pickImage();">
                                                            <label class="btn btn-warning text-white col-form-label text-center btn-lg" for="customFileLang"><i class="ti-export"></i></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer mt-3">
                                        <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-warning text-white">Pesan Sekarang</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal Pay Guide -->
                <div class="modal fade" id="payGuide" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Bank Virtual Account</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#bca"><img width="" height="40" src="asset/logo_bank/bca.png" alt=""></span></a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#bri"><img width="" height="40" src="asset/logo_bank/bri.png" alt=""></span></a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#bni"><span><img width="" height="40" src="asset/logo_bank/bni.png" alt=""></span></a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#mandiri"><span><img width="" height="40" src="asset/logo_bank/mandiri.png" alt=""></span></a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#mandiri_syariah"><span><img width="" height="40" src="asset/logo_bank/mandiri_syariah.png" alt=""></span></a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane fade show active" id="bca" role="tabpanel">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <h5 class="card-title">Bank Central Asia</h5>
                                                    <div class="row mt-5" style="margin-left:30%;">
                                                        <h1 class="card-text text-center" id="nomor" spellcheck="false">559889340500</h1>
                                                        <button class="ml-3 btn btn-sm bg-white" id="copas" type="button">

                                                            <img class="text-center" height="30" src="asset/logo_bank/copy.png" alt="">
                                                        </button>
                                                    </div>

                                                </div>
                                                <div class="card-footer text-muted">*) Klik icon diatas untuk menyalin nomor bank virtual account</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="bri" role="tabpanel">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <h5 class="card-title">Bank Rakyat Indonesia</h5>
                                                    <div class="row mt-5" style="margin-left:30%;">
                                                        <h1 class="card-text text-center" id="nomor" spellcheck="false">778974578987</h1>
                                                        <button class="ml-3 btn btn-sm bg-white" id="copas" type="button">

                                                            <img class="text-center" height="30" src="asset/logo_bank/copy.png" alt="">
                                                        </button>
                                                    </div>

                                                </div>
                                                <div class="card-footer text-muted">*) Klik icon diatas untuk menyalin nomor bank virtual account</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="bni" role="tabpanel">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <h5 class="card-title">Bank Negara Indonesia</h5>
                                                    <div class="row mt-5" style="margin-left:30%;">
                                                        <h1 class="card-text text-center" id="nomor" spellcheck="false">8775854400008</h1>
                                                        <button class="ml-3 btn btn-sm bg-white" id="copas" type="button">

                                                            <img class="text-center" height="30" src="asset/logo_bank/copy.png" alt="">
                                                        </button>
                                                    </div>

                                                </div>
                                                <div class="card-footer text-muted">*) Klik icon diatas untuk menyalin nomor bank virtual account</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="mandiri" role="tabpanel">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <h5 class="card-title">Bank Mandiri</h5>
                                                    <div class="row mt-5" style="margin-left:30%;">
                                                        <h1 class="card-text text-center" id="nomor" spellcheck="false">6674578988999</h1>
                                                        <button class="ml-3 btn btn-sm bg-white" id="copas" type="button">

                                                            <img class="text-center" height="30" src="asset/logo_bank/copy.png" alt="">
                                                        </button>
                                                    </div>

                                                </div>
                                                <div class="card-footer text-muted">*) Klik icon diatas untuk menyalin nomor bank virtual account</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="mandiri_syariah" role="tabpanel">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <h5 class="card-title">Bank Mandiri Syariah</h5>
                                                    <div class="row mt-5" style="margin-left:30%;">
                                                        <h1 class="card-text text-center" id="nomor" spellcheck="false">985678865434</h1>
                                                        <button class="ml-3 btn btn-sm bg-white" id="copas" type="button">

                                                            <img class="text-center" height="30" src="asset/logo_bank/copy.png" alt="">
                                                        </button>
                                                    </div>

                                                </div>
                                                <div class="card-footer text-muted">*) Klik icon diatas untuk menyalin nomor bank virtual account</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="messages8" role="tabpanel">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <h5 class="card-title">Bank Central Asia</h5>
                                                    <div class="row mt-5" style="margin-left:30%;">
                                                        <h1 class="card-text text-center" id="nomor" spellcheck="false">559889340500</h1>
                                                        <button class="ml-3 btn btn-sm bg-white" id="copas" type="button">

                                                            <img class="text-center" height="30" src="asset/logo_bank/copy.png" alt="">
                                                        </button>
                                                    </div>

                                                </div>
                                                <div class="card-footer text-muted">*) Klik icon diatas untuk menyalin nomor bank virtual account</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer mt-3">
                                    <button type="button" class="btn btn-dark" data-dismiss="modal" data-toggle="modal" data-target="#reservNow<?= $row['id_cafe']; ?>">Kembali</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
            <!-- End Col -->

        </div>


    </div>
</div>
</div>


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


<!-- #/ container -->





<script type="text/javascript">
    function pickImage() {
        document.getElementById("image-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("customFileLang").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview").src = oFREvent.target.result;
        };
    };
</script>

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

<script src="assets/js/func_copy.js"></script>

<script src="quixlab/js/dashboard/dashboard-1.js"></script>

<script src="quixlab/plugins/moment/moment.js"></script>
<script src="quixlab/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<!-- Clock Plugin JavaScript -->
<script src="quixlab/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="quixlab/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
<script src="quixlab/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
<script src="quixlab/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="quixlab/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- Date range Plugin JavaScript -->
<script src="quixlab/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="quixlab/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="quixlab/js/plugins-init/form-pickers-init.js"></script>
<script src="quixlab/plugins/sweetalert/js/sweetalert.min.js"></script>
<script src="quixlab/plugins/sweetalert/js/sweetalert.init.js"></script>

<script src="quixlab/plugins/jquery-steps/build/jquery.steps.min.js"></script>
<script src="quixlab/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="quixlab/js/plugins-init/jquery-steps-init.js"></script>

</body>

</html>