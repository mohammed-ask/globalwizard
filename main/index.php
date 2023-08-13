<?php
include './main/function.php';
include './main/conn.php';
$rowinfo = $obj->selectextrawhereupdate("personal_detail", "phone,email,address_1,address_2,city,pincode,state", "status=11")->fetch_assoc();
if ($mainpagemaintanance) { ?>
    <!doctype html>
    <title>Site Maintenance</title>
    <style>
        body {
            text-align: center;
            padding: 150px;
        }

        h1 {
            font-size: 50px;
        }

        body {
            font: 20px Helvetica, sans-serif;
            color: #333;
        }

        article {
            display: block;
            text-align: left;
            width: 650px;
            margin: 0 auto;
        }

        a {
            color: #dc8100;
            text-decoration: none;
        }

        a:hover {
            color: #333;
            text-decoration: none;
        }
    </style>

    <article>
        <h1>We&rsquo;ll be back soon!</h1>
        <div>
            <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href="mailto:#">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
            <p>&mdash; The Team</p>
        </div>
    </article>
<?php } else { ?>
    <style>
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8) url(main/images/loader.gif) no-repeat center center;
            z-index: 10000;
        }
    </style>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="preconnect" href="https://fonts.gstatic.com">

        <title>Investment Planning and Management Made Simple with PMS Equity</title>

        <!-- Bootstrap core CSS -->
        <link href="main/dist/indexcss/bootstrap.min.css" rel="stylesheet">

        <!-- fontawesome icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="main/dist/indexcss/fontawesome.css">
        <link rel="stylesheet" href="main/dist/indexcss/home-page.css">

        <!-- Veriables css -->
        <link href="main/dist/indexcss/variables.css" rel="stylesheet">

        <link rel="stylesheet" href="dist/css/bvalidator.css">
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
        <!-- Default theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />

        <!-- ----------------favicoin-------------------->
        <link rel="icon" href="main/images/logo/favicon.svg" type="image/svg+xml">



    </head>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>

    <body>

        <!-- ***** Preloader Start ***** -->

        <div class="loading-container">
            <div class="loading">
                <div class="loading-rect"></div>
                <div class="loading-rect"></div>
                <div class="loading-rect"></div>
                <div class="loading-rect"></div>
            </div>
        </div>
        <button onclick="event.preventDefault(); window.location.href='login'" class="btn btn-primary">Login</button>
        <!-- ***** Preloader End ***** -->








        <!-- Scripts -->
        <script src="main/dist/indexjs/jquery.min.js"></script>
        <script src="main/dist/indexjs/bootstrap.bundle.min.js"></script>
        <script src="main/dist/indexjs/owl-carousel.js"></script>
        <script src="main/dist/indexjs/animation.js"></script>
        <script src="main/dist/indexjs/imagesloaded.js"></script>
        <script src="main/dist/indexjs/templatemo-custom.js"></script>
        <script src="main/dist/js/customfunction.js"></script>
        <script src="main/dist/js/jquery.bvalidator-yc.js"></script>
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    </body>

    </html>
<?php } ?>