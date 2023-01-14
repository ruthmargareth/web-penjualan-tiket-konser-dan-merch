<!DOCTYPE html>
<html lang="en">

<?php include './component/head.php' ?>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">tiketIn@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">0812-345-678-9</a>
                </div>
                <div>
                    <a class="text-light" href="https://facebook.com" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                TiketIn
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ticket.php">Ticket</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Merchandise</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li> -->
                    </ul>
                </div>

                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="cart.php">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="profile.php">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

 <!-- Start Brands -->
    <!-- <section class="bg-light py-5"> -->
        <div class="container my-2">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1"><b>MY ACCOUNT</b></h1>
                </div>
            </div>
        </div>

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

    
    <!-- Start Content -->
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-4">
                    <div class="col-md-20">
                        <div class="card mb-4 rounded-0">
                            <div class="card mb-6 rounded-0">
                                <div div="row" class="col-md-20">
                                    <ul class="pagination pagination-lg m-auto">
                                        <img src="https://i.mydramalist.com/vYe7Z_5f.jpg " style="width:30%">
                                        <li class="page-item disabled m-auto">
                                           <p class="text mb-0 ml-1"><b>Username: </b>HaechanLee</p>
                                           <p class="text mb-0 ml-1"><b>Email: </b>haechan@gmail.com</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <p><button type="submit" class="btn btn-success" name="submit" value="profile" style="width: 100%">Account detail</button></p>
                                <p><button type="submit" class="btn btn-success" name="submit" value="profile" style="width: 100%">Order</button></p>
                                <p><button type="submit" class="btn btn-success" name="submit" value="profile" style="width: 100%">Settings</button></p>
                                <p><button type="submit" class="btn btn-success" name="submit" value="profile" style="width: 100%">Help</button></p>
                                <p><button type="submit" class="btn btn-success" name="submit" value="profile" style="width: 100%">Reset Password</button></p>
                                <p><button type="submit" class="btn btn-success" name="submit" value="profile" style="width: 100%">Log Out</button></p>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-auto">
                        <h3 class="text mb-0 ml-1"><b>My Account</b></h3>
                        <p class="text mb-4 ml-1">Edit your account details</p>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-auto"> -->
                        <ul class="list-inline" style="width:50%">
                            <li class="list-inline">
                                <label><i>First Name</i></label>
                                 <!-- <div class="mb-2 mr-3" style="width:300"> -->
                                <input type="text" class="form-control border-dark" id="subscribeEmail" placeholder="Haechan">
                                <!-- <div class="input-group-text btn-success text-light">Subscribe</div> -->
                                <!-- </div> -->
                             </li>
                        </ul>
                        <ul class="list-inline" style="width:50%">
                            <li class="list-inline">
                                <label><i>Last Name</i></label>
                                 <!-- <div class="input-group mb-2 mr-3"> -->
                                <input type="text" class="form-control border-dark" id="subscribeEmail" placeholder="Lee">
                                <!-- <div class="input-group-text btn-success text-light">Subscribe</div> -->
                                <!-- </div> -->
                            </li>
                        </ul>
                        <ul lass="list-inline" style="width:100%">
                            <li class="list-inline">
                                <label><i>Username</i></label>
                                 <!-- <div class="input-group mb-2" > -->
                                <input type="text" class="form-control border-dark" id="subscribeEmail" placeholder="HaechanLee">
                                <!-- <div class="input-group-text btn-success text-light">Subscribe</div> -->
                                <!-- </div> -->
                            </li>
                        </ul>
                        <ul lass="list-inline" style="width:100%">
                            <li class="list-inline">
                                <label><i>Email Address</i></label>
                                 <!-- <div class="input-group mb-2" > -->
                                <input type="text" class="form-control border-dark" id="subscribeEmail" placeholder="haechan@gmail.com">
                                <!-- <div class="input-group-text btn-success text-light">Subscribe</div> -->
                                <!-- </div> -->
                            </li>
                        </ul>
                        <ul lass="list-inline" style="width:100%">
                            <li class="list-inline">
                                <label><i>Phone</i></label>
                                 <!-- <div class="input-group mb-2" > -->
                                <input type="text" class="form-control border-dark" id="subscribeEmail" placeholder="081345684923">
                                <!-- <div class="input-group-text btn-success text-light">Subscribe</div> -->
                                <!-- </div> -->
                            </li>
                        </ul>
                        <ul class="pagination pagination-lg">
                            <button type="submit" class="btn btn-success" name="submit" value="profile" style="width: 25%">Save Changes</button>
                        </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->

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
</body>

</html>