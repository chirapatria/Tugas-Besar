<?php

//buat koneksi dengan MySQL
$link=mysql_connect('localhost','root','');
   
//jika koneksi gagal, langsung keluar dari PHP
if (!$link)
{
   die("Koneksi dengan MySQL gagal");
}
   
//gunakan database anggota
$result=mysql_query('USE surat');
if (!$result)
{
   die("Database anggota gagal digunakan");
}
 
//tampilkan tabel anggota
$result=mysql_query('SELECT * FROM suratsktm');
?>
<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <title>Admin</title>
   <style>
   h3{
      text-align:center; }
   table { 
      border-collapse:collapse;
      border-spacing:0;     
      font-family:Arial, sans-serif;
      font-size:16px;
      padding-left:300px;
      margin:auto; }
   table th {
      font-weight:bold;
      padding:10px;
      color:#fff;
      background-color:#333;
      border-top:1px black solid;
      border-bottom:1px black solid;}
   table td {
      padding:10px;
      border-top:1px black solid;
      border-bottom:1px black solid;
      text-align:center; }         

   </style>
</head>
<body>
   <h3>Daftar Pemohon Pembuatan Surat</h3>
<table>
<tr>
   <th>NIK</th>
   <th>Nama</th>
   <th>Tempat Lahir</th>
   <th>Tanggal Lahir</th>
   <th>Agama</th>
   <th>Jenis Kelamin</th>
   <th>Status Perkawinan</th>
   <th>Status Perkawinan</th>
   <th>Pekerjaan</th>
   <th>Alamat</th> 
   <th>Perihal</th>  
   <th>Email</th>
</tr>
<?php
while ($row=mysql_fetch_array($result))
{
   echo "<tr>";
   echo "<td>".$row['nik']."</td>";
   echo "<td>".$row['nama']."</td>";
   echo "<td>".$row['tempat']."</td>";
   echo "<td>".$row['ttl']."</td>";
   echo "<td>".$row['agama']."</td>";
   echo "<td>".$row['jk']."</td>"; 
   echo "<td>".$row['statusperkawinan']."</td>";
   echo "<td>".$row['pekerjaan']."</td>";
   echo "<td>".$row['alamat']."</td>";
   echo "<td>".$row['perihal']."</td>";
   echo "<td>".$row['email']."</td>"; 
   echo "<td><a href='edit.php'>Update</a>		   
   </td>
   </tr>";
}
?>
</table>
</body>
</html>
</body>
</html>