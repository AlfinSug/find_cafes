<!-- ***** Main Banner Area Start ***** -->
<div id="top">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4">
        <div class="left-content">
          <div class="inner-content">
            <h4>Find Mage</h4>
            <h6>The Best Magician</h6>
            <div class="main-white-button scroll-to-section">
              <a href=" <?= base_url(); ?>auth_LoginUser">Make A Reservation</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="main-banner header-text">
          <div class="Modern-Slider">
            <!-- Item -->
            <div class="item">
              <div class="img-fill">
                <img src="asset/img_cs1.jpg" alt="">
              </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
              <div class="img-fill">
                <img src="asset/img_cs2.jpg" alt="">
              </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
              <div class="img-fill">
                <img src="asset/img_cs3.jpg" alt="">
              </div>
            </div>
            <!-- // Item -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** About Area Starts ***** -->
<section class="section" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="left-text-content">
          <div class="section-heading">
            <h6>About Us</h6>
            <h2>We Provide Services For You</h2>
          </div>
          <p>The umkm activity is an activity that is quite broad and very promising for now. A shop / café is one of the businesses in the umkm sector, especially sales. Here our group creates an application.<br><br>Find Cafe's is a mobile-based application as well as a website that can make it easier for users to find hangouts and can also easily reserve hangouts using only gadgets, besides that find cafe also provides access for cafe owners who want to promote stalls or cafes or their products. And find cafe provides features in the form of prices / discounts when we often book or order products through our application / website.</p>
          <div class="row">
            <div class="col-4">
              <img src="assets/images/thumb1.png" alt="">
            </div>
            <div class="col-4">
              <img src="assets/images/thumb2.png" alt="">
            </div>
            <div class="col-4">
              <img src="assets/images/thumb3.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="right-content">
          <div class="thumb">
            <img src="assets/images/about-video-bg.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** About Area Ends ***** -->

<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="section-heading">
          <h6>Popular Cafe's</h6>
          <h2>A crowded hangout place to visit</h2>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="section-heading">
          <a class="view-btn" href="<?= base_url(); ?>catalog">View All</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-3 ml-3 mr-3">
    <?php foreach ($cafe_list as $row) { ?>
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
            <a href="<?= base_url(); ?>auth_LoginUser">
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
</section>
<!-- ***** Menu Area Ends ***** -->





<!-- ***** Reservation Us Area Starts ***** -->
<section class="section" id="reservation">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 align-self-center">
        <div class="left-text-content">
          <div class="section-heading">
            <h6>Contact Us</h6>
            <h2>Contact us if there are problems with our platform</h2>
          </div>
          <br><br>
          <div class="row">
            <div class="col-lg-3">
              <div class="phone">
                <i class="fa fa-phone"></i>
                <h4>Phone Numbers</h4>
                <span><br><a href="tel:628974879215">+62 8974879215</a></span>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="message">
                <i class="fa fa-envelope"></i>
                <h4>Emails</h4><br>
                <span><a href="mailto:alfinstudio1@gmail.com">alfinstudio1@gmail.com</a>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="message">
                <i class="fa fa-instagram"></i>
                <h4>Instagram</h4><br>
                <span><a href="https://www.instagram.com/alfin_studio/">find.cafes</a>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ***** Reservation Area Ends ***** -->

<!-- ***** Chefs Area Starts ***** -->
<section class="section" id="chefs">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4 text-center">
        <div class="section-heading">
          <h6>Our Teams</h6>
          <h2>We help you to find your favorite hangout place</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <div class="chef-item">
          <div class="thumb">
            <div class="overlay"></div>
            <ul class="social-icons">
              <li><a href="https://wa.me/628974879215"><i class="fa fa-whatsapp"></i></a></li>
              <li><a href="https://www.instagram.com/alfinsug/"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <img src="asset/alfin.png" alt="Chef #1">
          </div>
          <div class="down-content">
            <h4>Alfin Sugestian</h4>
            <span>Hacker</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="chef-item">
          <div class="thumb">
            <div class="overlay"></div>
            <ul class="social-icons">
              <li><a href="https://wa.me/6285822601798"><i class="fa fa-whatsapp"></i></a></li>
              <li><a href="https://www.instagram.com/daffarams_/"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <img src="asset/daffa.png" alt="Chef #2">
          </div>
          <div class="down-content">
            <h4>Daffa Ram Herriza</h4>
            <span>Hustler</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="chef-item">
          <div class="thumb">
            <div class="overlay"></div>
            <ul class="social-icons">
              <li><a href="https://wa.me/6289616194453"><i class="fa fa-whatsapp"></i></a></li>
              <li><a href="https://www.instagram.com/dimasfirmanpb/"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <img src="asset/dimas.png" alt="Chef #3">
          </div>
          <div class="down-content">
            <h4>Dimas Firman Putra B</h4>
            <span>Hipster</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="chef-item">
          <div class="thumb">
            <div class="overlay"></div>
            <ul class="social-icons">
              <li><a href="https://wa.me/6282231113654"><i class="fa fa-whatsapp"></i></a></li>
              <li><a href="https://www.instagram.com/dickyeardianto/"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <img src="asset/cibob.png" alt="Chef #2">
          </div>
          <div class="down-content">
            <h4>Dicky Eko Ardianto</h4>
            <span>Hipster</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Chefs Area Ends ***** -->