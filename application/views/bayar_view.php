<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Bayar</li>
	  </ol>
</nav>
<div class="container-fluid">

	<div class="card">
	  <div class="card-header">
	  	<a href="<?php echo site_url() ?>" class="btn btn-secondary"><i class="flaticon2-left-arrow-1"></i> Kembali</a>
	    <a href="<?php echo site_url('bayar/add') ?>" class="btn btn-primary"><i class="flaticon-add"></i> Tambah</a>
	    	    <a href="<?php echo site_url('bayar/excel') ?>" class="btn btn-success"><i class="flaticon2-file"></i> Excel</a>
	  </div>
	  <div class="card-body">

	  	<table class="table table-bordered table-striped table-hover tabza">
	  		<thead>
	  			<tr>
	  			<th>No</th>
	  			<th>Tanggal</th>
	  			<th>POLI</th>
	  			<th>Nama</th>
	  			<th>Rekam Medis</th>
	  			<th>Pembayaran</th>
	  			<th>Total</th>
	  			<th>action</th>
	  		</tr>
	  		</thead>
	  		<tbody>
	  			<?php
	  				$no=0;
	  				foreach($bayar->result() as $row):
	  				$no++;
		  		?>
		  			<tr>
		  				<td><?php echo $no ?></td>
		  				<td><?php 
		  					$tgl = explode("-", $row->tgl); 
		  						echo $tgl[2]."/".$tgl[1]."/".$tgl[0];
		  				 ?></td>
		  				<td><?php echo $row->poli ?></td>
		  				<td><?php echo $row->nama ?></td>
		  				<td><?php echo $row->rekam_medis ?></td>
		  				<td><?php echo $row->pembayaran ?></td>
		  				<td><?php echo number_format($row->total) ?></td>
		  				<td>
		  			
		  					<a href="<?php echo site_url('bayar/detail/'.$row->id) ?>" class="btn btn-warning"><i class="flaticon2-print"></i> Detail</a>	
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



