<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=bayar.xls");
?>

	<table border="1">
	  <thead>
	  			<tr>
	  			<th>No</th>
	  			<th>Tanggal</th>
	  			<th>POLI</th>
	  			<th>Nama</th>
	  			<th>KTP</th>
	  			<th>Rekam Medis</th>
	  			<th>Pembayaran</th>
	  			<th>Total</th>
	  		
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
		  				<td><?php echo $row->tgl ?></td>
		  				<td><?php echo $row->poli ?></td>
		  				<td><?php echo $row->nama ?></td>
		  				<td><?php echo $row->ktp ?></td>
		  				<td><?php echo $row->rekam_medis ?></td>
		  				<td><?php echo $row->pembayaran ?></td>
		  				<td><?php echo $row->total ?></td>
		  				
		  			</tr>

		  		<?php 
		  				endforeach;
		  		?>
	  		</tbody>
	  	</table>