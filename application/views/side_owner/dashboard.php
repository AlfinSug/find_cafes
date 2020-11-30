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
</style>
<p class="h3">Data Laporan Transaksi</p>
<?php if ($laporan == "" || $laporan == null) { ?>
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
        <th scope="col">Harga Kopi</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Total Harga</th>
        <th scope="col">Tanggal Transaksi</th>
      </tr>
    </thead>
    <tbody>

      <?php $no = 1;
        foreach ($laporan as $row) { ?>
        <tr align="center">
          <th scope="row"><?= $no++; ?></th>
          <td><img src="asset/gambar_kopi/<?= $row['gambar']; ?>" width="55" height="100" class="img-fluid rounded" alt=""></td>
          <td><?= $row['nama_kopi']; ?></td>
          <td><?= $row['harga']; ?></td>
          <td><?= $row['jumlah']; ?></td>
          <td><?= $row['harga_total']; ?></td>
          <td><?= $row['tgl_trx']; ?></td>
        </tr>

    <?php }
    } ?>
    </tbody>
  </table>