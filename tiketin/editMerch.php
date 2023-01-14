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
$merch = mysqli_query($koneksi, "SELECT * FROM merch where id_merch = '$id'");
$row = mysqli_fetch_array($merch);
?>
        <form class="" action="./action/editMerchAct.php" method="post" autocomplete="off" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo $row['id_merch']; ?>" name="id" id="id">

          <div class="row p-2 border rounded-2 m-2">
            <label for="name" class="form-label">Nama Merch : </label>
            <input type="text" name="name" id = "name" required value="<?php echo $row['nama_merch']; ?>" class="form-control">
          </div>
        
          <div class="row p-2 border rounded-2 m-2">
            <label for="harga" class="form-label">Harga : </label>
            <input type="text" name="harga" id = "harga" required value="<?php echo $row['harga_merch']; ?>" class="form-control">
          </div>

          <div class="row p-2 border rounded-2 m-2">
            <label for="harga" class="form-label">Stock : </label>
            <input type="text" name="stock" id = "stock" required value="<?php echo $row['stock_merch']; ?>" class="form-control">
          </div>

          <div class="row p-2 border rounded-2 m-2">
            <label for="image" class="form-label">Image : <?php echo $row['img_merch']; ?></label>
            <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="<?php echo $row['img_merch']; ?>" class="form-control"> 
          </div>

          <div class="row p-2 border rounded-2 m-2"> 
            <label for="deskripsi" class="form-label">Deskripsi : </label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4">
                <?php echo $row['deskripsi_merch']; ?>
            </textarea>
          </div>

          <div class="row p-2 border rounded-2 m-2">
            <label for="jenisMerch" class="form-label">Jenis Merch : </label>
            <select name="jenisMerch" id="jenisMerch"  class="form-select">
              <option value="0" disabled>Pilih Jenis Merchandise</option>
              <?php 
                require './action/koneksi.php';
                $jenisMerch = mysqli_query($koneksi, "SELECT * FROM jenis_merch");   
              ?>
              <?php foreach ($jenisMerch as $row) : ?>
                <option value="<?= $row['id_jenis_merch']; ?>"><?=$row['nama_jenis_merch'];?></option>
              <?php endforeach; ?>
            </select>
          </div>        


          <div class="row p-2 border rounded-2 m-2">
            <button type = "submit" name = "submit" class="btn btn-primary">Submit</button>
          </div>
        
      
      </form>    
    </div>
</body>
</html>