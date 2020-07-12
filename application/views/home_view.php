
<div class="jumbotron">
	  <h1 class="display-4">Selamat Datang..<?php echo $_SESSION['username'];?></h1>
	  <p class="lead">Ini adalah aplikasi eHealt</p>
	  <hr class="my-4">
	  <p>
	  	User tipe : <?php echo $_SESSION['level'];?>
	  </p>
	  <p class="lead">
	    <a class="btn btn-primary btn-lg" href="<?php echo site_url('login/logout') ?>" role="button">LOGOUT</a>
	  </p>
  </div>