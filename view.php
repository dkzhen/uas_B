<?php
//koneksi database 
$koneksi = mysqli_connect("localhost", "root", "", "rental");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lihat Data</title>
</head>
<body>
  <h2 align="center">Lihat Data</h2>
  <table border="1" style="width:100%">
          <thead>
            <tr>
              <th>No</th>
              <th>NIK</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Jenis Mobil</th>
              <th>Harga Sewa</th>
              <th>Pembayaran Awal</th>
              <th>Jumlah Hari</th>
              <th>Potongan 10%</th>
              <th>Total Bayar</th>
            </tr>
          </thead>
          <tbody>

          <?php
        include 'koneksi.php';
        $query = mysqli_query($koneksi, "SELECT * FROM transaksi");
  $no=1;
  while($data = mysqli_fetch_array($query)){
  ?>
  <tr>
   <td><?=$no++?></td>
   <td><?=$data['nik']?></td>
   <td><?=$data['nama']?></td>
   <td><?=$data['alamat']?></td>
   <td><?=$data['Jns_mbl']?></td>
   <td><?=$data['hrg_sewa']?></td>
   <td><?=$data['p_awal']?></td>
   <td><?=$data['jml_hari']?></td>
   <td><?=$data['pot']?></td>
   <td><?=$data['ttl_byr']?></td>
  </tr>
  <?php
  }
  ?>
          </tbody>
        </table>
</body>
</html>