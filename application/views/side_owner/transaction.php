<script type="text/javascript" src="sweetalert/sweetalert.min.js"></script>

<style>
  #table-dashboard {
    background-color: #2c2c54;
    margin-top: 2%;
    border-radius: 5px;
  }

  #rows {
    position: relative;
    display: flex;
  }

  .img-nodata {
    display: block;
    margin: auto;
    width: 50%;
  }
</style>

<?php
$success = $this->session->flashdata('success');
$del_success = $this->session->flashdata('del_success');
$del_success = $this->session->flashdata('edit_success');

if (!empty($success)) {
  echo $success;
} elseif (!empty($del_success)) {
  echo $del_success;
} elseif (!empty($edit_success)) {
  echo $edit_success;
}
?>
<span id="rows">
  <p class="h3">Data Transaksi Penjualan</p>
  <button style="margin-left: 56%;" type="button" class="btn btn-dark" data-toggle="modal" data-target="#addModal">Tambah Data</button>
</span>
<?php if ($trans == "" || $trans == null) { ?>
  <div class="card" style="margin-top: 5%;border: none;">
    <img src="asset/Group 76.png" class="img-nodata" class="card-img-top" alt="">
  </div>
<?php } else { ?>
  <table id="table-dashboard" class="table table-striped table-dark">
    <thead>
      <tr align="center">
        <th scope="col">No.</th>
        <th scope="col">Gambar Kopi</th>
        <th scope="col">Nama Kopi</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Total Harga</th>
        <th scope="col">Tanggal Transaksi</th>
        <th scope="col" colspan="2">Informasi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($trans as $row) { ?>
        <tr align="center">
          <th scope="row"><?= $row['id_trx']; ?></th>
          <td><img src="asset/gambar_kopi/<?= $row['gambar']; ?>" width="55" height="100" class="img-fluid rounded" alt=""></td>
          <td><?= $row['nama_kopi']; ?></td>
          <td><?= $row['jumlah']; ?></td>
          <td><?= $row['harga_total']; ?></td>
          <td><?= $row['tgl_trx']; ?></td>
          <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#updateModal<?= $row['id_trx']; ?>">Edit</button></td>
          <td><button type="button" onclick="deleted()" class="btn btn-danger">Delete</button></td>
        </tr>


        <!--Update Data Modal -->
        <div class="modal fade" id="updateModal<?= $row['id_trx']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="<?= base_url(); ?>transaction/updates">
                  <input type="hidden" class="form-control" id="id_trx" name="id_trx" value="<?= $row['id_trx']; ?>">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Menu Kopi</label>
                    <select class="form-control" name="menu_kopi" id="menu_kopi">
                      <option value="<?= $row['id_kopi']; ?>" data-img-src="asset/gambar_kopi/<?= $row['gambar']; ?>"><?= $row['nama_kopi']; ?> - Rp <?= $row['harga']; ?>,-</option>
                      <?php foreach ($coffee as $show) { ?>
                        <option value="<?= $show['id_kopi']; ?>" data-thumbnail="asset/gambar_kopi/<?= $show['gambar']; ?>"><?= $show['nama_kopi']; ?> - Rp <?= $show['harga']; ?>,-</option>
                      <?php
                          } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $row['jumlah']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Harga</label>
                    <input type="number" class="form-control" name="harga_total" id="harga_total" value="<?= $row['harga_total']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Transaksi</label>
                    <input type="date" class="form-control" id="tgl_trx" name="tgl_trx" value="<?= $row['tgl_trx']; ?>">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-dark">Ubah</button>
                  </div>

                </form>
              </div>

            </div>
          </div>
        </div>

    <?php }
    } ?>
    </tbody>
  </table>

  <script>
    function deleted() {
      swal({
        title: "Hapus Data",
        text: "Apakah anda yakin ingin menghapus transaksi ini?",
        icon: 'warning',
        buttons: true
      }).then(val => {
        if (val) {
          window.location.href = "<?= base_url(); ?>transaction/delete/<?php echo $row['id_trx']; ?>";
        }
      });
    }
  </script>



  <!--Add Data Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Transaksi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= base_url(); ?>transaction/insert">
            <input type="hidden" class="form-control" id="id_trx" name="id_trx">

            <div class="form-group">
              <label for="exampleInputEmail1">Menu Kopi</label>
              <select class="form-control" name="menu_kopi" id="menu_kopi">
                <option>- Pilih Menu Kopi -</option>
                <?php foreach ($coffee as $row) { ?>
                  <option value="<?= $row['id_kopi']; ?>"><?= $row['nama_kopi']; ?> - Rp <?= $row['harga']; ?>,-</option>
                <?php
                } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Jumlah</label>
              <input type="number" class="form-control" id="jumlah" name="jumlah">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Total Harga</label>
              <input type="number" class="form-control" name="harga_total" id="harga_total">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tanggal Transaksi</label>
              <input type="date" class="form-control" id="tgl_trx" name="tgl_trx">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-dark">Tambahkan</button>
            </div>

          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- <script>
    // function tampilHarga(val) {
    //   var harga_total;
    //   var viewTotal = document.getElementById('harga_total');
    //   var jml = document.getElementById('jumlah');
    //   jml.addEventListener("change", function() {
    //     harga_total = val * jml.value;
    //     viewTotal.value = harga_total;
    //   });
    // }
  </script> -->