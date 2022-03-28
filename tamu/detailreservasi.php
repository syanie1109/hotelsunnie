<DOCTYPE html>
    <html lang="zxx">

        <head>
            <meta charset="UTF-8">
            <meta name="description" content="sunnie hotel">
            <meta name="keywords" content="Sunnie, hotel, bandung, html">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Sunnie Hotel</title>
        
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
        table {
                width: 100%;
                height: 90%;
                margin: 20px auto 20px auto;
                padding: 12px 20px 12px;
                font-family: serif;
                font-size: 20px;
            }
            input[type=text],
            input[type=number],
            input[type=date],
            input[type=email],
            select {
            width: 100%;
            height: 40px;
            color: black;
            padding: 12px 20px;
            margin: 5px auto 5px auto;
            display: inline-block;
            border: none;
            border-radius: 50px;
            box-sizing: border-box;
            background-color: transparent;
            font-family: serif;
            }
            input[type=submit] {
            width: 20%;
            height: 40px;
            font-size: 15px;
            font-family: serif;
            background-color:darkgoldenrod;
            color: white;
            padding: 2% auto 2% auto;
            margin: 1% auto 6% auto;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            }
            input [type=submit] :hover {
            background-color: #45a049;
            }
            textarea {
            width: 100%;
            height: 175px;
            resize: none;
            color: black;
            padding: 20px 20px 30px 20px;
            margin: 5px auto 12px;
            display: inline-block;
            border: none;
            border-radius: 30px;
            box-sizing: border-box;
            background-color: transparent;
            font-family: serif;
            }
            .bigbox {
            width: 75%;
            height: 800px;
            padding: 3% 3% 0% 8%;
            margin: 30px auto 60px auto;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 5px  black;
            }
            h2 {
                margin-bottom: 6%;
            }
    </style>
        </head>
        
        <body>
        
        <?php
            session_start();
            if($_SESSION['status']!="signin"){
                header("location:../index.php?pesan=belum_login");
            }
            ?>
        
        <?php
          include '../config.php';
         
        $username = $_SESSION['username'];
        $kd_pesanan= $_GET['kd_pesanan'];
        //mengambil data kamar
        $data = mysqli_query($koneksi,"SELECT * FROM pesanan JOIN tamu ON pesanan.id_tamu=tamu.id_tamu JOIN tipekamar ON psanan.id_kamar=tipekamar.id_kamar WHERE kd_pesanan='$kd_pesanan'");
            $row = mysqli_fetch_array($data);
            ?>
        
                <!-- Page Preloder -->
            <div id="preloder">
                <div class="loader"></div>
            </div>
        
            <!-- Offcanvas Menu Begin -->
            <div class="offcanvas-menu-overlay"></div>
            <div class="offcanvas-menu-wrapper">
                <div class="offcanvas__logo">
                    <a href="mainpage.php"><img src="assets/img/image/ASRT5941.PNG" alt=""></a>
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
                                            <li><a href="mainpage.php">Home</a></li>
                                            <li><a href="rooms.php">Rooms</a></li>
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

<!-- EDIT TABLE SECTION BEGIN-->
<h1 style="margin: 5% 4% 0%; color: darkgoldenrod;">DETAILS RESERVATION</h1>
<h2 style="margin: 0% 5% 5%;" >Confirm your reservation.</h2>
<div class="bigbox">
    <table celpadding="10px">
        <thead>
                <th width="35%">
                    <h3>Reservation Number</h3>
                </th>
                <th width="2%">
                    :
                </th>
                <th width="35%">
                    <input type="text" value="<?php echo $row['kd_pesanan'];?>" readonly>
                </th>
        </thead>
        <thead>
            <th width="30%">
                <h3>Reservation Date</h3>
            </th>
            <th width="2%">
                :
            </th>
            <th width="40%">
                <input type="date" value="<?php echo $row['tgl_pesan'];?>" readonly>
            </th>
    </thead>
        <form method="post" action="aksieditroom.php">
        <tr>
            <td>Visitor's Name</td>
            <td>:</td>
            <td>
                <input type="text" value="<?php echo $d['id_tamu']; ?>" readonly>
            </td>
        </tr>
        <tr>
            <td>
                Email
            </td>
            <td>
                :
            </td>
            <td>
                <input type="email" value="<?php echo $row['email'];?>" readonly>
            </td>
        </tr>
        <tr>
            <td>
                Check-in Time
            </td>
            <td>
                :
            </td>
            <td>
                <input type="text" value="<?php echo $row['check_in'];?>" readonly><span>/ Pukul : 22.00 WIB</span>
            </td>
        </tr>
        <tr>
            <td>
                Check-out Time
            </td>
            <td>
                :
            </td>
            <td>
                <input type="text" value="<?php echo $row['check_out'];?>" readonly><span>/ Pukul : 22.00 WIB</span>
            </td>
        </tr>
        <tr>
            <td>
                Length of Stay
            </td>
            <td>
                :
            </td>
            <td>
                <input type="number" value="<?php echo $row['jmlh_hari'];?>" readonly><span>/night</span>
            </td>
        </tr>
        <tr>
            <td>
                Room Type
            </td>
            <td>
                :
            </td>
            <td>
                <input type="text" value="<?php echo $row['tipe_kamar'];?>" readonly>
            </td>
        </tr>
        <tr>
            <td>
                Many Rooms
            </td>
            <td>
                :
            </td>
            <td>
                <input type="number" value="<?php echo $row['jmlh_kamar'];?>" readonly><span>room</span>
            </td>
        </tr>
        <tr>
            <td>
                Total Payment
            </td>
            <td>
                :
            </td>
            <td>
                <input type="text" value="<?php echo $row['total'];?>" readonly>
            </td>
        </tr>
    </form>
    <?php } ?>
    </table>
</div>
            <center><a href="cetak.php?kd_pesanan=<?=$row['kd_pesanan'];?>"><input type="submit" value="Reserve Now"></a></center>
<!-- EDIT TABLE SECTION END-->


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