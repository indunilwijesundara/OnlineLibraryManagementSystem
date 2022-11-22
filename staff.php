<?php
session_start();
error_reporting(0);
include('includes/config.php');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | </title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>
    <!------MENU SECTION START-->
    <?php include('includes/header.php');?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">

                </div>
            </div>

        </div>

        <h3 class="header-line">staff</h3>
        <hr>

        <div class="staff row">


            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-success back-widget-set text-center">
                    <img style="width:200px;height:200px;" src="assets/img/user2.png">

                    <h1>Member 1</h1>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-success back-widget-set text-center">
                    <img style="width:200px;height:200px;" src="assets/img/user3.png">
                    <h5>Member 1</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-success back-widget-set text-center">
                    <img style="width:200px;height:200px;" src="assets/img/user4.png">
                    <h1>Member 1</h1>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-success back-widget-set text-center">
                    <img style="width:200px;height:200px;" src="assets/img/user5.png">

                    <h1>Member 1</h1>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-success back-widget-set text-center">
                    <img style="width:200px;height:200px;" src="assets/img/user6.png">

                    <h1>Member 1</h1>
                </div>
            </div>

        </div>



        <!-- CONTENT-WRAPPER SECTION END-->
        <?php include('includes/footer.php');?>
        <!-- FOOTER SECTION END-->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS  -->
        <script src="assets/js/bootstrap.js"></script>
        <!-- CUSTOM SCRIPTS  -->
        <script src="assets/js/custom.js"></script>


</body>

</html>