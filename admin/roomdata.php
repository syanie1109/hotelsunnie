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
                margin: 20px auto 0px auto;
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
            height: 75px;
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
            height: 1000px;
            margin: 30px auto 5px auto;
            border: none;
            }
            h2 {
                margin-bottom: 6%;
            }
    </style>
</head>
</head>

<body>
<?php
    session_start();
    if($_SESSION['status']!="signin"){
        header("location:index.php?pesan=belum_login");
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
                <div class="canvas__open">
                    <span class="fa fa-bars"></span>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

<!-- ADD TABLE SECTION BEGIN-->
<div class="bigbox">
        <table celpadding="10px">
            <thead>
                    <th colspan="3">
                       
                <h5 class="card-header" style="font-size: 70px; background: transparent; margin: 10px auto 10px auto; color: darkgoldenrod;">Room Data</h5>
                    </th>
            </thead>
            <thead>
                <th colspan="3">
                    <h2>This form is intented to add room data.</h2>
                </th>
            </thead>
            <tr>
                <td colspan="3" width="70%">
                    <input type="hidden" name="id_kamar" value="<?php echo $id_kamar;?>">
                </td>
            </tr>
            <form method="post" action="aksiaddroom.php">
        <tr>
            <td width="10%">ID Room</td>
            <td width="2%">:</td>
            <td width="50%">
                <input type="text" name="id_kamar" readonly>
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
                <input type="text" name="tipe_kamar" required/>
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
            <input type="file" name="photo" class="form-control" id="" style="border-radius: 30px;"  required/>
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
                <input type="number" min="1" name="kapasitas" required/>
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
                <input type="number" name="stok" required/>
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
                <input type="number" name="size" required/>
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
                <input type="text" name="view" required/>
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
                <textarea name="deskripsi" required></textarea>
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
                <textarea name="fasilitas"required></textarea>
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
                <input type="number" name="harga" required/>
            </td>
        </tr>
        <thead>
            <th colspan="3">
                <center><input type="submit" value="ADD"></center>
            </th>
        </thead>
    </form>
        </table>
    </div>
    <!-- ADD TABLE SECTION END-->

</br>
<div class="card">
                <div class="table-responsive text-nowrap">
                  <table class="table" style="height: auto;">
                    <thead style="height: 55px; background: black;">
                      <tr>
                        <th style="color: darkgoldenrod;"><center>ID Room</center></th>
                        <th style="color: darkgoldenrod;"><center>Room Type</center></th>
                        <th style="color: darkgoldenrod;"><center>Photo</center></th>
                        <th style="color: darkgoldenrod;"><center>View</center></th>
                        <th style="color: darkgoldenrod;"><center>Capacity</center></th>
                        <th style="color: darkgoldenrod;"><center>size</center></th>
                        <th style="color: darkgoldenrod;"><center>Stock</center></th>
                        <th style="color: darkgoldenrod;"><center>Describe</center></th>
                        <th style="color: darkgoldenrod;"><center>Facility</center></th>
                        <th style="color: darkgoldenrod;"><center>Price</center></th>
                        <th style="color: darkgoldenrod;"><center>Actions</center></th>
                      </tr>
                    </thead>
                    <?php
                  include '../config.php';
                  $data = mysqli_query($koneksi, "SELECT * FROM tipekamar");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                  <tr>
                    <tbody height="auto" class="table-border-bottom-0">
				            <td><center><?php echo $d['id_kamar']; ?></td>
				            <td><?php echo $d['tipe_kamar']; ?></td>
				            <td><center><?php echo $d['photo']; ?></td>
				            <td><?php echo $d['view']; ?></td>
				            <td><center><?php echo $d['kapasitas']; ?> people</td>
				            <td><center><?php echo $d['size']; ?> sqm</td>
				            <td><center><?php echo $d['stok']; ?></td>
				            <td><?php echo $d['deskripsi']; ?></td>
				            <td><?php echo $d['fasilitas']; ?></td>
				            <td><?php echo $d['harga']; ?></td>
                    <td>
                          <div class="dropdown"><center>
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="editroomdata.php?id_kamar=<?php echo $d['id_kamar'];?>"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="deleteroomdata.php?id_kamar=<?php echo $d['id_kamar'];?>" onclick="return confirm('Delete this data?')"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                  </tr>
    <?php } ?>

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Bootstrap Table with Header Dark -->

        <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="assets/img/footer-bg.jpg" style="margin-top: 1%;">
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
    
    <!-- build:js vendor/js/core.js -->
    <script src="vendor/libs/jquery/jquery.js"></script>
    <script src="vendor/libs/popper/popper.js"></script>
    <script src="vendor/js/bootstrap.js"></script>
    <script src="vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <!-- Js Plugins -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/jquery.slicknav.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/main.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script
    </body>
    
    </html>