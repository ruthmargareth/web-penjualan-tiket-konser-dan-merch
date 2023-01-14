<?php

include('action/koneksi.php');

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM merch WHERE id_merch = '$id' ");

echo "<script> alert('Merchandise Berhasil dihapus')</script>";
echo "<meta http-equiv='refresh' content='0; URL=tabelMerch.php'>";
