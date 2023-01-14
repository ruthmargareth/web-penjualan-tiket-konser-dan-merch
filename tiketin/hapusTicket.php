<?php

include('action/koneksi.php');

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM tiket WHERE id_tiket = '$id' ");

echo "<script> alert('Ticket Berhasil dihapus')</script>";
echo "<meta http-equiv='refresh' content='0; URL=tabelTicket.php'>";
