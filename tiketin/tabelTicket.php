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
                    <th scope="col">Nama</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
				<tr scope="row">
					<?php
					include 'action/koneksi.php';

					$no = 1;
					$sql = mysqli_query($koneksi, "SELECT * FROM tiket"); 
					while ($data = mysqli_fetch_array($sql)) {
					?>
				</tr>
				<tr scope="row">
					<td><?= $no++ ?></td>
					<td><?= $data['nama_tiket']; ?></td>
					<td><img width="100px" class="img-table" src="./assets/img/ticket/<?= $data['img_tiket']; ?>" alt="" ></td>
					<td><?= $data['harga_tiket']; ?></td>
					<td><?= $data['stock_tiket']; ?></td>
					<td class="cut-text"><?= $data['deskripsi_tiket']; ?></td>
					<td>
						<a href="editTicket.php?id= <?= $data['id_tiket']; ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
						<a href="hapusTicket.php?id= <?= $data['id_tiket']; ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i> Hapus</a>
					</td>
				</tr>
			<?php } ?>
			</tbody>
              </table>

        </div>
    </div>  
    
    
</body>
</html>