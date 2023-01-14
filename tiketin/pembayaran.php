<!DOCTYPE html>
<html lang="en">

<?php
include './component/head.php'
?>

<body>
    <!-- Start Top Nav -->
    <?php
include './component/top-nav.php'
?>
    <!-- Close Top Nav -->


    <!-- Header -->
    <?php
include './component/navbar.php'
?>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-7 mt-5">

                    <h2 class="h2"><b>metode pembayaran</b></h2>
                    <div class="card mb-2">
                        <div class="card-body">
                            <ul class="list-unstyled templatemo-accordion">
                                <li class="pb-3">
                                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                                        Virtual Account
                                        <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                                    </a>
                                    <ul class="collapse show list-unstyled pl-3">
                                        <form action="">
                                        <?php include 'action/koneksi.php';

                                        $id	= $_GET['id'];
                                        $merch = mysqli_query($koneksi, "SELECT * FROM merch where id_merch = '$id'");
                                        $row = mysqli_fetch_array($merch);

                                        ?>

                                            <input type="hidden" value="<?= $row['id_merch']; ?>">
                                            <li><p><a style="text-decoration:none" href="bayar.php?id= <?= $row['id_merch']; ?>">BCA Virtual Account </a></p></li>
                                        <li><p><a style="text-decoration:none" href="bayar.html">Mandiri Virtual Account</a></p></li>
                                        <li><a style="text-decoration:none" href="bayar.html"><p>BNI Virtual Account</a></p></li>
                                        </form>
                                        
                                    </ul>
                                </li>
                                <li class="pb-3">
                                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                                        Transfer
                                        <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                                    </a>
                                    <ul class="collapse list-unstyled pl-3">
                                        <li><p><a style="text-decoration:none" href="bayar.html">Bank BCA</a></p></li>
                                        <li><p><a style="text-decoration:none" href="bayar.html">Bank Mandiri</a></p></li>
                                    </ul>
                                </li>
                                <li class="pb-3">
                                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                                        Instant Payment
                                        <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                                    </a>
                                    <ul class="collapse list-unstyled pl-3">
                                        <li><p><a style="text-decoration:none" href="bayar.html">Klick BCA</a></p></li>
                                        <li><p><a style="text-decoration:none" href="bayar.html">Gopay</a></p></li>
                                        <li><p><a style="text-decoration:none" href="bayar.html">Shopeepay</a></p></li>
                                        <li><p><a style="text-decoration:none" href="bayar.html">LinkAja</a></p></li>
                                    </ul>
                                </li>
                                <li class="pb-3">
                                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                                        Gerai Rental
                                        <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                                    </a>
                                    <ul class="collapse list-unstyled pl-3">
                                        <li><p><a style="text-decoration:none" href="bayar.html">Alfamart</a></p></li>
                                        <li><p><a style="text-decoration:none" href="bayar.html">AlfaMidi</a></p></li>
                                        <li><p><a style="text-decoration:none" href="bayar.html">Lawson</a></p></li>
                                        <li><p><a style="text-decoration:none" href="bayar.html">Indomaret</a></p></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                </div>

                <!-- col end -->
                <div class="col-lg-5 mt-5">
                    <h2 class="h2"><b>Ticket</b></h2>
                    <div class="card mb-3">
                        <div class="card-body">
                            



                            <h3 class="h3 py-2"><b><?= $row['nama_merch']; ?></b></h3>
                            <p>order ID: 0123535635</p>
                            <p>Saturday 04.02.2023 6:30PM</p>
                        
                            <!-- <div class="col-12 mb-3"> -->
                                <div class="w-100 my-3 border-top border-black"></div>
                            <!-- </div> -->
                            <p class="h3 py-2">IDR <?= $row['harga_merch']; ?></p>
                                <div class="row pb-3">
                                    
                                </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

 <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">TiketIn</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <!-- <i class="fas fa-map-marker-alt fa-fw"></i>
                            123 Consectetur at ligula 10660 -->
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">0812-345-678-9</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">tiketIn@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Photobook</a></li>
                        <li><a class="text-decoration-none" href="#">Album</a></li>
                        <li><a class="text-decoration-none" href="#">Goods</a></li>
                        <li><a class="text-decoration-none" href="#">Fanlight</a></li>
                        <li><a class="text-decoration-none" href="#">Tickets</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                        <li><a class="text-decoration-none" href="#">Sosical Media</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <!-- <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2021 Company Name 
                            | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div> -->
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->

</body>

</html>