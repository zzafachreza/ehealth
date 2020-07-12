<!DOCTYPE html>
<html>
<head>
	<base href="">
	<meta charset="utf-8" />
	<title><?php echo $title ?></title>
	<meta name="description" content="Fachreza Maulana Framework">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- area css -->
    <link href="<?php echo site_url() ?>assets/css/pagePreloaders.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/selectize.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/app.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/bootstrap-datepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url() ?>assets/css/chart.css" rel="stylesheet" type="text/css" />  
    <link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>assets/css/app.css">

      <script type="text/javascript" src="<?php echo site_url() ?>assets/js/jquery.min.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/dataTables.min.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/dataTables.bootstrap4.min.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/notify.js"></script>



  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/pagePreloaders.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/popper.min.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/selectize.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/bootstrap-datepicker.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/moment.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/chart.js"></script>

  <script type="text/javascript" src="<?php echo site_url() ?>assets/js/app.js"></script>
    

    <link rel="manifest" href="<?php echo site_url() ?>manifest.json">

    <!-- area icon -->

  <link rel="shortcut icon" href="<?php echo site_url() ?>assets/images/logo/logo.png" />
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
  	<img src="<?php echo site_url() ?>assets/images/logo/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
         <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url() ?>">Home <span class="sr-only">(current)</span></a>
      </li>
    <?php 

      if ($_SESSION['level']=='Admin') {
        # code...

        ?>

         <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('pasien') ?>">Pasien</a>
      </li>
       
    <?php   }

    ?>
     
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('daftar') ?>">Daftar</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('bayar') ?>">Pembayaran</a>
      </li>

  
    </ul>
  </div>
</nav>

