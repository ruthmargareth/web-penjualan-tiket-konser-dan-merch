<?php
require 'koneksi.php';

if(isset($_POST["submit"])){

  $name = $_POST["name"];
  $harga = $_POST["harga"];
  $stock = $_POST["stock"];
  $deskripsi = $_POST["deskripsi"];

  
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
      $query = "INSERT INTO tiket VALUES('', '$name', '$newImageName', '$harga',  '$stock', '$deskripsi')";
      mysqli_query($koneksi, $query);
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = '../tambahTicket.php';
      </script>
      ";
    }
  }
}
?>