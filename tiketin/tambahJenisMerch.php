<!DOCTYPE html>
<html lang="en">

<?php include './component/head.php' ?>

<body>
    <!-- Start Top Nav -->
    <?php include './component/top-nav.php' ?>
    <!-- Close Top Nav -->


    <!-- Header -->
    <?php include './component/navbar-admin.php' ?>

    
    <!-- Close Header -->
<div class="container pt-4">
        <form class="" action="./action/tambahJenisMerchAct.php" method="post" autocomplete="off" enctype="multipart/form-data">
          <div class="row p-2 border rounded-2 m-2">
            <label for="name" class="form-label">Jenis Merch : </label>
            <input type="text" name="name" id = "name" required value="" class="form-control">
          </div>

          <div class="row p-2 border rounded-2 m-2">
            <label for="image" class="form-label">Image : </label>
            <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="" class="form-control"> 
          </div>

          <div class="row p-2 border rounded-2 m-2">
            <button type = "submit" name = "submit" class="btn btn-primary">Submit</button>
          </div>
        
      
      </form>    
    </div>
</body>
</html>