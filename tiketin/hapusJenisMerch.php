<?php

include('action/koneksi.php');

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM jenis_merch WHERE id_jenis_merch = '$id' ");

echo "<script> alert('Jenis Merchandise Berhasil dihapus')</script>";
echo "<meta http-equiv='refresh' content='0; URL=tabelJenisMerch.php'>";
