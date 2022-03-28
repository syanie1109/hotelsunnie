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
        table {
                width: 100%;
                height: 90%;
                margin: 20px auto 20px auto;
                padding: 10px;
            }
            input[type=text],
            input[type=number],
            input[type=file],
            select {
            width: 100%;
            height: 40px;
            color: black;
            padding: 12px 20px;
            margin: 5px auto 5px auto;
            display: inline-block;
            border: 1px solid black;
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
            margin: 3% auto 3% auto;
            border: none;
            border-radius: 40px;
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
            border: 1px solid black;
            border-radius: 30px;
            box-sizing: border-box;
            background-color: transparent;
            font-family: serif;
            }
            .bigbox {
            width: 75%;
            height: 1100px;
            margin: 30px auto 60px auto;
            border: none;
            }
            h2 {
                margin-bottom: 6%;
            }
    </style>
</head>

<body>

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
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header" style="margin-bottom: 5%;">
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
                                    <li><a href="logout.php">Logout</a></li>
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
                            <a href="./index.php"><img src="assets/img/image/ASRT5941.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="header__nav">
                            <nav class="header__menu">
                                <ul class="menu__class">
                                    <li><a href="mainpage.php">Home</a></li>
                                    <li class="active"><a href="roomdata.php">Room Data</a></li>
                                    <li><a href="facilitydata.php">Facility Data</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

<!-- EDIT TABLE SECTION BEGIN-->
<div class="bigbox">
    <table celpadding="10px">
        <thead>
                <th colspan="3">
                    <h1>Edit Rooms</h1>
                </th>
        </thead>
        <thead>
            <th colspan="3">
                <h2>This form is intented to edit room data.</h2>
            </th>
        </thead>
            <?php
         include '../config.php';
        $id_kamar=$_GET['id_kamar'];
         $data = mysqli_query($koneksi, "SELECT * FROM tipekamar WHERE id_kamar='$id_kamar'");
         while($d = mysqli_fetch_array($data)){
           ?>
        <form method="post" action="aksieditroom.php">
        <tr>
            <td width="10%">ID Room</td>
            <td width="2%">:</td>
            <td width="50%">
                <input type="text" name="id_kamar" value="<?php echo $d['id_kamar']; ?>" readonly>
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
                <input type="text" name="tipe_kamar" value="<?php echo $d['tipe_kamar']; ?>">
            </td>
        </tr>
        <tr>
            <td>
                Photo
            </td>
            <td>
                :
            </td>
            <td>
            <input type="file" name="photo" value="<?php echo $d['photo']; ?>" class="form-control" id="" style="border-radius: 30px;" />
            </td>
        </tr>
        <tr>
            <td>
                Capacity
            </td>
            <td>
                :
            </td>
            <td>
                <input type="number" min="1" max="<?php echo $d['kapasitas'];?>" name="kapasitas" required>
            </td>
        </tr>
        <tr>
            <td>
                Stock
            </td>
            <td>
                :
            </td>
            <td>
                <input type="number" value="<?php echo $d['stok']; ?>" name="stok">
            </td>
        </tr>
        <tr>
            <td>
                Size
            </td>
            <td>
                :
            </td>
            <td>
                <input type="number" value="<?php echo $d['size'];?>" name="size" required>
            </td>
        </tr>
        <tr>
            <td>
                View
            </td>
            <td>
                :
            </td>
            <td>
                <input type="text" value="<?php echo $d['view'];?>" name="view" required>
            </td>
        </tr>
        <tr>
            <td>
                Describe
            </td>
            <td>
                :
            </td>
            <td>
                <textarea name="deskripsi" required><?php echo $d['deskripsi']; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>
                Facility
            </td>
            <td>
                :
            </td>
            <td>
                <textarea name="fasilitas" required><?php echo $d['fasilitas'];?></textarea>
            </td>
        </tr>
        <tr>
            <td>
                Price
            </td>
            <td>
                :
            </td>
            <td>
                <input type="number" name="harga" value="<?php echo $d['harga']; ?>" required>
            </td>
        </tr>
        <thead>
            <th colspan="3">
                <center><input type="submit" value="SAVE"></center>
            </th>
        </thead>
    </form>
    <?php } ?>
    </table>
</div>

<!-- EDIT TABLE SECTION END-->

    </br style="margin-top: 10%;">
        <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="assets/img/footer-bg.jpg" style="margin-top: 5%;">
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
                                    <li><a href="roomdata.php">Rooms</a></li>
                                    <li><a href="facility.php">Facilities</a></li>
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