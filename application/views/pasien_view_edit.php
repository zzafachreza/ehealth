<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url('pasien') ?>">pasien</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Edit</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  		
	  <form action="<?php echo site_url('pasien/update') ?>" method="POST" >

	<a href="<?php echo site_url('pasien') ?>" class="btn btn-secondary"><i class="flaticon2-left-arrow-1"></i> Kembali</a>

		<button class="btn btn-danger" type="RESET"><i class="flaticon2-refresh-button"></i> Reset</button>
  	<button class="btn btn-success" type="SUBMIT"><i class="flaticon2-files-and-folders"></i> Simpan</button>
	  </div>
	  	<div class="card-body">
	  		<form>
			  <div class="form-group">
			  		    <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $pasien['id'] ?>">
	
			    <label for="nama">nama</label>
			    <input value="<?php  echo $pasien['nama'] ?>" autofocus="autofocus" type="text" name="nama" class="form-control" id="nama" placeholder="masukan nama">
			  </div>
			  <div class="form-group">
			    <label for="ktp">ktp</label>
				    <input value="<?php  echo $pasien['ktp'] ?>" type="text" name="ktp" class="form-control" id="ktp" placeholder="masukan ktp">
			  </div>
			  <div class="form-group">
			    <label for="rekam_medis">rekam_medis</label>
				    <input value="<?php  echo $pasien['rekam_medis'] ?>" type="text" name="rekam_medis" class="form-control" id="rekam_medis" placeholder="masukan rekam medis">
			  </div>
			</form>
		  </div>
		  <div class="card-footer">

		  </div>
	  </form>
	</div>


</div>



