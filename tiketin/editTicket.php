<!DOCTYPE html>
<html lang="en">

<?php include './component/head.php' ?>

<body>
  <!-- Start Top Nav -->
  <?php include './component/top-nav.php' ?>
    <!-- Close Top Nav -->
    <?php include './component/navbar-admin.php' ?>


<div class="container pt-4">
<?php

include 'action/koneksi.php';
$id	= $_GET['id'];
$tiket = mysqli_query($koneksi, "SELECT * FROM tiket where id_tiket = '$id'");
$row = mysqli_fetch_array($tiket);
?>
        <form class="" action="./action/editTicketAct.php" method="post" autocomplete="off" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo $row['id_tiket']; ?>" name="id" id="id">

          <div class="row p-2 border rounded-2 m-2">
            <label for="name" class="form-label">Nama Tiket : </label>
            <input type="text" name="name" id = "name" required value="<?php echo $row['nama_tiket']; ?>" class="form-control">
          </div>
        
          <div class="row p-2 border rounded-2 m-2">
            <label for="harga" class="form-label">Harga : </label>
            <input type="text" name="harga" id = "harga" required value="<?php echo $row['harga_tiket']; ?>" class="form-control">
          </div>

          <div class="row p-2 border rounded-2 m-2">
            <label for="harga" class="form-label">Stock : </label>
            <input type="text" name="stock" id = "stock" required value="<?php echo $row['stock_tiket']; ?>" class="form-control">
          </div>

          <div class="row p-2 border rounded-2 m-2">
            <label for="image" class="form-label">Image : <?php echo $row['img_tiket']; ?></label>
            <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="<?php echo $row['img_tiket']; ?>" class="form-control" value="<?php echo $row['img_tiket']; ?>"> 
          </div>

          <div class="row p-2 border rounded-2 m-2"> 
            <label for="deskripsi" class="form-label">Deskripsi : </label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4">
                <?php echo $row['deskripsi_tiket']; ?>
            </textarea>
          </div>       


          <div class="row p-2 border rounded-2 m-2">
            <button type = "submit" name = "submit" class="btn btn-primary">Submit</button>
          </div>
        
      
      </form>    
    </div>
</body>
</html>