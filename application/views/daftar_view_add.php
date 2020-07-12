<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url('daftar') ?>">daftar</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Add</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  		
	  <form action="<?php echo site_url('daftar/insert') ?>" method="POST" >

	<a href="<?php echo site_url('daftar') ?>" class="btn btn-secondary"><i class="flaticon2-left-arrow-1"></i> Kembali</a>

		<button class="btn btn-danger" type="RESET"><i class="flaticon2-refresh-button"></i> Reset</button>
  	<button class="btn btn-success" type="SUBMIT"><i class="flaticon2-files-and-folders"></i> Simpan</button>
	  </div>
	  	<div class="card-body">
	  		<form>
	  		  <div class="form-group">
			    <label for="rekam_medis">rekam medis</label>
			   
			   <select class="form-control selectza" name="rekam_medis">
			   	<option></option>
			   	 <?php
	  				$no=0;
	  				foreach($daftar->result() as $row):
	  				$no++;
			  		?>
			  				<option value="<?php echo $row->rekam_medis ?>"><?php echo $row->rekam_medis." - ".$row->nama ?></option>
			  	<?php endforeach; ?>
				   
			   </select>

			  </div>
			  <div class="form-group">
			    <label for="poli">poli</label>
			    <select class="form-control" name="poli">
			    	<option>UMUM</option>
			    	<option>GIGI</option>
			    	<option>MATA</option>
			    </select>
			  </div>
			
			</form>
		  </div>
		  <div class="card-footer">

		  </div>
	  </form>
	</div>


</div>



