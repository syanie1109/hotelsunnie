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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" />
    <link rel="stylesheet" href="vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="css/demo.css" />
    <link rel="stylesheet" href="vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <script src="vendor/js/helpers.js"></script>
    <script src="js/config.js"></script>
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
                                    <li><a href="./index.php">Home</a></li>
                                    <li class="active"><a href="bookdata.php">Book Data</a></li>
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

    <div class="card">
    <h5 class="card-header" style="font-size: 70px; background: transparent; margin: 10px auto 10px auto; color: darkgoldenrod;">Book Data</h5>

    <!-- Icon Dropdown -->
    <div class="col-lg-3 col-sm-6 col-12" style="margin-top: -100px; margin-left: 40px;">
                      <small class="text-light fw-semibold">Search by</small>
                      <div class="demo-inline-spacing">
                        <div class="btn-group">
                          <button
                            type="button"
                            class="btn btn-icon dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            style="
                            margin-top: -15px;
                            margin-bottom: 75px;
                            "
                          >
                          <?php
              include '../config.php';
              ?>
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end">
                              <form method="get">
                            <li><a class="dropdown-item" name="check_in">Checkin Date</a></li>
                            <div class="col-lg-3 col-sm-6 col-12"><input type="date"><input type="button" value="Search" style="margin-bottom: 10px;"></div>
                            </form>
                            <li>
                              <hr class="dropdown-divider" />
                            </li>
                            <form method="get">
                            <li><a class="dropdown-item" name="username">Visitor's Name</a></li>
                            <div class="col-lg-3 col-sm-6 col-12"><input type="text"><input type="button" value="Search" style="margin-bottom: 15px;"></div>
                            </form>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!--/ Icon Dropdown -->

    <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead><form method="get" action="">
                      <tr>
                        <th>Reservation Code</th>
                        <th>ID Tamu</th>
                        <th>ID Kamar</th>
                        <th>Username</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Jumlah Kamar</th>
                        <th>Jumlah Hari</th>
                        <th>Tanggal Pesan</th>
                        <th>Total</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr class="table-default">
                      <?php
                  
                  if(isset($_GET['check_in'])){
                    $tgl=$_GET['check_in'];
                    $sql=mysqli_query($koneksi, "SELECT * FROM pesanan JOIN tamu ON pesanan.id_tamu=tamu.id_tamu where check_in='$tgl'");
                  }elseif(isset($_GET['username'])){
                    $alpa=$_GET['username'];
                    $sql=mysqli_query($koneksi,"SELECT * FROM pesanan JOIN tamu ON pesanan.id_tamu=tamu.id_tamu WHERE username LIKE '$alpa%'");

                  }else{
                    $sql = mysqli_query($koneksi, "SELECT*FROM pesanan JOIN tamu ON pesanan.id_tamu=tamu.id_tamu");
                  }
                  while ($data=mysqli_fetch_array($sql)) {
                    # code...
                
                    ?>
                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong><?php echo $data['kd_pesanan']; ?></strong></td>
                        <td><?php echo $data['id_tamu']; ?></td>
                        <td><?php echo $data['id_kamar']; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['check_in']; ?></td>
                        <td><?php echo $data['check_out']; ?></td>
                        <td><?php echo $data['jmlh_kamar']; ?></td>
                        <td><?php echo $data['jmlh_hari']; ?></td>
                        <td><?php echo $data['tgl_pesan']; ?></td>
                        <td><?php echo $data['jmlh_bayar']; ?></td>
                        <td><span class="badge bg-label-success me-1"><?php echo $data['status']; ?></span></td>
                      </tr>
                  <?php 
                  }
                  ?>
                    </tbody>
                    </form>
                  </table>
                </div>
              </div>
              <!--/ Contextual Classes -->
    </br>
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
                                    <li><a href="bookdata.php">Book Data</a></li>
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