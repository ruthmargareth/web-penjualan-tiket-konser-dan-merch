<!DOCTYPE html>
<html lang="en">

<?php include './component/head.php' ?>

<body>
<?php include './component/top-nav.php' ?>
    <!-- Close Top Nav -->
    <?php include './component/navbar-admin.php' ?>
    
    <div class="container pb-5">

            <div class="container border rounded-3 p-2 mt-3 ">
                <h2 class="text-success">Data Tiket</h2>
                <ul>
                    <li><a href="tambahTicket.php">Tambah</a></li>
                    <li><a href="tabelTicket.php">Tabel Data Tiket</a></li>
                </ul>
            </div>

            <div class="container border rounded-3 p-2 mt-3">
                <h2 class="text-success">Data Merchandise</h2>
                <ul>
                    <li><a href="tambahMerch.php">Tambah</a></li>
                    <li><a href="tabelMerch.php">Tabel Data Merchanidise</a></li>
                </ul>
            </div>
           
            <div class="container border rounded-3 p-2 mt-3">
                <h2 class="text-success">Data Jenis Merchandise</h2>
                <ul>
                    <li><a href="tambahJenisMerch.php">Tambah</a></li>
                    <li><a href="tabelJenisMerch.php">Tabel Data Jenis Merchandise</a></li>
                </ul>   
            </div>
    </div>
</body>
</html>