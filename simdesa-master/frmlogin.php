<?php
include "koneksi.php";

$username = $_GET['username'];
$password = $_GET['password'];

echo "<pre>".print_r($_GET,true)."</pre>";


$login = mysql_query(" SELECT * FROM admin WHERE (username, password)VALUES ('$username', '$password') ");

  if ($kirim) {
    echo "<script>window.location='homeadmin.php'</script>";
  }else {
    echo "Data belum Dikirim";
	    echo "<script>window.location='homeadmin.php'</script>";
  }

?>
