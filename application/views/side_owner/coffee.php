<?php $svg_edit = '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
          </svg>';

$svg_delete = '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg>';

$svg_upload = '<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-images" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10z"/>
<path d="M10.648 8.646a.5.5 0 0 1 .577-.093l1.777 1.947V14h-12v-1l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z"/>
<path fill-rule="evenodd" d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/>
</svg>';


?>

<script type="text/javascript" src="sweetalert/sweetalert.min.js"></script>
<script type="text/javascript" src="jZoom-master/jquery.min.js"></script>
<script type="text/javascript" src="jZoom-master/jzoom.js"></script>

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

  .btn-action {
    margin-left: 52%;
  }

  .text-muted {

    margin: 3% 0;
  }

  .img-nodata {
    width: 100%;
  }

  .file {
    visibility: hidden;
    position: absolute;
  }

  #preview {
    margin: 5% 28%;
  }
  #preview1 {
    margin: 5% 28%;
  }

  .img-fluid {
    display: block;
    margin: auto;
  }
</style>
<!-- card image 1 -->
<?php
$success = $this->session->flashdata('success');
$del_success = $this->session->flashdata('del_success');
$del_success = $this->session->flashdata('edit_success');
$file_failed = $this->session->flashdata('file_failed');

if (!empty($success)) {
  echo $success;
} elseif (!empty($del_success)) {
  echo $del_success;
} elseif (!empty($edit_success)) {
  echo $edit_success;
} elseif (!empty($file_failed)) {
  echo $file_failed;
}
?>


<!--Add Data Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kopi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url(); ?>coffee/insert" method="post" enctype="multipart/form-data">
          <input type="hidden" class="form-control" name="id_kopi" id="id_kopi">
          <input type="file" name="gambar" class="file">
          <div class="input-group my-3">
            <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
            <div class="input-group-append">
              <button type="button" class="browse btn btn-secondary"><?= $svg_upload; ?></button>
            </div>
          </div>
          <div class="col-md-8">
            <img src="asset/Group 75.png" id="preview" class="img-thumbnail">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Kopi</label>
            <input type="text" class="form-control" name="nama_kopi" id="nama_kopi">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Harga</label>
            <input type="number" class="form-control" name="harga" id="harga">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Stok</label>
            <input type="number" class="form-control" name="stock" id="harga">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Deskripsi</label>
            <textarea class="form-control" id="desc_kopi" name="desc_kopi" rows="3" placeholder="Tulis deskripsi kopi.."></textarea>
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

<div style="border: none; padding: 0 5% 5% 5%; " class="card mb-3" style="max-width: 100%;">
  <span id="rows">
    <p class="h3">Coffee Catalog</p>
    <button style="margin-left: 65%;" type="button" class="btn btn-dark" data-toggle="modal" data-target="#addModal" onclick="onrefresh();">Tambah Data</button>
  </span>

  <!-- list 1 -->

<script>
function pickImage() {
      document.getElementById("preview1").style.display = "block";
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("chooseFile1").files[0]);
      

      oFReader.onload = function(oFREvent) {
        document.getElementById("preview1").src = oFREvent.target.result;
      };

      document.getElementById("custom-text1").value = oFREvent.target.files[0].name;

    };

    function onrefresh() {
      $("#id_kopi").val('');
      $("#preview").val('asset/Group 75.png');
      $("#nama_kopi").val('');
      $("#harga").val('');
      $("#stock").val('');
      $("#desc_kopi").val('');
    }
</script>

  <div class="card-deck">
    <?php if ($coffee == "" || $coffee == null) { ?>
      <div class="card" style="margin-top: 5%;border: none;">
        <img src="asset/Group 76.png" class="img-nodata" class="card-img-top" alt="">
      </div>
    <?php } else { ?>
      <?php foreach ($coffee as $row) { ?>
        <div class="card" style="margin-top: 5%;">
          <input type="hidden" value="<?= $row['id_kopi']; ?>">
          <img src="asset/gambar_kopi/<?= $row['gambar']; ?>" width="120" height="100" class="img-fluid" id="zoomImg" alt="" onchange="zoomIn()">
          <div class="card-body">
            <h5 class="card-title"><?= $row['nama_kopi']; ?></h5>
            <p class="card-text"><?= $row['desc_kopi']; ?></p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Rp <?= $row['harga']; ?>,-</small>
            <div class="btn-action">
              <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#updateModal<?php echo $row['id_kopi']; ?>"><?= $svg_edit; ?></button>
              <button type="button" onclick="deleted()" class="btn btn-danger"><?= $svg_delete; ?></button>
            </div>
          </div>
        </div>
        <!--Update Data Modal -->
        <div class="modal fade" id="updateModal<?= $row['id_kopi']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Kopi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url(); ?>coffee/ubah" method="post" enctype="multipart/form-data">
                  <input type="hidden" class="form-control" name="id_kopi" id="id_kopi" value="<?= $row['id_kopi']; ?>">
                  <div class="custom-file">
                  <?php if ($row['gambar'] == null || $row['gambar'] == "") { ?>
                    <input type="file" class="custom-file-input" id="chooseFile" name="gambar" onchange="pickImage();"   required>
                    <label class="custom-file-label" id="custom-text1" for="real-file" ></label>
                    <?php } else { ?>
                      <input type="file" class="custom-file-input" id="chooseFile1" name="gambar" onchange="pickImage();"   required>
                    <label class="custom-file-label" id="custom-text1" for="real-file"></label>
                    <?php } ?>
                  </div>
                 
                  <div class="col-md-8">
                    <?php if ($row['gambar'] == null || $row['gambar'] == "") { ?>
                      <img src="asset/Group 75.png" id="preview" class="img-thumbnail">
                    <?php } else { ?>
                      <img src="asset/gambar_kopi/<?= $row['gambar']; ?>" id="preview1" class="img-thumbnail">
                    <?php } ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kopi</label>
                    <input type="text" class="form-control" name="nama_kopi" id="nama_kopi" value="<?= $row['nama_kopi']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="number" class="form-control" name="harga" id="harga" value="<?= $row['harga']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Stok</label>
                    <input type="number" class="form-control" name="stock" id="stock" value="<?= $row['stock']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <textarea class="form-control" id="desc_kopi" name="desc_kopi" rows="3" placeholder="Tulis deskripsi kopi.."><?= $row['desc_kopi']; ?></textarea>
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
  </div>


  <script>
    $(document).on("click", ".browse", function() {
      var file = $(this).parents().find(".file");
      file.trigger("click");
    });
    $('input[type="file"]').change(function(e) {
      var fileName = e.target.files[0].name;
      $("#file").val(fileName);

      var reader = new FileReader();
      reader.onload = function(e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
      };
      // read the image file as a data URL.
      reader.readAsDataURL(this.files[0]);
    });

    function deleted() {
      swal({
        title: "Hapus Data",
        text: "Apakah anda yakin ingin menghapus kopi ini?",
        icon: 'warning',
        buttons: true
      }).then(val => {
        if (val) {
          window.location.href = "<?= base_url(); ?>coffee/delete/<?php echo $row['id_kopi']; ?>";
        }
      });

    }

function zoomIn() {
  
  $('#zoomImg').jzoom();
}


  </script>