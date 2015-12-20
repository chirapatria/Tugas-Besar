<?php
/*
 *      koneksi.php
 *      Melakukan koneksi ke database
 */

$host = "localhost";
      $user = "root";
      $pass = "";

      $db="simdes";
      mysql_connect($host, $user, $pass);
      mysql_select_db($db);
?>
