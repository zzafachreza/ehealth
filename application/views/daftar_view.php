<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page">daftar</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  	<a href="<?php echo site_url() ?>" class="btn btn-secondary"><i class="flaticon2-left-arrow-1"></i> Kembali</a>
	    <a href="<?php echo site_url('daftar/add') ?>" class="btn btn-primary"><i class="flaticon-add"></i> Tambah</a>
	  </div>
	  <div class="card-body">

	  	<table class="table table-bordered table-striped table-hover tabza">
	  		<thead>
	  			<tr>
	  			<th>No</th>
	  			<th>Tanggal</th>
	  			<th>POLI</th>
	  			<th>Nama</th>
	  			<th>rekam medis</th>
	  			<th>ktp</th>
	  			<th>action</th>
	  		</tr>
	  		</thead>
	  		<tbody>
	  			<?php
	  				$no=0;
	  				foreach($daftar->result() as $row):
	  				$no++;
		  		?>
		  			<tr>
		  				<td><?php echo $no ?></td>
		  				<td><?php  $tgl = explode("-", $row->tgl); 
		  						echo $tgl[2]."/".$tgl[1]."/".$tgl[0];
		  				?></td>
		  				<td><?php echo $row->poli ?></td>
		  				<td><?php echo $row->nama ?></td>
		  				<td><?php echo $row->rekam_medis ?></td>
		  				<td><?php echo $row->ktp ?></td>
		  				<td>
		  			
		  					<a href="<?php echo site_url('daftar/delete/'.$row->id) ?>" class="btn btn-danger"><i class="flaticon-delete"></i> Batal Daftar</a>	
		  				</td>
		  			</tr>

		  		<?php 
		  				endforeach;
		  		?>
	  		</tbody>
	  	</table>

	  </div>
	</div>


</div>


<script type="text/javascript">
	
</script>


