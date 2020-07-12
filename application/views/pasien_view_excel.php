<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=pasien.xls");
?>

	<table border="1">
	  		<thead>
	  			<tr>
	  			<th>No</th>
	  			<th>Nama</th>
	  			<th>rekam medis</th>
	  			<th>ktp</th>
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
		  			</tr>

		  		<?php 
		  				endforeach;
		  		?>
	  		</tbody>
	  	</table>