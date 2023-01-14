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
$merch = mysqli_query($koneksi, "SELECT * FROM jenis_merch");
$row = mysqli_fetch_array($merch);
?>
        <form class="" action="./action/editJenisMerchAct.php" method="post" autocomplete="off" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo $row['id_jenis_merch']; ?>" name="id" id="id">

          <div class="row p-2 border rounded-2 m-2">
            <label for="name" class="form-label">Nama Jenis Merch : </label>
            <input type="text" name="name" id = "name" required value="<?php echo $row['nama_jenis_merch']; ?>" class="form-control">
          </div>

          <div class="row p-2 border rounded-2 m-2">
            <label for="image" class="form-label">Image : <?php echo $row['img_jenis_merch']; ?></label>
            <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="<?php echo $row['img_jenis_merch']; ?>" class="form-control"> 
          </div>  

          <div class="row p-2 border rounded-2 m-2">
            <button type = "submit" name = "submit" class="btn btn-primary">Submit</button>
          </div>
        
      
      </form>    
    </div>
</body>
</html>