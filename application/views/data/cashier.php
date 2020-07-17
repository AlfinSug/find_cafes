<script type="text/javascript" src="sweetalert/sweetalert.min.js"></script>

<!--Update Data Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Kasir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url(); ?>cashier/ubah" method="post">
          <input type="hidden" class="form-control" name="id_kasir" id="id_kasir">

          <div class="form-group">
            <label for="exampleInputEmail1">Nama Kasir</label>
            <input type="text" class="form-control" name="nama_kasir" id="nama_kasir">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">No. Telpon</label>
            <input type="text" class="form-control" name="no_telp" id="no_telp">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Tulis alamat kasir.."></textarea>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" class="form-control" name="password" id="password">
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

  td,
  th {
    text-align: center;
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
  <p class="h3">Data Kasir</p>
  <button style="margin-left: 75%;" type="button" class="btn btn-dark" data-toggle="modal" data-target="#addModal">Tambah Data</button>
</span>

<?php if ($cashier == "" || $cashier == null) { ?>
  <div class="card" style="margin-top: 5%;border: none;">
    <img src="asset/Group 76.png" class="img-nodata" class="card-img-top" alt="">
  </div>
<?php } else { ?>
  <table id="table-dashboard" class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">ID Kasir</th>
        <th scope="col">Nama Kasir</th>
        <th scope="col">No. Telpon</th>
        <th scope="col">Alamat</th>
        <th scope="col" colspan="2">Informasi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($cashier as $row) { ?>
        <tr>
          <th scope="row"><?= $row['id_kasir']; ?></th>
          <td><?= $row['nama_kasir']; ?></td>
          <td><?= $row['alamat']; ?></td>
          <td><?= $row['no_telp']; ?></td>
          <td><button type="button" onclick="edit(
                                            '<?= $row['id_kasir']; ?>',
                                            '<?= $row['nama_kasir']; ?>',
                                            '<?= $row['alamat']; ?>',
                                            '<?= $row['no_telp']; ?>',
                                            '<?= $row['password']; ?>')" class="btn btn-info" data-toggle="modal" data-target="#updateModal">Edit</button></td>
          <td><button type="button" onclick="deleted()" class="btn btn-danger">Delete</button></td>
        </tr>
    <?php }
    } ?>
    </tbody>
  </table>




  <!--Add Data Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kasir</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url(); ?>cashier/insert" method="post">
            <input type="hidden" class="form-control" name="id_kasir" id="id_kasir">

            <div class="form-group">
              <label for="exampleInputEmail1">Nama Kasir</label>
              <input type="text" class="form-control" name="nama_kasir" id="nama_kasir">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">No. Telpon</label>
              <input type="text" class="form-control" name="no_telp" id="no_telp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Alamat</label>
              <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Tulis alamat kasir.."></textarea>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" class="form-control" name="password" id="password">
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

  <script>
    function deleted() {
      swal({
        title: "Hapus Data",
        text: "Apakah anda yakin ingin menghapus kasir ini?",
        icon: 'warning',
        buttons: true
      }).then(val => {
        if (val) {
          window.location.href = "<?= base_url(); ?>cashier/delete/<?php echo $row['id_kasir']; ?>";
        }
      });

    }

    function edit($id_kasir, $nama_kasir, $alamat, $no_telp, $password) {
      $("#id_kasir").val($id_kasir);
      $("#nama_kasir").val($nama_kasir);
      $("#alamat").val($alamat);
      $("#no_telp").val($no_telp);
      $("#password").val($password);
    }
  </script>