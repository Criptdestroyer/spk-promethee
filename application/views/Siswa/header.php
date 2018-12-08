<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $tittle;?></title>

    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url();?>asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url();?>asset/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url();?>asset/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url();?>asset/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url();?>asset/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <link href="<?php echo base_url();?>asset/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url();?>asset/css/themes/all-themes.css" rel="stylesheet" />

    <script src="<?php echo base_url();?>asset/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>asset/plugins/jquery/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript">
      function confirmSubmit(){
        var agree=confirm("Apakah anda yakin ingin melanjutkan aksi ini?");
        if (agree)
          return true ;
        else
          return false ;
      }
    </script>
</head>

<body class="theme-indigo">
  
    <!-- Page Loader -->

    
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
          <div class="navbar-header">
              
              <a href="javascript:void(0);" class="bars"></a>
              <a class="navbar-brand" href="<?php echo base_url(); ?>">SPK - Guru Berprestasi</a>
          </div>
        </div>
    </nav>