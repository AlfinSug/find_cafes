<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="container-fluid mt-3">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <span class="mb-4">
                        <div class="ml--5 header-left">
                            <h3>Daftar Reservation</h3>
                        </div>
                        <div class="header-right">
                            <div class="input-group icons">
                                <input type="search" class="form-control" placeholder="Search" aria-label="Search Dashboard">
                                <div class="drop-down animated flipInX d-md-none">
                                    <form action="#">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </form>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-2" id="basic-addon1">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal"><i class="ti-plus mr-2"></i>Add Reservation</button>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </span>
                    <div class="active-member mt-5">
                        <div class="table-responsive mt-2 table-striped  zero-configuration">
                            <table class="table table-xs mb-0">
                                <thead class="text-center mt-5">
                                    <tr>
                                        <th>Nama Cangkrukers</th>
                                        <th>Nama Cafe</th>
                                        <th>Total Biaya Reservasi</th>
                                        <th>Jumlah Kursi</th>
                                        <th>Tanggal Reservasi</th>
                                        <th>Status Reservasi</th>
                                        <th>Menu Pesanan</th>
                                        <th>Bukti Pembayaran DP Reservasi</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>Alfin Sugestian</td>
                                        <td>Ada Apa Dengan Koffee</td>
                                        <td>Rp 250.000,</td>
                                        <td>5 Kursi
                                        <td>Senin, 23 April 2020</td>
                                        <td><i class="fa fa-circle-o text-success mr-1"></i> <span class="mr-2">Diterima</td>
                                        <td><button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#detail-pesanan"><i class="ti-image mr-2"></i> Lihat Menu</button></td>
                                        <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#detail-bukti-pembayaran"><i class="ti-image mr-2"></i> Detail</button></td>
                                        <td><button type="button" class="btn btn-success text-white" data-toggle="modal" data-target="#updateModal"><i class="ti-mobile mr-2"></i> Hubungi Owner</button></td>
                                        <td>
                                            <div class="sweetalert m-t-30">
                                                <button class="btn btn-danger btn sweet-confirm"><i class="ti-close mr-2"></i>Batal</button>
                                            </div>
                                        </td>
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

<!-- Modal Bukti Pembelian -->
<div class="modal fade " id="detail-bukti-pembayaran" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Bukti Pembelian</h5>
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

<!-- Modal Detail Kredit -->
<div class="modal fade" id="detail-pesanan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Kredit</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">

                    <div class="input-group mt-2">
                        <img src="asset/logo_3.png" class="rounded mr-2" width="100" height="100" alt="">
                        <div class="form-group">
                            <h4 class="ml-2 mt-4 h4">Sekop</h4>
                            <h6 class="ml-2 mt-2 h6">20 Item</h6>

                        </div>
                    </div>
                    <div class="form-group">
                        <h4 class="ml-2 mt-4 h4">Kredit Ke</h4>
                        <h6 class="ml-2 mt-2 h6">2 dari 24</h6>

                    </div>
                    <div class="form-group">
                        <h4 class="ml-2 mt-4 h4">Biaya Kredit</h4>
                        <h6 class="ml-2 mt-2 h6">Rp 1.500.000,-/bulan</h6>

                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pembelian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Perusahaan/CV </span>
                        </label>
                        <select class="form-control custom-select rounded" id="inputGroupSelect04">
                            <option selected>- Pilih Perusahaan/CV -</option>
                            <option value="1">PT. Karyo Dev Indonesia</option>
                            <option value="2">PT. Banjaran Global Biz</option>
                            <option value="3">CV. Makmur Jaya</option>
                        </select>
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary " data-dismiss="modal" data-toggle="modal" data-toggle="tooltip" data-target="#addModalPerusahaan" title="Tambah Data Perusahaan"><i class="ti-plus"></i></button>
                        </div>
                    </div>
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Jenis Pasir</span>
                        </label>
                        <select class="form-control custom-select rounded" id="inputGroupSelect04">
                            <option selected>- Pilih Pasir -</option>
                            <option value="1">Pasir Silika</option>
                            <option value="2">Pasir Kalimantan</option>

                        </select>
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary " data-dismiss="modal" data-toggle="modal" data-toggle="tooltip" data-target="#addModalPasir" title="Tambah Data Pasir"><i class="ti-plus"></i></button>
                        </div>
                    </div>
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Berat Pasir</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="Contoh : 50" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text text-primary">Ton</span>
                        </div>
                    </div>
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Harga Beli</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)" readonly>
                        <div class="input-group-append">
                            <span class="input-group-text text-primary">Ton</span>
                        </div>
                    </div>
                    <div class="input-group form-group ">
                        <label class="col-lg-12 col-form-label text-left" for="">Tanggal Pembelian
                        </label>
                        <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                        <div class="input-group-append">
                            <span class="input-group-text text-primary"><i class="ti-calendar"></i></span>
                        </div>
                    </div>
                    <div class="input-group form-group mt--5">
                        <div class="col-lg-12 mt-5  text-center">
                            <img id="image-preview" src="quixlab/images/media/media-3.png" width="100%" height="250px" class="rounded">
                        </div>
                        <div class="float-left custom-file text-center mt--5 mr-3 ml-3">
                            <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="img_bukti" onchange="pickImage();">
                            <label class="btn btn-info col-lg-12 col-form-label text-center btn-lg" for="customFileLang"><i class="ti-export mr-2"></i>Unggah Gambar Sparepart</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Update -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pembelian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Perusahaan/CV </span>
                        </label>
                        <select class="form-control custom-select rounded" id="inputGroupSelect04">
                            <option selected>- Pilih Perusahaan/CV -</option>
                            <option value="1">PT. Karyo Dev Indonesia</option>
                            <option value="2">PT. Banjaran Global Biz</option>
                            <option value="3">CV. Makmur Jaya</option>
                        </select>
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary " data-dismiss="modal" data-toggle="modal" data-toggle="tooltip" data-target="#addModalPerusahaan" title="Tambah Data Perusahaan"><i class="ti-plus"></i></button>
                        </div>
                    </div>
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Jenis Pasir</span>
                        </label>
                        <select class="form-control custom-select rounded" id="inputGroupSelect04">
                            <option selected>- Pilih Pasir -</option>
                            <option value="1">Pasir Silika</option>
                            <option value="2">Pasir Kalimantan</option>

                        </select>
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary " data-dismiss="modal" data-toggle="modal" data-toggle="tooltip" data-target="#addModalPasir" title="Tambah Data Pasir"><i class="ti-plus"></i></button>
                        </div>
                    </div>
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Berat Pasir</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="Contoh : 50" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text text-primary">Ton</span>
                        </div>
                    </div>
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Harga Beli</span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="" aria-label="Amount (to the nearest dollar)" readonly>
                        <div class="input-group-append">
                            <span class="input-group-text text-primary">Ton</span>
                        </div>
                    </div>
                    <div class="input-group form-group ">
                        <label class="col-lg-12 col-form-label text-left" for="">Tanggal Pembelian
                        </label>
                        <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                        <div class="input-group-append">
                            <span class="input-group-text text-primary"><i class="ti-calendar"></i></span>
                        </div>
                    </div>
                    <div class="input-group form-group mt--5">
                        <div class="col-lg-12 mt-5  text-center">
                            <img id="image-preview" src="quixlab/images/media/media-3.png" width="100%" height="250px" class="rounded">
                        </div>
                        <div class="float-left custom-file text-center mt--5 mr-3 ml-3">
                            <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="img_bukti" onchange="pickImage();">
                            <label class="btn btn-info col-lg-12 col-form-label text-center btn-lg" for="customFileLang"><i class="ti-export mr-2"></i>Unggah Gambar Sparepart</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Pasir-->
<div class="modal fade" id="addModalPasir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<!-- Modal Tambah Perusahaan-->
<div class="modal fade" id="addModalPerusahaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Sub Konstruksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Nama Perusahaan/CV </span>
                        </label>
                        <input type="text" class="form-control rounded" placeholder="Contoh : Pt. Karyo Dev Indonesia" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text text-primary"><i class="ti-bookmark"></i></span>
                        </div>
                    </div>

                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Email Perusahaan</span>
                        </label>
                        <input type="email" class="form-control rounded" placeholder="Email" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text text-primary"><i class="ti-email"></i></span>
                        </div>
                    </div>
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Alamat Tambang</span>
                        </label>
                        <textarea type="text" class="form-control rounded" placeholder="Masukkan Alamat Tambang" rows="5"></textarea>
                        <div class="input-group-append">
                            <span class="input-group-text text-primary"><i class="ti-map-alt"></i></span>
                        </div>
                    </div>
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Kantor</span>
                        </label>
                        <textarea type="text" class="form-control rounded" placeholder="Masukkan Alamat Tambang" rows="5"></textarea>
                        <div class="input-group-append">
                            <span class="input-group-text text-primary"><i class="ti-home"></i></span>
                        </div>
                    </div>
                    <div class="input-group form-group">
                        <label class="col-lg-12 col-form-label text-left" for="val-skill">Kontak Perusahaan</span>
                        </label>
                        <input type="number" class="form-control rounded" placeholder="Contoh : 08974879215" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text text-primary"><i class="ti-mobile"></i></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright &copy; PT Banjaran Global Biz by <a href="https://themeforest.net/user/quixlab" style="color: #0984e3;">Karyo</a> <span style="color: #00b894;">Dev</span></p>
    </div>
</div>
<!--**********************************
            Footer end
        ***********************************-->
</div>

<script>
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