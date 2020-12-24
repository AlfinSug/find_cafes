<div class="container-fluid">
    <div class="row mt-5 ml-2 mr-2">
        <div class="col-lg-6 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center mb-4">
                        <img class="mr-3 rounded-circle" src="asset/alfin.png" width="80" height="80" alt="">
                        <div class="media-body">
                            <h3 class="mb-0">Alfin Sugestian</h3>
                            <p class="text-muted mb-0">alfinsugestian99@gmail.com</p>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <div class="card card-profile text-center">
                                <span class="mb-1 text-primary"><i class="ti-comments-smiley"></i></span>
                                <h3 class="mb-0">20</h3>
                                <p class="text-muted px-4">Total Cangkruk</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-profile text-center">
                                <span class="mb-1 text-warning"><i class="ti-star"></i></span>
                                <h3 class="mb-0">50</h3>
                                <p class="text-muted">Point</p>
                            </div>
                        </div>

                    </div>

                    <h4 class="text-center">Bio</h4>
                    <p class="text-muted text-center">Cangkruklah sebelum cangkruk itu dilarang hehe..</p>
                    <ul class="card-profile__info text-center">
                        <li class="mb-1"><strong class="text-dark ">Whatsapp Number</strong>
                            <div>+62 8974879215</div>
                        </li>
                        <li><strong class="text-dark">Alamat</strong>
                            <div>Bulak Banteng</div>
                        </li>

                    </ul>
                    <button class="btn btn-info btn-lg mt-5" data-target="#updatePassword" data-toggle="modal" style="display: block; margin: auto;">Ubah Password</button>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-4">Edit Profil</h3>
                    <form action="#" class="form-profile">
                        <div class="input-group form-group">
                            <label class="col-lg-12 col-form-label text-left" for="val-skill">Nama Lengkap</span>
                            </label>
                            <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text text-primary"><i class="ti-bookmark"></i></span>
                            </div>
                        </div>
                        <div class="input-group form-group">
                            <label class="col-lg-12 col-form-label text-left" for="val-skill">Email</span>
                            </label>
                            <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text text-primary"><i class="ti-email"></i></span>
                            </div>
                        </div>
                        <div class="input-group form-group">
                            <label class="col-lg-12 col-form-label text-left" for="val-skill">Whatsapp Number</span>
                            </label>
                            <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text text-primary"><i class="ti-mobile"></i></span>
                            </div>
                        </div>
                        <div class="input-group form-group">
                            <label class="col-lg-12 col-form-label text-left" for="val-skill">Alamat</span>
                            </label>
                            <textarea class="form-control" name="textarea" id="textarea" cols="30" rows="4" placeholder="Address Cafe"></textarea>
                        </div>
                        <div class="input-group form-group">
                            <label class="col-lg-12 col-form-label text-left" for="val-skill">Bio</span>
                            </label>
                            <textarea class="form-control" name="textarea" id="textarea" cols="30" rows="4" placeholder="Post a new message"></textarea>
                        </div>
                        <div class="input-group">

                            <button class="btn btn-info btn-lg mt-2" style="display: block; margin: auto;">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- #/ container -->

<!-- Modal Tambah Pasir-->
<div class="modal fade" id="updatePassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pasir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Jenis Pasir</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="Contoh : Silika" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append float-left">
                            <div class="input-group-text text-primary"><i class="ti-shield"></i></div>
                        </div>
                    </div>

                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Berat Pasir (Ton)</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="Contoh : 50" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text text-primary">Ton</span>
                        </div>
                    </div>

                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Harga Beli (Ton)</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="Contoh : 5000000" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text text-primary">/ton</span>
                        </div>
                    </div>

                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Harga Jual (Ton)</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="Contoh : 5000000" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text text-primary">/ton</span>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Tambahkan</button>
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

</body>

</html>