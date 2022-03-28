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
  include '../config.php';
 
$username = $_SESSION['username'];
$id_kamar= $_GET['id_kamar'];

$data_kamar = mysqli_query($koneksi,"SELECT * FROM tipekamar WHERE id_kamar='$id_kamar'");
	$kamar = mysqli_fetch_array($data_kamar);

$data = mysqli_query($koneksi,"SELECT * FROM tamu WHERE username='$username'");
	$row = mysqli_fetch_array($data);

	$query = mysqli_query($koneksi, "SELECT max(kd_pesanan) as kd_pesanan FROM pesanan");
	$data = mysqli_fetch_array($query);
	$kd_pesanan = $data['kd_pesanan'];
 
	$urutan = (int) substr($kd_pesanan, 3, 3);
 
	$urutan++; 
	$huruf = "RSV";
	$kd_pesanan = $huruf . sprintf("%03s", $urutan);
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
    <div class="breadcrumb-option set-bg" data-setbg="assets/img/bg/bg6.PNG" style="fil">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h1>Reservation Form</h1>
                        <div class="breadcrumb__links">
                            <a href="mainpage.php">Home</a>
                            <span>Reservation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Form Begin -->
   <table width="90%" height="auto" style="background-color: transparent; border : 1; margin: 5% auto 5% auto;">
    <form method="POST" action="aksi_rsv.php" novalidate>

       <tr>
            <input type="hidden" name="kd_pesanan" value="<?php echo $kd_pesanan;?>">
            <input type="hidden" name="id_tamu" value="<?php echo $row['id_tamu'];?>">
            <input type="hidden" name="tgl_pesan" value="<?php echo date("d-m-y"); ?>">
            <input type="hidden" name="id_kamar" value="<?php echo $kamar['id_kamar'];?>">

           <td width="40%" rowspan="5" style=" padding: 0% 1% 0% 1%;">
                <label>Username</label></br>
                <input type="text" name="username" id="" value="<?php echo $row['username'];?>" readonly/></br>
                <label>Address</label></br>
                <textarea name="alamat" value="" readonly><?php echo $row['alamat']?></textarea></br>
                <label>Check-in</label></br>
                <input type="text" name="check_in" class="datepicker_pop check__in" id="" value="" required/></br>
                <label>Check-out</label></br>
                <input type="text" name="check_in" class="datepicker_pop check__in" id="" value="" required/>
           </td>
           <td width="50%" colspan="2" style=" padding: 0% 1% 0% 1%;">
                <label> Number Telephone</label></br>
                <input type="text" name="no_telp" id="" value="<?php echo $row['no_telp'];?>" readonly/>
            </td>
        </tr>
               <tr><td colspan="2" style=" padding: 0% 1% 0% 1%;">
                   <label>Room Type</label></br>
                   <input type="text" name="tipe_kamar" id="" value="<?php echo $kamar['tipe_kamar'];?>" readonly></td>
                </tr>



                <tr><td colspan="2" style=" padding: 0% 1% 0% 1%;">
                    <label for="username">Price</label></br>
                    <input type="text" id="harga" name="harga" onkeyup="total();" value="<?php echo $kamar['harga'];?>" readonly></td>
                </tr>
                <tr>
                    <td style="padding: 0% 1% 0% 1%;"><label for="kamar">Rooms</label></br>
                    <input type="number" id="jmlh_kamar" name="jmlh_kamar"  min=1 max="<?php echo $kamar['stok'];?>" onkeyup="total();" required></td>
                    <td style="padding: 0% 1% 0% 1%;"><labe for="username"l>Days</label></br>
                    <input type="text" id="jmlh_hari" name="jmlh_hari" onkeyup="total();" min=1 required></td>
                </tr>
                <tr>
                    <td width="20%" style=" padding: 0% 1% 0% 1%;">
                    <label for="zip">Total</label></br>
                    <input type="text" id="total" name="total" required/>
                    <td width="20%" style=" padding: 0% 1% 0% 1%;">
                    <center><input type="submit" value="Reserve Now"></center></td>
                </tr>
    </form>
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
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/jquery.slicknav.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/main.js"></script>
        
        <script>
function total() {
      var txtFirstNumberValue = document.getElementById('harga').value;
      var txtSecondNumberValue = document.getElementById('jmlh_hari').value;
      var txtThirdNumberValue = document.getElementById('jmlh_kamar').value;
      var total = (parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue)) * parseInt(txtThirdNumberValue);
      if (!isNaN(total)) {
         document.getElementById('total').value = total;
      }
}
</script>
    </body>
    
    </html>