<!DOCTYPE html>
<html lang="en">

<?php include './component/head.php' ?>

<body>
	<header>
		<?php include './component/top-nav.php' ?>
		<!-- Close Top Nav -->
		<?php include './component/navbar-admin.php' ?>
	</header>

	<div class="container pb-5">
        <div class="row justify-content-md-center pb-5 mt-3 text-center">
            <table class="table">
                <thead class="table-info">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Merch</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
				<tr scope="row">
					<?php
					include 'action/koneksi.php';

					$no = 1;
					$sql = mysqli_query($koneksi, "SELECT * FROM jenis_merch"); 
					while ($data = mysqli_fetch_array($sql)) {
					?>
				</tr>
				<tr scope="row">
					<td><?= $no++ ?></td>
					<td><?= $data['nama_jenis_merch']; ?></td>
					<td><img width="100px" class="img-table" src="./assets/img/jenisMerch/<?= $data['img_jenis_merch']; ?>" alt="" ></td>
					<td>
						<a href="editJenisMerch.php?id= <?= $data['id_jenis_merch']; ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
						<a href="hapus.php?id= <?= $data['id_jenis_merch']; ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i> Hapus</a>
					</td>
				</tr>
			<?php } ?>
			</tbody>
              </table>

        </div>
    </div>  
    
    
</body>
</html>