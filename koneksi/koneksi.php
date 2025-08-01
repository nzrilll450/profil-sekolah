<?php
$con = mysqli_connect('localhost','root','','db_berita');


if (!$con) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
