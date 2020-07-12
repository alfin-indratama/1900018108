<!DOCTYPE html>
<html>
<head>
	<title>Daftar tim yang terdaftar</title>
	<link rel="stylesheet" type="text/css" href="csstim.css">
</head>
<body>
	<div class="container">
	<div class="header">
	<h2>Data-data tim yang terdaftar</h2>
	</div>	
<div class="content">

<?php 

	$fp = fopen("daftartim.txt", "r");
	echo "<table border=2 solid grey align = center > ";
	

	while ($isi = fgets($fp,80)) {
		$pisah = explode("|",$isi);
		echo "<tr><td>Nama Tim </td><td>: $pisah[0]</td></tr>";

		echo "<tr><td>Asal Sekolah: </td><td>: $pisah[1]</td></tr>";

		echo "<tr><td>Alamat </td><td>: $pisah[2]</td></tr>";

		echo "<tr><td>Nama Penanggung jawab</td><td>: $pisah[3]</td></tr>";

		echo "<tr><td>No.HP</td><td>: $pisah[4]</td></tr>";

		echo "<tr><td>Jumlah Pemain</td><td>: $pisah[5]</td></tr>";



		echo "<tr><td>Kesanggupan dana? </td><td>: $pisah[7]</td></tr>";

		echo "<tr><td>Prestasi yang pernah diraih</td><td>: $pisah[8]</td></tr>

		<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
	}
	echo "</table>";
	echo "<a href=form.php>Klik Disini </a>Isi Form Pendaftaran";


 ?>
 </div>
</body>
</div>
</html>
