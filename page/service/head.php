<?php 
session_start(); 

// print_r($_SESSION)
if(!isset($_SESSION['Name'])){
    echo "<script>";
        echo "alert('Please Login !');";
        echo "window.location = '../../index.php'; ";
    echo "</script>";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        OPRS SYSTEM
    </title>
    <!-- tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- bootstrap 3.3.4-->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font awesome icons-->
    <link href="../../bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- ionicons-->
    <link href="../../bootstrap/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!--Theme style-->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!--Theme skin -->
    <!-- <link href="../../dist/css/skins/skin-red.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="../../dist/css/skin-red.css" rel="stylesheet" type="text/css" />
    <!--Theme skin -->
    <link href="../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!--My Custom-->
    <link href="../../dist/css/mycustom.css" rel="stylesheet" type="text/css" />

    <!-- Favicons -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="../../assets/images/favicons/apple-touch-icon.png"> -->
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="../../assets/images/favicons/favicon-32x32.png"> -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicons/favicon-16x16.png"> -->
    <!-- <link rel="manifest" href="../../assets/images/favicons/site.webmanifest"> -->
    <!-- <link rel="mask-icon" href="../../assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5"> -->
    <!-- <link rel="shortcut icon" href="../../assets/images/favicons/favicon.ico"> -->
    <link rel="shortcut icon" href="../../assets/LOGO KMUTNB .png">
    <!-- <meta name="msapplication-TileColor" content="#da532c"> -->
    <!-- <meta name="msapplication-config" content="../../assets/images/favicons/browserconfig.xml"> -->
    <!-- <meta name="theme-color" content="#ffffff"> -->
    
    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript">
    </script>
    <script src="../../plugins/datatables/jquery.dataTables.min.js" type="text/javascript">
    </script>
    <script src="../../plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript">
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript">
    </script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript">
    </script>
    <!-- ckeditor-->
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <style type="text/css">
        .fr {
            color: red;
        }
    </style> -->

</head>