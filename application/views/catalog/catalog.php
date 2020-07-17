<style>
  #rows {
    position: relative;
    display: flex;
    margin: 0 0 3% 0;
  }

  .card-title {
    text-align: center;
    font-size: 105%;
  }

  .card-text {
    text-align: center;
    font-size: 95%;
  }

  .card-footer {
    position: relative;
    display: flex;
    padding: 3%;
    font-size: 110%;
  }

  .card-deck {
    max-width: 40%;
    display: block;
    margin: auto;

  }

  .text-muted {
    text-align: center;
    margin: auto;
    display: block;
  }


  .img-fluid {
    display: block;
    margin: auto;
  }
</style>

<div style="border: none; padding: 10% 5%; background-color:  #f7f1e3; z-index: -1;" class="card mb-3" style="max-width: 100%;">
  <p class="h3" style="text-align: center; margin: 0 0 5% 0;">Coffee Catalog</p>
  <!-- list 1 -->

  <div class="card-deck">
    <?php foreach ($coffee as $row) { ?>
      <div class="card" style="margin-top: 2%;">
        <img src="asset/gambar_kopi/<?= $row['gambar']; ?>" width="50" height="350" class="img-fluid" alt="">
        <div class="card-body">
          <h5 class="card-title"><?= $row['nama_kopi']; ?></h5>
          <p class="card-text"><?= $row['desc_kopi']; ?></p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Rp <?= $row['harga']; ?>,-</small>
        </div>
      </div>
    <?php } ?>
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>

  </html>