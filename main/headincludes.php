 <title><?php
        if (isset($pagetitle) && (!empty($pagetitle))) {
          echo $pagetitle;
        } else {
          echo $defaultpagetitle;
        }
        ?></title>
 <!-- Shubham Template -->
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Global Wizard Pvt Ltd</title>
 <script defer="" data-api="/stats/api/event" data-domain="preview.tabler.io" src="assets/js/script.js.download"></script>

 <!-- <link rel="icon" href="#favicon.ico" type="image/x-icon">
 <link rel="shortcut icon" href="#favicon.ico" type="image/x-icon"> -->

 <!-- CSS files -->
 <link href="main/dist/usercss/global-wizard.min.css" rel="stylesheet">
 <link href="main/dist/usercss/global-wizard-flags.min.css" rel="stylesheet">
 <link href="main/dist/usercss/global-wizard-payments.min.css" rel="stylesheet">
 <link href="main/dist/usercss/global-wizard-vendors.min.css" rel="stylesheet">
 <link href="main/dist/usercss/demo.min.css" rel="stylesheet">

 <!-- App favicon -->
 <!-- <link rel="shortcut icon" href="main/images/logo/favicon.svg"> -->



 <!-- <link href="main/dist/usercss/selectr.min.css" rel="stylesheet" type="text/css"> -->

 <!-- App css -->
 <!-- <link href="main/dist/usercss/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
 <!-- <link href="main/dist/usercss/icons.min.css" rel="stylesheet" type="text/css"> -->
 <!-- <link href="main/dist/usercss/app.min.css" rel="stylesheet" type="text/css"> -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!-- <link href="main/dist/usercss/style.css" rel="stylesheet" type="text/css"> -->

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="main/plugins/fontawesome-free/css/all.min.css">
 <!-- Ionicons -->
 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 <!-- iCheck -->
 <link rel="stylesheet" href="main/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
 <!-- overlayScrollbars -->
 <link rel="stylesheet" href="main/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="main/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="main/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
 <link rel="stylesheet" href="main/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
 <link rel="stylesheet" href="main/plugins/jquery-ui/jquery-ui.css">
 <!-- Select2 -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
 <!-- Default theme -->
 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
 <link rel="stylesheet" href="main/plugins/select2/css/select2.min.css?ver=<?php echo time(); ?>">
 <link rel="stylesheet" href="main/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
 <link rel="stylesheet" href="main/dist/css/bvalidator.css">
 <link rel="stylesheet" href="main/dist/css/jquery-ui-timepicker-addon.css">
 <!-- summernote -->

 <!-- summernote -->
 <link rel="stylesheet" href="main/plugins/summernote/summernote-bs4.min.css">
 <style>
   @import url('https://rsms.me/inter/inter.css');

   :root {
     --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
   }

   body {
     font-feature-settings: "cv03", "cv04", "cv11";
   }
 </style>

 <?php
  if (isset($extracss)) {
    echo $extracss;
  } ?>