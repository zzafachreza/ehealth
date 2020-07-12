<!DOCTYPE html>
<html>
<head>
	<base href="">
	<meta charset="utf-8" />
	<title>Fachreza Maulana | Login</title>
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
    

    <link rel="manifest" href="<?php echo site_url() ?>manifest.json">

    <!-- area icon -->

  <link rel="shortcut icon" href="<?php echo site_url() ?>assets/images/logo/logo.png" />
</head>
<body style="background-image:url('<?php echo site_url() ?>assets/images/bg.jpg') ">

<div class="container">
        <div class="card col-sm-5" style="margin-top: 10%;opacity: 0.8">
      <div class="card-header   ">
        <center>
          <img src="<?php echo site_url() ?>assets/images/logo/logo.png" width="50">
        <h2>LOGIN</h2>
         <?php
                  if (isset($error)) {
                    # code...
                    echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
                  }
                ?>
        </center>
          </div>
          <div class="card-body">
              <form id="formData" method="POST" action="<?php echo site_url() ?>login/validasi">
              <div class="form-group">
                <label for="username">username</label>
                <input required="required" autofocus="autofocus" type="text" name="username" class="form-control" id="username" placeholder="masukan username">
                
               
           
                
              </div>

              <div class="form-group">
                <label for="password">password</label>
                <input required="required"  type="password" name="password" class="form-control" id="password" placeholder="masukan password">
              </div>

              <div class="form-group">
               <button class="btn btn-success" type="SUBMIT"><i class="flaticon2-cube-1"></i> LOGIN</button>
                              <button class="btn btn-primary" type="RESET"><i class="flaticon2-refresh"></i> RESET</button>
              </div>


            </form>
          </div>

          <div class="card-footer">
            2020 &copy; eHealth by Fachreza Maulana
          </div>

       
          
    </div>
</div>

</body>

    <!-- area javascript -->

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

</html>

<script type="text/javascript">
  




</script>