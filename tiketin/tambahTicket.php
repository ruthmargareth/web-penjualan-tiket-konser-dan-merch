<!DOCTYPE html>
<html lang="en">

<?php include './component/head.php' ?>

<body>
  <!-- Start Top Nav -->
  <?php include './component/top-nav.php' ?>
    <!-- Close Top Nav -->
    <?php include './component/navbar-admin.php' ?>

    
<div class="container pt-4">
<form class="" action="./action/tambahTiketAct.php" method="post" autocomplete="off" enctype="multipart/form-data">
          <div class="row p-2 border rounded-2 m-2">
            <label for="name" class="form-label">Nama Tiket : </label>
            <input type="text" name="name" id = "name" required value="" class="form-control">
          </div>

          <div class="row p-2 border rounded-2 m-2">
            <label for="image" class="form-label">Image : </label>
            <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="" class="form-control"> 
          </div> 
        
          <div class="row p-2 border rounded-2 m-2">
            <label for="harga" class="form-label">Harga : </label>
            <input type="text" name="harga" id = "harga" required value="" class="form-control">
          </div>

          <div class="row p-2 border rounded-2 m-2">
            <label for="stock" class="form-label">Stock : </label>
            <input type="text" name="stock" id = "stock" required value="" class="form-control">
          </div>     

          <div class="row p-2 border rounded-2 m-2"> 
            <label for="deskripsi" class="form-label">Deskripsi : </label>
            <textarea name="deskripsi" id="deskripsi" class="form-control">
            </textarea>
          </div>

          <div class="row p-2 border rounded-2 m-2">
            <button type = "submit" name = "submit" class="btn btn-primary">Submit</button>
          </div>
        
      
      </form>    
    </div>
</body>
</html>