<nav class="hilang" aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url('bayar') ?>">Bayar</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Add</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header hilang">
	  		
	  <form action="<?php echo site_url('bayar/insert') ?>" method="POST" >

	<a href="<?php echo site_url('bayar') ?>" class="btn btn-secondary"><i class="flaticon2-left-arrow-1"></i> Kembali</a>

		<button class="btn btn-danger" type="RESET"><i class="flaticon2-refresh-button"></i> Reset</button>
  	<button class="btn btn-success" type="SUBMIT"><i class="flaticon2-files-and-folders"></i> Simpan</button>
	  </div>
	  	<div class="card-body">
	  		<form>
	  		  <div class="form-group">
			    <label for="id_daftar">rekam medis</label>
			   
			   <select class="form-control selectza" name="id_daftar">
			   	 <option></option>
			   	 <?php
	  				$no=0;
	  				foreach($bayar->result() as $row):
	  				$no++;
			  		?>
			  				<option value="<?php echo $row->id ?>"><?php echo $row->rekam_medis." - ".$row->nama." - ".$row->poli ?></option>
			  	<?php endforeach; ?>
				   
			   </select>

			  </div>
			  <div class="form-group">
			    <label for="pembayaran">pembayaran</label>
			    <select class="form-control" name="pembayaran">
			    	<option>UMUM</option>
			    	<option>BPJS</option>
			    	<option>ASURANSI</option>
			    </select>
			  </div>

			  <div class="form-group">
			    <label for="total">total</label>

			    	<input type="text" name="total" class="form-control" placeholder="masukan total bayar">
			 
			  </div>
			
			</form>
		  </div>
		  <div class="card-footer">

		  </div>
	  </form>
	</div>


</div>



