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
                height: 750px;
                margin: 20px auto 20px auto;
                padding: 12px 20px 12px;
                font-family: serif;
                font-size: 15px;
            }
            td {
                padding: 10px 20px 5px 10px;
            }
            th {
                padding: 10px 20px 5px 10px;
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
            .bigbox {
            width: 875px;
            height: 1050px;
            padding: 1% 2% 1% 2%;
            margin: 10px auto 20px auto;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 5px  black;
            }
            h3 {
                margin-bottom: 3%;
                font-size: 25px;
            }h4 {
                margin-bottom: 3%;
                font-size: 20px;
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
        $data = mysqli_query($koneksi,"SELECT * FROM pesanan JOIN tamu ON pesanan.id_tamu=tamu.id_tamu JOIN tipekamar ON psanan.id_kamar=tipekamar.id_kamar WHERE kd_pesanan='$kd_pesanan'");
            $row = mysqli_fetch_array($data);
            ?>
        
                <!-- Page Preloder -->
            <div id="preloder">
                <div class="loader"></div>
            </div>

<!-- EDIT TABLE SECTION BEGIN-->
<center><div class="bigbox">
    <a href="mainpage.php"><img src="assets/img/image/ASRT5941.PNG" alt="" style="height: 100px; width: auto;">
        <center><h3 style="margin: 5% 4% 0%; color: darkgoldenrod;">DETAILS RESERVATION</h3></center>
<center><h4 style="margin: 0% 5% 5%;" >Print or Save Details Reservation For archieve?</h4></center>
    <table celpadding="10px">
        
        <thead>
                <th width="35%" style="font-size: 25px;">
                    <h5>Reservation Number</h5>
                </th>
                <th width="2%">
                    :
                </th>
                <th width="35%">
                    <?php echo $row['kd_pesanan'];?>
                </th>
        </thead>
        <thead>
            <th width="30%" style="font-size: 25px;">
                <h5>Reservation Date</h5>
            </th>
            <th width="2%">
                :
            </th>
            <th width="40%">
                <?php echo $row['tgl_pesan'];?>
            </th>
    </thead>
        <tr>
            <td style="font-size: 20px;"><b>Visitor's Name</b></td>
            <td>:</td>
            <td>
                <?php echo $d['id_tamu']; ?>
            </td>
        </tr>
        <tr>
            <td style="font-size: 20px;"><b>
                Email
            </b></td>
            <td>
                :
            </td>
            <td>
                <?php echo $row['email'];?>
            </td>
        </tr>
        <tr>
            <td style="font-size: 20px;"><b>
                Check-in Time
            </b></td>
            <td>
                :
            </td>
            <td>
                <?php echo $row['check_in'];?> <span>/ Pukul : 22.00 WIB</span>
            </td>
        </tr>
        <tr>
            <td style="font-size: 20px;"><b>
                Check-out Time
            </b></td>
            <td>
                :
            </td>
            <td>
                <?php echo $row['check_out'];?> <span>/ Pukul : 22.00 WIB</span>
            </td>
        </tr>
        <tr>
            <td style="font-size: 20px;"><b>
                Length of Stay
            </b></td>
            <td>
                :
            </td>
            <td>
                <?php echo $row['jmlh_hari'];?> <span>/night</span>
            </td>
        </tr>
        <tr>
            <td style="font-size: 20px;"><b>
                Room Type
            </b></td>
            <td>
                :
            </td>
            <td>
                <?php echo $row['tipe_kamar'];?>
            </td>
        </tr>
        <tr>
            <td style="font-size: 20px;"><b>
                Many Rooms
            </b></td>
            <td>
                :
            </td>
            <td>
                <?php echo $row['jmlh_kamar'];?> <span>room</span>
            </td>
        </tr>
        <tr>
            <td style="font-size: 20px;"><b>
                Total Payment
            </b></td>
            <td>
                :
            </td>
            <td>
                <?php echo $row['total'];?> IDR
            </td>
        </tr>
    </table>
</div></center>
<script>
  window.print();
</script>
        
<!-- EDIT TABLE SECTION END-->
<center><a href="mainpage.php"><input type="submit" value="DONE"></a></center>
    
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