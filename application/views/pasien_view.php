<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Pasien</li>
	  </ol>
</nav>
<div class="container-fluid">

<?php

if (isset($notif)) {
	# code...
	echo $notif;
}
	
?>
	<div class="card">
	  <div class="card-header">
	  	<a href="<?php echo site_url() ?>" class="btn btn-secondary"><i class="flaticon2-left-arrow-1"></i> Kembali</a>
	    <a href="<?php echo site_url('pasien/add') ?>" class="btn btn-primary"><i class="flaticon-add"></i> Tambah</a>
	    <a href="<?php echo site_url('pasien/excel') ?>" class="btn btn-success"><i class="flaticon2-file"></i> Excel</a>
	  </div>
	  <div class="card-body">

	  	<table class="table table-bordered table-striped table-hover tabza">
	  		<thead>
	  			<tr>
	  			<th>No</th>
	  			<th>Nama</th>
	  			<th>rekam medis</th>
	  			<th>ktp</th>
	  			<th>action</th>
	  		</tr>
	  		</thead>
	  		<tbody>
	  			<?php
	  				$no=0;
	  				foreach($pasien->result() as $row):
	  				$no++;
		  		?>
		  			<tr>
		  				<td><?php echo $no ?></td>
		  				<td><?php echo $row->nama ?></td>
		  				<td><?php echo $row->rekam_medis ?></td>
		  				<td><?php echo $row->ktp ?></td>
		  				<td>
		  					<a href="<?php echo site_url('pasien/detail/'.$row->id) ?>" class="btn btn-success"><i class="flaticon-eye"></i></a>

		  					<a href="<?php echo site_url('pasien/edit/'.$row->id) ?>" class="btn btn-warning"><i class="flaticon-edit"></i></a>

		  					<a href="<?php echo site_url('pasien/delete/'.$row->id) ?>" class="btn btn-danger"><i class="flaticon-delete"></i></a>	
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



