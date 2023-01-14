<?php
include 'koneksi.php';

$id = $_POST['id'];
$name = $_POST["name"];
$harga = $_POST["harga"];
$deskripsi = $_POST["deskripsi"];
$stock = $_POST["stock"];

if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, '../assets/img/ticket/' . $newImageName);
      $query = "UPDATE tiket set 
      nama_tiket = '$name',
      img_tiket = '$newImageName',
      harga_tiket = '$harga',
      deskripsi_tiket = '$deskripsi',
      stock_tiket = '$stock' WHERE id_tiket = '$id'
      ";

      mysqli_query($koneksi, $query);
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = '../tabelTicket.php';
      </script>
      ";
    }
  }
