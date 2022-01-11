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
							<font size="5.3px"><?= $title ?> <?= $params ?></font>	
						</strong>
					</p>
					<br>
					<p align="center">
						<strong>
							<font size="5px"><?= $title2 ?></font>
						</strong>
					</p>
				</td>
			</tr>
		</tbody>
	</table>

	<?php if($params =='Karyawan') { ?>
	<table border="1" style="width:110%;">
		<thead>
            <tr>
                <th style="width: 6%">No</th>
                <th>NIK</th>
                <th>Nama Karyawan</th>
                <th>Mata Kuliah</th>
                <th>Hasil</th>
            </tr>
        </thead>
		<tbody>
			<?php
	            $no = 1;
	            foreach ($data as $g) {
	                ?>
	                <tr>
	                    <td><?= $no ?></td>
	                    <td><?= $g['nik'] ?></td>
	                    <td><?= $g['nama_karyawan'] ?></td>
	                    <td><?= $g['mata_pelajaran'] ?></td>
	                    <td></td>
	                </tr>
	        <?php
                $no = $no + 1;
            	}
            ?>
		</tbody>
	</table>	
	<?php }else { ?>
	<table border="1" style="width:110%;">
		<thead>
            <tr>
                <th style="width: 6%">No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Prodi</th>
                <th>Jenjang</th>
                <th>Kelas</th>
            </tr>
        </thead>
		<tbody>
			<?php
	            $no = 1;
	            foreach ($data as $g) {
	                ?>
	                <tr>
	                    <td><?= $no ?></td>
	                    <td><?= $g['nim'] ?></td>
	                    <td><?= $g['nama'] ?></td>
	                    <td><?= $g['nama_prodi'] ?></td>
	                    <td><?= $g['jenjang'] ?></td>
	                    <td><?= $g['kelas'] ?></td>
	                </tr>
	        <?php
                $no = $no + 1;
            	}
            ?>
		</tbody>
	</table>	

	<?php } ?>
</div>
<script >
window.print();

</script>
</body>
</html>