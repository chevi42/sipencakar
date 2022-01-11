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
				<td align="center"><img width="150px" src="<?php echo base_url().'assets/img/mardira.png'?>"></td>
				<td colspan="6" rowspan="1">
				<p align="center"><strong>EVALUASI PERFORMANCE KARYAWAN</strong></p>

				<h1 style="text-align: center;">STMIK MARDIRA INDONESIA</h1>

				<p align="center">Jl. Soekarno Hatta No. 211 Bandung</p>

				<p style="text-align: center;">=================================================================</p>
				</td>
			</tr>
			<tr>
				<td colspan="4">
				<p style="text-align: center;">Sebagai bagian dari kegiatan evaluasi bidang akademik, maka mahasiswa/i diharapkan berpartisipasi dalam memberikan aspirasi penilaian kepada tenaga pengajar (Karyawan) dalam aktifitas belajar mengajar, hal ini akan sangat bermanfaat agar kinerja bidang akademik khususnya dalam meningkatkan layanan tenaga pengajar (Karyawan) lebih baik lagi.</p>
				</td>
			</tr>
		</tbody>
	</table>

	<table border="1" style="width:110%;">
		<tbody>
			<tr>
				<td width="20%">Nama Karyawan:</td>
				<td width="35%">&nbsp;<?= $karyawan['nama_karyawan'] ?></td>
				<td width="20%">Tanggal:</td>
				<td width="35%">&nbsp;<?= date('d F Y') ?></td>
			</tr>
			<tr>
				<td width="20%">Mata Kuliah:</td>
				<td width="35%">&nbsp;<?= $karyawan['mata_kuliah'] ?></td>
				<td width="20%">no_urut:</td>
				<td width="35%"><?= str_pad($karyawan['id_karyawan'], 3, '0', STR_PAD_LEFT)?></td>

			</tr>
			<tr>
				<td width="20%">NIM:</td>
				<td width="35%">&nbsp;<?php echo str_replace('@gmail.com', '', $admin['email'])  ?></td>
				<td width="20%">Nama:</td>
				<td width="35%"><?= $admin['nama']?></td>

			</tr>
		</tbody>
	</table>

	<table border="1" cellpadding="1" style="width:110%;">
		<tbody>
			<tr>
				<td colspan="7">
				<p><strong><u>Petunjuk</u></strong> : <strong>Berikan tanda centang (</strong><strong>&#10003</strong><strong>) </strong>pada salah satu kolom jawaban yang disediakan, yaitu:&nbsp; <strong>SS</strong> (sangat setuju), <strong>S</strong> (setuju), <strong>TS</strong> (tidak setuju), <strong>STS</strong> (sangat tidak setuju).</p>
				</td>
			</tr>
		</tbody>
	</table>

	<table border="1" style="width:110%;">
		<tbody>
			<tr>
				<td rowspan="2" align="center"><strong>No</strong></td>
				<td rowspan="2" align="center" width="60%"><strong>PERNYATAAN</strong></td>
				<td colspan="5" rowspan="1" align="center"><strong>Jawaban</strong></td>
			</tr>
			<tr>
				<td align="center">SS&nbsp;</td>
				<td align="center">S&nbsp;&nbsp;</td>
				<td align="center">TS&nbsp;</td>
				<td align="center">STS</td>
			</tr>
			<tr>
				<td align="center">1</td>
				<td>Apakah karyawan selalau mengajar tepat waktu ?</td>
				<td align="center"><?= $nilai['0']['C1_1']; ?></td>
				<td align="center"><?= $nilai['0']['C1_2']; ?></td>
				<td align="center"><?= $nilai['0']['C1_3']; ?></td>
				<td align="center"><?= $nilai['0']['C1_4']; ?></td>
			</tr>
			<tr>
				<td align="center">2</td>
				<td>Apakah karyawan yang bersangkutan sangat jelas dalam menjelaskan materi ?</td>
				<td align="center"><?= $nilai['1']['C2_1']; ?></td>
				<td align="center"><?= $nilai['1']['C2_2']; ?></td>
				<td align="center"><?= $nilai['1']['C2_3']; ?></td>
				<td align="center"><?= $nilai['1']['C2_4']; ?></td>
			</tr>
			<tr>
				<td align="center">3</td>
				<td>Apakah karyawan yang bersangkutan memiliki kemampuan dan menguasai materi yang disampaikan dengan baik ?</td>
				<td align="center"><?= $nilai['2']['C3_1']; ?></td>
				<td align="center"><?= $nilai['2']['C3_2']; ?></td>
				<td align="center"><?= $nilai['2']['C3_3']; ?></td>
				<td align="center"><?= $nilai['2']['C3_4']; ?></td>
			</tr>
			<tr>
				<td align="center">4</td>
				<td>Apakah karyawan yang bersangkutan sangat baik dalam menjawab pertanyaan ?</td>
				<td align="center"><?= $nilai['3']['C4_1']; ?></td>
				<td align="center"><?= $nilai['3']['C4_2']; ?></td>
				<td align="center"><?= $nilai['3']['C4_3']; ?></td>
				<td align="center"><?= $nilai['3']['C4_4']; ?></td>
			</tr>
			<tr>
				<td align="center">5</td>
				<td>Apakah karyawan yang bersangkutan selalu memberikan tugas sesuai dengan materi yang disampaikan ?</td>
				<td align="center"><?= $nilai['4']['C5_1']; ?></td>
				<td align="center"><?= $nilai['4']['C5_2']; ?></td>
				<td align="center"><?= $nilai['4']['C5_3']; ?></td>
				<td align="center"><?= $nilai['4']['C5_4']; ?></td>
			</tr>
			<tr>
				<td align="center">6</td>
				<td>Apakah karyawan yang bersangkutan selalu meluangkan waktu diluar perkuliahan untuk konsultasi mata kuliah ?</td>
				<td align="center"><?= $nilai['5']['C6_1']; ?></td>
				<td align="center"><?= $nilai['5']['C6_2']; ?></td>
				<td align="center"><?= $nilai['5']['C6_3']; ?></td>
				<td align="center"><?= $nilai['5']['C6_4']; ?></td>
			</tr>
			<tr>
				<td align="center">7</td>
				<td>Apakah karyawan yang bersangkutan mengajar dengan penuh kedisiplinan ?</td>
				<td align="center"><?= $nilai['6']['C7_1']; ?></td>
				<td align="center"><?= $nilai['6']['C7_2']; ?></td>
				<td align="center"><?= $nilai['6']['C7_3']; ?></td>
				<td align="center"><?= $nilai['6']['C7_4']; ?></td>
			</tr>
			<tr>
				<td align="center">8</td>
				<td>Apakah karyawan yang bersangkutan dapat&nbsp; menciptakan suasana belajar yang optimal dan menyenangkan ?</td>
				<td align="center"><?= $nilai['7']['C8_1']; ?></td>
				<td align="center"><?= $nilai['7']['C8_2']; ?></td>
				<td align="center"><?= $nilai['7']['C8_3']; ?></td>
				<td align="center"><?= $nilai['7']['C8_4']; ?></td>
			</tr>
			<tr>
				<td align="center">9</td>
				<td>Apakah anda belajar dengan karyawan yang bersangkutan merasa tegang ?</td>
				<td align="center"><?= $nilai['8']['C9_1']; ?></td>
				<td align="center"><?= $nilai['8']['C9_2']; ?></td>
				<td align="center"><?= $nilai['8']['C9_3']; ?></td>
				<td align="center"><?= $nilai['8']['C9_4']; ?></td>
			</tr>
			<tr>
				<td align="center">10</td>
				<td>Apakah anda merasa mantap di ajar oleh karyawan yang bersangkutan ?</td>
				<td align="center"><?= $nilai['9']['C10_1']; ?></td>
				<td align="center"><?= $nilai['9']['C10_2']; ?></td>
				<td align="center"><?= $nilai['9']['C10_3']; ?></td>
				<td align="center"><?= $nilai['9']['C10_4']; ?></td>
			</tr>

	<table border="1" style="width:110%;">
		<tbody>
			<tr>
				<td colspan="7">
					<p>Hal apa saja yang harus diperbaiki oleh karyawan ybs :</p> <br>
					<p></p>
				</td>
			</tr>
			<tr>
				<td colspan="7">
					<p>Hal apa saja yang harus dipertahankan dari karyawan ybs :</p> <br>
					<p></p>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<script >
window.print();

</script>
</body>
</html>