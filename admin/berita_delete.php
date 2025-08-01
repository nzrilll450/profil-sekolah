<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('Location: login.php');
  exit;
}
include '../koneksi/koneksi.php';

$id = $_GET['id'];
mysqli_query($con, "DELETE FROM berita WHERE id_berita=$id");

header('Location: berita_crud.php');
