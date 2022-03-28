<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="sunnie hotel">
    <meta name="keywords" content="Sunnie, hotel, bandung, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunnie Hotel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="icon" href="assets/img/image/logosh.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <style>
        .overflowtest {
            width: 90%;
            height: 30px;
            overflow-y: hidden;
            overflow-x: hidden;
        }
        </style>
</head>

    <body>

<!-- cek apakah sudah login -->
<?php 
	session_start();
	if($_SESSION['status']!="signin"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="./mainpage.php"><img src="assets/img/image/logosunnie.PNG" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__widget">
            <ul>
                <li><span class="icon_pin_alt"></span> St. Ir H Juanda 390, Bandung</li>
                <li><span class="icon_phone"></span> (+62) 838-2941-0684</li>
            </ul>
        </div>
        <div class="offcanvas__language">
            <img src="assets/img/lan.png" alt="">
            <span>English</span>
            <ul>
                <li>English</li>
            </ul>
        </div>
        <div class="offcanvas__auth">
            <ul>
            <li><a href="../logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><span class="icon_pin_alt"></span> St. Ir H Juanda 390, Bandung</li>
                            <li><span class="icon_phone"></span> (+62) 838-2941-0684</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__auth">
                                <ul>
                                    <li><a href="../logout.php">Logout</a></li>
                                </ul>
                            </div>
                            <div class="header__top__language">
                                <img src="assets/img/lan.png" alt="">
                                <span>English</span>
                                <ul>
                                    <li>English</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__nav__option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href="mainpage.php"><img src="assets/img/image/ASRT5941.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="header__nav">
                            <nav class="header__menu">
                                <ul class="menu__class">
                                    <li ><a href="mainpage.php">Home</a></li>
                                    <li class="active"><a href="rooms.php">Rooms</a></li>
                                    <li><a href="facilities.php">Facilities</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="canvas__open">
                    <span class="fa fa-bars"></span>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option set-bg" data-setbg="assets/img/bg/bg5.PNG">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h1>Our Room</h1>
                        <div class="breadcrumb__links">
                            <a href="mainpage.php">Home</a>
                            <span>Rooms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Rooms Section Begin -->
    <section class="rooms spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6">
                    <div class="room__pic__slider owl-carousel">
                        <div class="room__pic__item set-bg" data-setbg="assets/img/rooms/room-1.jpg"></div>
                        <div class="room__pic__item set-bg" data-setbg="assets/img/rooms/details/deluxe2.jpg"></div>
                        <div class="room__pic__item set-bg" data-setbg="assets/img/rooms/details/deluxe.jfif"></div>
                    </div>
                </div>
                <?php
         include "../config.php";
         $data = mysqli_query($koneksi,"select * from tipekamar where id_kamar=1");
       
       // $row = mysqli_fetch_array($data);
       while($row=mysqli_fetch_array($data)){
       //    echo $row['no']; die();
       //   ?>
                <div class="col-lg-6 p-0 order-lg-1 order-md-1 col-md-6">
                    <div class="room__text">
                        <h3><?php echo $row['tipe_kamar']?></h3>
                        <h2><sup>IDR</sup>⠀<?php echo $row['harga']?><span>/day</span></h2>
                        <ul>
                            <li><span>Size</span> : <?php echo $row['size']?> sqm</li>
                            <li><span>Capacity</span> : Max persion <?php echo $row['kapasitas']?></li>
                            <li class="overflowtest"><span>Facility</span> : <?php echo $row['fasilitas']?></li>
                            <li><span>View</span> : <?php echo $row['view']?></li>
                        </ul>
                        <a href="deluxe.php">View Details</a>
                    </div>
                </div>
                <div class="col-lg-6 p-0 order-lg-3 order-md-3 col-md-6">
                    <div class="room__pic__slider owl-carousel">
                        <div class="room__pic__item set-bg" data-setbg="assets/img/rooms/room-2.jpg"></div>
                        <div class="room__pic__item set-bg" data-setbg="assets/img/rooms/details/premier2.jpg"></div>
                        <div class="room__pic__item set-bg" data-setbg="assets/img/rooms/details/premier3.jpg"></div>
                        <div class="room__pic__item set-bg" data-setbg="assets/img/rooms/details/premier-suite.jpg"></div>
                        <div class="room__pic__item set-bg" data-setbg="assets/img/rooms/details/premier.jfif"></div>
                    </div>
                </div>
                <?php
         include "../config.php";
         $data = mysqli_query($koneksi,"select * from tipekamar where id_kamar=2");
       
       // $row = mysqli_fetch_array($data);
       while($row=mysqli_fetch_array($data)){
       //    echo $row['no']; die();
       //   ?>
                <div class="col-lg-6 p-0 order-lg-4 order-md-4 col-md-6">
                    <div class="room__text right__text">
                        <h3><?php echo $row['tipe_kamar']?></h3>
                        <h2><sup>IDR</sup>⠀<?php echo $row['harga']?><span>/day</span></h2>
                        <ul>
                            <li><span>Size</span> : <?php echo $row['size']?> sqm</li>
                            <li><span>Capacity</span> : Max persion <?php echo $row['kapasitas']?></li>
                            <li class="overflowtest"><span>Facility</span> : <?php echo $row['fasilitas']?></li>
                            <li><span>View</span> : <?php echo $row['view']?></li>
                        </ul>
                        <a href="premier.php">View Details</a>
                    </div>
                </div>
                <div class="col-lg-6 p-0 order-lg-6 order-md-6 col-md-6">
                    <div class="room__pic__slider owl-carousel">
                        <div class="room__pic__item set-bg" data-setbg="assets/img/rooms/room-3.jpg"></div>
                        <div class="room__pic__item set-bg" data-setbg="assets/img/rooms/details/hillside2.jpg"></div>
                        <div class="room__pic__item set-bg" data-setbg="assets/img/rooms/details/hillside.jfif"></div>
                    </div>
                </div>
                <?php
         include "../config.php";
         $data = mysqli_query($koneksi,"select * from tipekamar where id_kamar=3");
       
       // $row = mysqli_fetch_array($data);
       while($row=mysqli_fetch_array($data)){
       //    echo $row['no']; die();
       //   ?>
                <div class="col-lg-6 p-0 order-lg-5 order-md-5 col-md-6">
                    <div class="room__text">
                        <h3><?php echo $row['tipe_kamar']?></h3>
                        <h2><sup>IDR</sup>⠀<?php echo $row['harga']?><span>/day</span></h2>
                        <ul>
                            <li><span>Size</span> : <?php echo $row['size']?> sqm</li>
                            <li><span>Capacity</span> : Max persion <?php echo $row['kapasitas']?></li>
                            <li class="overflowtest"><span>Facility</span> : <?php echo $row['fasilitas']?></li>
                            <li><span>View</span> : <?php echo $row['view']?></li>
                        </ul>
                        <a href="hillside.php">View Details</a>
                    </div>
                </div>
                <div class="col-lg-6 p-0 order-lg-7 order-md-7 col-md-6">
                    <div class="room__pic__slider owl-carousel">
                        <div class="room__pic__item set-bg" data-setbg="assets/img/rooms/room-4.jpg"></div>
                        <div class="room__pic__item set-bg" data-setbg="assets/img/rooms/details/family2.jpg"></div>
                        <div class="room__pic__item set-bg" data-setbg="assets/img/rooms/details/family3.jpg"></div>
                        <div class="room__pic__item set-bg" data-setbg="assets/img/rooms/details/family4.jpg"></div>
                        <div class="room__pic__item set-bg" data-setbg="assets/img/rooms/details/family5.jpg"></div>
                        <div class="room__pic__item set-bg" data-setbg="assets/img/rooms/details/family.jfif"></div>
                    </div>
                </div>
                <?php
         include "../config.php";
         $data = mysqli_query($koneksi,"select * from tipekamar where id_kamar=4");
       
       // $row = mysqli_fetch_array($data);
       while($row=mysqli_fetch_array($data)){
       //    echo $row['no']; die();
       //   ?>
                <div class="col-lg-6 p-0 order-lg-8 order-md-8 col-md-6">
                    <div class="room__text right__text">
                        <h3><?php echo $row['tipe_kamar']?></h3>
                        <h2><sup>IDR</sup>⠀<?php echo $row['harga']?><span>/day</span></h2>
                        <ul>
                            <li><span>Size</span> : <?php echo $row['size']?> sqm</li>
                            <li><span>Capacity</span> : Max persion <?php echo $row['kapasitas']?></li>
                            <li class="overflowtest"><span>Facility</span> : <?php echo $row['fasilitas']?></li>
                            <li><span>View</span> : <?php echo $row['view']?></li>
                        </ul>
                        <a href="family.php">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?> <?php } ?> <?php } ?> <?php } ?>
    <!-- Rooms Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="assets/img/footer-bg.jpg">
            <div class="container">
                <div class="footer__content">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer__about">
                                <div class="footer__logo">
                                    <a href="mainpage.php"><img src="assets/img/image/ASRT5941.PNG" style="margin-left:85px; margin-right:-75px; width: 150px; height: auto;"  alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 offset-lg-1 col-md-5 offset-md-1 col-sm-6">
                            <div class="footer__widget">
                                <h4>Quick Link</h4>
                                <ul>
                                    <li><a href="mainpage.php">Home</a></li>
                                    <li><a href="rooms.php">Rooms</a></li>
                                    <li><a href="facilities.php">Facilities</a></li>
                                </ul>
                                <ul>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="rooms.php">Booking</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer__about">
                                <h4>(+62) 838-2941-0684</h4>
                                <ul>
                                    <li>St. Ir H Juanda 390, Bandung</li>
                                    <li>sunniehotel@gmail.com</li>
                                </ul>
                                <div class="footer__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__copyright">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <div class="footer__copyright__text">
                                <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Sunnie's Team <i class="fa fa-heart" aria-hidden="true"></i></p>
                            </div>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <ul class="footer__copyright__links">
                                <li><a href="#">Terms Of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->
    
        <!-- Js Plugins -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/jquery.slicknav.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/main.js"></script>
        
    </body>
    </html>