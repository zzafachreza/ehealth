<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url('pasien') ?>">pasien</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Add</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  		
	  <form action="<?php echo site_url('pasien/insert') ?>" method="POST" >

	<a href="<?php echo site_url('pasien') ?>" class="btn btn-secondary"><i class="flaticon2-left-arrow-1"></i> Kembali</a>

		<button class="btn btn-danger" type="RESET"><i class="flaticon2-refresh-button"></i> Reset</button>
  	<button  class="btn btn-success" id="simpan" type="SUBMIT"><i class="flaticon2-files-and-folders"></i> Simpan</button>
	  </div>
	  	<div class="card-body">
	  		<form>
			  <div class="form-group">
			    <label for="nama">nama</label>
			    <input autofocus="autofocus" required="required" type="text" name="nama" class="form-control" id="nama" placeholder="masukan nama">
			  </div>
			  <div class="form-group">
			    <label for="ktp">ktp</label>
			    <input type="text" name="ktp" required="required" class="form-control" id="ktp" placeholder="masukan ktp">
			    <p id="pesanKTP" style="color: red"></p>
			  </div>
			  <div class="form-group">
			    <label for="rekam_medis">rekam medis</label>
			    <input type="text" name="rekam_medis" required="required" class="form-control" id="rekam_medis" placeholder="masukan rekam medis">
			    <p id="pesanRM" style="color: red"></p>
			  </div>
			</form>
		  </div>
		  <div class="card-footer">

		  </div>
	  </form>
	</div>


</div>

<script type="text/javascript">
	$("#ktp").on('change',function(e){
		e.preventDefault();

		var key = $(this).val();
		

		$.ajax({
			url:"<?php echo site_url() ?>pasien/cekKTP",
			data:{key:key},
			type:'POST',
			success:function(data){

				if (data!=404) {
					$("#pesanKTP").text(data);
					$("#simpan").attr('disabled','disabled');
				}else{
					$("#pesanKTP").text("");
					$("#simpan").removeAttr('disabled');
				}
			}
		})
	})

	$("#rekam_medis").on('change',function(e){
		e.preventDefault();

		var key = $(this).val();
		

		$.ajax({
			url:"<?php echo site_url() ?>pasien/cekRM",
			data:{key:key},
			type:'POST',
			success:function(data){
			if (data!=404) {
						$("#pesanRM").text(data);
						$("#simpan").attr('disabled','disabled');
					}
					else{
					$("#pesanRM").text("");
					$("#simpan").removeAttr('disabled');
				}
			}
		})
	})
</script>


