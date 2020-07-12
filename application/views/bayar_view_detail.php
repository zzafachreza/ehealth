<nav class="hilang" aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item"><a href="<?php echo site_url('bayar') ?>">bayar</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Detail</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header hilang">
	  		
	
	<a href="<?php echo site_url('bayar') ?>" class="btn btn-secondary"><i class="flaticon2-left-arrow-1"></i> Kembali</a>
	<a href="#" id="print" class="btn btn-danger"><i class="flaticon2-print"></i> Print</a>

		  </div>
	  		<div class="card-body">
	  		<table class="table table-bordered">
	  			<tr>
	  				<td class="bg-light">Rekam Medis</td>
	  				<td><?php  echo $bayar['rekam_medis'] ?></td>
	  				<td class="bg-light">Tanggal</td>
	  				<td><?php 

	  				$tgl = explode("-", $bayar['tgl']); 
		  						echo $tgl[2]."/".$tgl[1]."/".$tgl[0];

		  						 ?></td>
	  			</tr>
	  			<tr>
	  				<td class="bg-light">KTP</td>
	  				<td><?php  echo $bayar['ktp'] ?></td>
	  				<td class="bg-light">Nama</td>
	  				<td><?php  echo $bayar['nama'] ?></td>
	  			</tr>
	  			<tr>
	  				<td colspan="8"></td>
	  			</tr>
	  			<tr>
	  				<td class="bg-success" colspan="2">Poli</td>
	  				<td class="bg-warning" colspan="2">Pembayaran</td>
	  			</tr>
	  			<tr>
	  				<td class="" colspan="2"><?php  echo $bayar['poli'] ?></td>
	  				<td class="" colspan="2"><?php  echo $bayar['pembayaran'] ?></td>
	  			</tr>
	  			<tr>
	  				<td colspan="8"></td>
	  			</tr>
	  			<tr>
	  				<td colspan="3" class="bg-info">Total Bayar</td>
	  				<td align="center">
	  					<h2><?php echo "Rp. ".number_format($bayar['total']); ?></h2>
	  				</td>
	  			</tr>
	  		</table>
		  </div>
		  <div class="card-footer">

		  </div>
	
	</div>


</div>

<script type="text/javascript">
	$("#print").click(function(){

		$(".hilang").hide();

		window.print();
	})
</script>


