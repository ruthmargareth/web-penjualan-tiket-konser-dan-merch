<!DOCTYPE html>
<html lang="en">

<?php include './component/head.php' ?>

<body>
    <!-- Start Top Nav -->
    <?php include './component/top-nav.php' ?>
    <!-- Close Top Nav -->


    <!-- Header -->
    <?php include './component/navbar.php' ?>

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
    <?php
    include './action/koneksi.php';
    $id	= $_GET['id'];
    $tiket = mysqli_query($koneksi, "SELECT * FROM tiket where id_tiket = '$id'");
    $row = mysqli_fetch_array($tiket);
    $stock ="";
    if($row['stock_tiket'] < 1){
        $stock= "Out Of Stock";
    }else{
        $stock="In Stock";
    };
    ?>

        <div class="container pb-0">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="./assets/img/ticket/<?php echo $row["img_tiket"]; ?>" alt="Card image cap" id="product-detail">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"><?= $row['nama_tiket']; ?></h1>
                            <p class="h3 py-2"><?= $row['harga_tiket']; ?></p>
                            <p class="py-2">
                                <span class="list-inline-item text-dark">Saturday 04.02.2023 6:30PM</span>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6 color="red"><?php echo $stock?> - <?php echo $row['stock_tiket'] ?></h6>
                                </li>
                                
                            </ul>

                            <h6>Description:</h6>
                            <p align="justify"><?= $row['deskripsi_tiket']; ?></p>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-7 mt-5">
                    <h2 class="h2"><b>Seating Plan</b></h2>
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/rsfit19201280gsm/events/2022/11/07/081a601d-9694-40a4-993d-e05ba7430868-1667795659191-2988be85a854d902e1bbd143281cc0be.jpeg" alt="Card image cap" id="product-detail">
                    </div>

                    <h2 class="h2"><b>Other Information</b></h2>
                    <div class="card mb-2">
                        <div class="card-body">
                            <ul class="list-unstyled templatemo-accordion">
                                <li class="pb-3">
                                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                                        Redemption Info
                                        <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                                    </a>
                                    <ul class="collapse show list-unstyled pl-3">
                                        <li><p>Ticket Redemption Location: to be updated</p></li>
                                        <li><p>You have to show your valid identity card. For customers under 17 years old, you can use a student card if you don't have an identity card.</p></li>
                                        <li><p>Customers are required to wear masks, bring personal hand sanitizers, and comply with all health protocols during the event.</p></li>
                                    </ul>
                                </li>
                                <li class="pb-3">
                                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                                        Term and Condition
                                        <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                                    </a>
                                    <ul class="collapse list-unstyled pl-3">
                                        <li><p>By purchasing a ticket, the customer is considered to have read, understood, and agreed with all the Terms & Conditions of the event</p></li>
                                        <li><p>Prices include tax.</p></li>
                                        <li><p>Tickets that have been purchased are non-refundable</p></li>
                                        <li><p>Tickets that have been purchased cannot be rescheduled</p></li>
                                        <li><p>E-tickets are non-refundable</p></li>
                                        <li><p>Customers are required to wear masks during the event</p></li>
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
                    <h2 class="h2"><b>Ticket Catalog</b></h2>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h3 class="h3 py-2"><b>BLUE-A FESTIVAL</b></h3>
                            <p>Ticket price includes tax and ticket processing fee as applicable.</p>
                        
                            <!-- <div class="col-12 mb-3"> -->
                                <div class="w-100 my-3 border-top border-black"></div>
                            <!-- </div> -->
                            <p class="h3 py-2">IDR 2.920.000</p>
                                <div class="row pb-3">
                                    <!-- <div class="col d-grid"> -->
                                        <!-- <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button> -->
                                    <!-- </div> -->
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard"><a class="btn btn-success text-white"  href="cart.html">Add To Cart</a></button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h3 class="h3 py-2"><b>PURPLE-A</b></h3>
                            <p>Ticket price includes tax and ticket processing fee as applicable.</p>
                            <!-- <div class="col-12 mb-3"> -->
                                <div class="w-100 my-3 border-top border-black"></div>
                            <!-- </div> -->
                            <p class="h3 py-2">IDR 1.420.000</p>
                                <div class="row pb-3">
                                    <!-- <div class="col d-grid"> -->
                                        <!-- <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button> -->
                                    <!-- </div> -->
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard"><a class="btn btn-success text-white"  href="cart.html">Add To Cart</a></button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h3 class="h3 py-2"><b>GREEN-A</b></h3>
                            <p>Ticket price includes tax and ticket processing fee as applicable.</p>
                            <!-- <div class="col-12 mb-3"> -->
                                <div class="w-100 my-3 border-top border-black"></div>
                            <!-- </div> -->
                            <p class="h3 py-2">IDR 2.420.000</p>
                                <div class="row pb-3">
                                    <!-- <div class="col d-grid"> -->
                                        <!-- <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button> -->
                                    <!-- </div> -->
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard"><a class="btn btn-success text-white"  href="cart.html">Add To Cart</a></button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h3 class="h3 py-2"><b>YELLOW</b></h3>
                            <p>Ticket price includes tax and ticket processing fee as applicable.</p>
                            <!-- <div class="col-12 mb-3"> -->
                                <div class="w-100 my-3 border-top border-black"></div>
                            <!-- </div> -->
                            <p class="h3 py-2">IDR 2.020.000</p>
                                <div class="row pb-3">
                                    <!-- <div class="col d-grid"> -->
                                        <!-- <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button> -->
                                    <!-- </div> -->
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard"><a class="btn btn-success text-white"  href="cart.html">Add To Cart</a></button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h3 class="h3 py-2"><b>PINK</b></h3>
                            <p>Ticket price includes tax and ticket processing fee as applicable.</p>
                            <!-- <div class="col-12 mb-3"> -->
                                <div class="w-100 my-3 border-top border-black"></div>
                            <!-- </div> -->
                            <p class="h3 py-2">IDR 2.520.000</p>
                                <div class="row pb-3">
                                    <!-- <div class="col d-grid"> -->
                                        <!-- <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button> -->
                                    <!-- </div> -->
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard"><a class="btn btn-success text-white"  href="cart.html">Add To Cart</a></button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <?php include './component/footer.php' ?>
    

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