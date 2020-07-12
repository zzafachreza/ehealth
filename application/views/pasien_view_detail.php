<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url('pasien') ?>">pasien</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Detail</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  		
	
	<a href="<?php echo site_url('pasien') ?>" class="btn btn-secondary"><i class="flaticon2-left-arrow-1"></i> Kembali</a>

		  </div>
	  	<div class="card-body">
	  		<form>
			  <div class="form-group">
			  		
			    <label for="nama">nama</label>
			    <input disabled="disabled" value="<?php  echo $pasien['nama'] ?>" autofocus="autofocus" type="text" name="nama" class="form-control" id="nama" placeholder="masukan nama">
			  </div>
			  <div class="form-group">
			    <label for="ktp">ktp</label>
				    <input disabled="disabled" value="<?php  echo $pasien['ktp'] ?>" type="text" name="ktp" class="form-control" id="ktp" placeholder="masukan ktp">
			  </div>
			  <div class="form-group">
			    <label for="ktp">rekam_medis</label>
				    <input disabled="disabled" value="<?php  echo $pasien['rekam_medis'] ?>" type="text" name="rekam_medis" class="form-control" id="rekam_medis" placeholder="masukan rekam_medis">
			  </div>
			</form>
		  </div>
		  <div class="card-footer">

		  </div>
	
	</div>


</div>



