<?php
include "koneksi.php";

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$ttl = $_POST['ttl'];
$agama = $_POST['agama'];
$jk = $_POST['jk'];
$statusperkawinan = $_POST['statusperkawinan'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$perihal = $_POST['perihal'];
$jenis_surat = $_POST['jenis_surat'];
$email = $_POST['email'];

echo "<pre>".print_r($_POST,true)."</pre>";


$kirim = mysql_query("INSERT INTO suratsktm(nik, nama, tempat, ttl, agama, jk, statusperkawinan, pekerjaan, alamat, perihal, jenis_surat, email)
VALUES ('$nik', '$nama', '$tempat', '$ttl', '$agama', '$jk', '$statusperkawinan', '$pekerjaan', '$alamat', '$perihal', '$jenis_surat', '$email')");

  if ($kirim) {
    echo "Data Berhasil Dikirim";
  }else {
    echo "Data belum Dikirim";
  }

?>
