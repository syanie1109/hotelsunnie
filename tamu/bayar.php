<!DOCTYPE html>
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
    <link rel="stylesheet" href="vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="css/demo.css" />
    <link rel="stylesheet" href="vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <script src="vendor/js/helpers.js"></script>
    <script src="js/config.js"></script>

    <style>
        input[type=text],
        input[type=tel],
        input[type=date],
        input[type=select],
        input[type=number],
        select {
            width: 100%;
            height: 40px;
            color: black;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid white ;
            border-radius: 10px;
            box-sizing: border-box;
            background-color: transparent;
            font-family: serif;
            box-shadow: 0px 0px 5px  black;
        }
        input[type=file] {
            padding: 2% 5% 1%;
        }
        textarea {
            resize: none;
            width: 100%;
            height: 125px;
            color: black;
            padding: 10px 15px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid white ;
            border-radius: 10px;
            box-sizing: border-box;
            background-color: transparent;
            font-family: serif;
            box-shadow: 0px 0px 5px  black;
        }
        input[type=submit] {
            width: 100%;
            height: 40px;
            font-size: 15px;
            font-family: serif;
            background-color: black;
            color: white;
            padding: 10px auto;
            margin: 27px auto 0px auto;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            box-shadow: 0px 0px 5px  black;
        }
        .form-control {
            size: none;
            width: 100%;
            height: 40px;
            color: black;
            margin: 8px 0;
            padding: 1% 1% 0% 1%;
            display: inline-block;
            border: 1px solid white ;
            border-radius: 10px;
            box-sizing: border-box;
            background-color: transparent;
            font-family: serif;
            box-shadow: 0px 0px 5px  black;
        }
        .form-control : focus {
            color: gold; 
        }
        label 
        {
            font-size: 20px;
            font-family: serif;
            margin: 5px 5px 0px;
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
  include "../config.php";
 
$username = $_SESSION['username'];
$kd_pesanan = $_GET['kd_pesanan'];
$data = mysqli_query($koneksi,"SELECT * FROM pesanan JOIN tamu ON pesanan.id_tamu=tamu.id_tamu JOIN tipekamar ON pesanan.id_kamar=tipekamar.id_kamar WHERE kd_pesanan='$kd_pesanan'");
	$row = mysqli_fetch_array($data);


    	// mengambil data tamu dengan kode paling besar
	$query = mysqli_query($koneksi, "SELECT max(kd_bayar) as kd_bayar FROM bayar");
	$data_bayar = mysqli_fetch_array($query);
	$kd_bayar = $data_bayar['kd_bayar'];
 
	$urutan = (int) substr($kd_bayar, 3, 3);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "BYR";
	$kd_bayar = $huruf . sprintf("%03s", $urutan);
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

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option set-bg" data-setbg="assets/img/bg/bg6.PNG">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h1>Transaksi Form</h1>
                        <div class="breadcrumb__links">
                            <a href="mainpage.php">Home</a>
                            <span>Transaksi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Form Begin -->
   <table width="90%" height="auto" style="background-color: transparent; border : 1px solid black; margin: 5% auto 5% auto;">
    <form method="POST" action="aksibayar.php">

       <tr>
            <input type="hidden" name="id_tamu" value="<?php echo $row['id_tamu'];?>">
            <input type="hidden" name="tgl_bayar" value="<?php echo date("d-m-y");?>">

           <td width="30%" rowspan="5" style=" padding: 0% 1% 0% 1%;">
                <div class="kotakinfo">
                    <center><h2>Rekening Number</h2></center></br>
                    <center><h3>BCA</h3></center><h2>689274711092004</h2></br>
                    <center><h3>BRI</h3></center><h2>62472431323344</h2></br>
                    <center><h3>MANDIRI</h3></center><h2>240934432443</h2>
                </div>
           </td>
           <td width="60%" colspan="2" style=" padding: 3% 1% 0% 1%;">
                <label>Book Code</label></br>
                <input type="text" name="kd_pesanan" id="" value="<?php echo $row['kd_pesanan'];?>" readonly/>
            </td>
        </tr>
               <tr><td colspan="2" style=" padding: 0% 1% 0% 1%;">
                   <label>Transaction Code</label></br>
                   <input type="text" name="kd_bayar" id="" value="<?php echo $kamar['kd_bayar'];?>" readonly></td>
                </tr>
                <tr>
                    <td style="padding: 0% 1% 0% 1%;"><label>On Behalf</label></br>
                    <input type="text" name="nama_akun_rek" value="" required/></td>
                    <td style="padding: 0% 1% 0% 1%;"><label>Account Number</label></br>
                    <input type="number" name="no_rek" value="" required/></td>
                </tr>
                <tr><td style=" padding: 1% 1% 3% 1%;">
                   <label>Proof Payment</label></br>
                   <div class="input-group"><input type="file"  class="form-control"/></div></td>
                   <td style=" padding: 1% 1% 2% 1%;">
                    <center><input type="submit" value="Send"></center></td></td>
                </tr>
   </table>
    <!-- Form End -->

    </br>
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
        <script src="vendor/libs/jquery/jquery.js"></script>
        <script src="vendor/libs/popper/popper.js"></script>
        <script src="vendor/js/bootstrap.js"></script>
        <script src="vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/js/menu.js"></script>
        <script src="js/main.js"></script>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/jquery.slicknav.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
    
    </html>