<!DOCTYPE html>
<html>
<head>
	<!-- <meta charset="UTF-8"> -->
	<title>Penilaian kinerja Karyawan</title>
</head>
<body>
<div style="width: 800px;">

		<table border="1" style="width:110%;">
		<tbody>
			<tr>
				<td align="center"><img width="70px" height="80px" src="<?php echo base_url().'assets/img/Eiger.jpg'?>"></td>
				<td colspan="2" rowspan="1">
					<p align="center">
						<strong>
							<font size="5.3px">Laporan Penilaian Karyawan</font>	
						</strong>
					</p>
					<br>
					<p align="center">
						<strong>
							<font size="5px">Periode <?= $periode['waktu'].' '.$periode['keterangan'] ?></font>
						</strong>
					</p>
				</td>
			</tr>
		</tbody>
	</table>

	<table border="1" style="width:110%;">
		<thead>
            <tr>
                <th style="width: 6%">No</th>
                <th>NIK</th>
                <th>Nama Karyawan</th>
                <th>Hasil</th>
            </tr>
        </thead>
		<tbody>
			<?php
	            $no = 1;
	            foreach ($hasil as $g) {
	                ?>
	                <tr>
	                    <td><?= $no ?></td>
	                    <td><?= $g['nik'] ?></td>
	                    <td><?= $g['nama_karyawan'] ?></td>
	                    <td><?= $g['alternatif'] ?></td>
	                </tr>
	        <?php
                $no = $no + 1;
            	}
            ?>
		</tbody>
	</table>
</div>
<script >
window.print();

</script>
</body>
</html>