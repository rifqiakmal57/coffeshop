﻿<?php
//koneksi database
$koneksi = new mysqli("localhost","root","","loginlogout");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li><a href="index.php"><i class="fa fa-dashboard fa-3x"></i> LOGIN & REGISTRASI</a></li>
                    <li><a href="index.php?halaman=pemesanan"><i class="fa fa-dashboard fa-3x"></i> PEMESANAN</a></li>
                    <li><a href="index.php?halaman=pembayaran"><i class="fa fa-dashboard fa-3x"></i> PEMBAYARAN</a></li>
                    <li><a href="index.php?halaman=pengiriman"><i class="fa fa-dashboard fa-3x"></i> PENGIRIMAN</a></li>
                    <li><a href="index.php?halaman=updatestok"><i class="fa fa-dashboard fa-3x"></i> UPDATE STOK</a></li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php

                    if (isset($_GET['halaman']))
                    {
                        if ($_GET['halaman']=='home')
                        {
                            include 'home.php';
                        }
                        if ($_GET['halaman']=='pemesanan')
                        {
                            include 'pesan.php';
                        }
                        elseif ($_GET['halaman']=='pembayaran')
                        {    
                            include 'bayar.php';
                        }
                        elseif ($_GET['halaman']=='pengiriman')
                         {   
                            include 'kirim.php';
                         }
                        elseif ($_GET['halaman']=='updatestok')
                          {  
                            include 'update.php';
                          }
                          elseif ($_GET['halaman']=='detail') 
                          {
                              include 'detail.php';
                          }
                          elseif ($_GET['halaman']=="tambahpesanan")
                          {
                            include 'tambahpesanan.php';
                          }
                          elseif ($_GET['halaman']=="tambahpembayaran")
                          {
                            include 'tambahpembayaran.php';
                          }
                           elseif ($_GET['halaman']=="hapusproduk")
                          {
                            include 'hapusproduk.php';
                          }
                          elseif ($_GET['halaman']=="edituser")
                          {
                            include 'edituser.php';
                          }
                           elseif ($_GET['halaman']=='detailkirim') 
                          {
                              include 'detailkirim.php';
                          }
                          elseif ($_GET['halaman']=='tambahpengiriman') 
                          {
                              include 'tambahpengiriman.php';
                          }
                          elseif ($_GET['halaman']=="hapusbayar")
                          {
                            include 'hapusbayar.php';
                          }
                          elseif ($_GET['halaman']=="hapuskirim")
                          {
                            include 'hapuskirim.php';
                          }
                    }
                    else
                    {
                        include 'home.php';
                    }
                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
