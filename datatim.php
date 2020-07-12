<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="csstim.css">
</head>
<body>
	<div class="content">
	<center>
		<h1 width="180" align="cols">Data anda Telah Tersimpan</h1><br>
		<td>
			<button><a href="vailddata.php">Validasi data anda</a></button></td><br>
		<td><button><a href="form.php">Halaman awal Pendaftaran Tim</a></button><br>
		</td>
		<td>
			<button><a href="lihattim.php">Lihat Daftar-daftar Tim</a></button><br>
		</td>
		</div>

	</center>
<?php 
echo "<head><title><>";
$fp=fopen("daftartim.txt", "a+");
$tim=$_POST['tim'];
$Sekolah=$_POST['Sekolah'];
$Alamat=$_POST['Alamat'];
$Jawab=$_POST['Jawab'];
$noHP=$_POST['noHP'];
$pemain=$_POST['pemain'];
$lomba=$_POST['lomba'];
$dana=$_POST['dana'];
$prestasi=$_POST['prestasi'];
fputs($fp,"$tim|$Sekolah|$Alamat|$Jawab|$noHP|$pemain|$dana|$prestasi\n");
fclose($fp);

echo "<center>";

echo "Terima kasih telah mendaftar,Bermainlah yang sportif";

echo "</center>";
 ?>
</body>
</html>