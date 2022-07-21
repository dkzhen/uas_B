<?php
include 'koneksi.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$Jns_mbl = $_POST['Jns_mbl'];
$hrg_sewa= $_POST['hrg_sewa'];
$p_awal = $_POST['p_awal'];
$jml_hari = $_POST['jml_hari'];
$pot = $hrg_sewa*$jml_hari*(10/100);
$ttl_byr = $hrg_sewa*$jml_hari-$p_awal-$pot;

mysqli_query($koneksi, "insert into transaksi values ('$nik', '$nama', '$alamat', '$Jns_mbl', '$hrg_sewa', '$p_awal', '$jml_hari', '$pot', '$ttl_byr')");
?>
<script>
  document.location="view.php";
</script>