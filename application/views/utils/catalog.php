<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="icon" href="asset/logo_3.ico">
  <title>Find Cafe - <?= $title; ?></title>

  <!-- Pignose Calender -->
  <link href="quixlab/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
  <!-- themify icons -->
  <link rel="stylesheet" href="quixlab/icons/themify-icons/themify-icons.css">
  <!-- Chartist -->
  <link rel="stylesheet" href="quixlab/plugins/chartist/css/chartist.min.css">
  <link rel="stylesheet" href="quixlab/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
  <!-- Custom Stylesheet -->
  <link href="quixlab/css/style.css" rel="stylesheet">
  <!-- Custom Stylesheet -->
  <link href="quixlab/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
  <!-- Page plugins css -->
  <link href="quixlab/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
  <!-- Color picker plugins css -->
  <link href="quixlab/plugins/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
  <!-- Date picker plugins css -->
  <link href="quixlab/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
  <!-- Daterange picker plugins css -->
  <link href="quixlab/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
  <link href="quixlab/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <link href="quixlab/plugins/sweetalert/css/sweetalert.css" rel="stylesheet">
  <link rel="stylesheet" href="quixlab/icons/font-awesome/css/font-awesome.min.css">
  <link href="quixlab/plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">
  <!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
  <!-- Additional CSS Files -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

  <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

  <link rel="stylesheet" href="assets/css/owl-carousel.css">

  <link rel="stylesheet" href="assets/css/lightbox.css">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky mb-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="asset/logo_nav.png" align="klassy cafe html template" width="230" height="50">

            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="<?= base_url(); ?>home#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="<?= base_url(); ?>home#about">About</a></li>

              <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
              <li class="scroll-to-section"><a href="#menu">Popular</a></li>
              <li class="scroll-to-section"><a href="<?= base_url(); ?>catalog">Cafe's</a></li>
              <li class="submenu">
                <a href="javascript:;">Contact</a>
                <ul>
                  <li><a class="scroll-to-section" href="<?= base_url(); ?>home#reservation">Contact Us</a></li>
                  <li><a class="scroll-to-section" href="<?= base_url(); ?>home#chefs">Our Team</a></li>

                </ul>
              </li>
              <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
              <li class="scroll-to-section"><a href="<?= base_url(); ?>auth_loginuser">Sign In</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <div class="content-body">
    <div class="row  mr-3 ml-3 mb-5">
      <div class="col-12 m-b-30 mt-5">

        <div class="row mt-5 mb-5">
          <?php foreach ($cafe_catalog as $row) { ?>
            <div class="mt-5 mb-5 col-md-6 col-lg-3">
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
                  <a href="<?= base_url(); ?>auth_loginuser">
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