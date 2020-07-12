<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran Lomba Basket </title>
	<link rel="stylesheet" type="text/css" href="csstim.css">
	
</head>
<body>

	<div class="header">
	<h3>Basketball Competition !!</h3>
		</div>
		<div class="content">
<form  name="form1" action="vailddata.php" method="post" >
	
	

	Nama Tim               : <input type="text" name="tim" id="tim" maxlength="30"  ><br>

	Sekolah/Universitas    : <input type="text" name="Sekolah" id="Sekolah" maxlength="50"><br>

	Alamat                 : <input type="text" name="Alamat" id="Alamat" maxlength="100" ><br>

	Nama Penanggung Jawab  : <input type="text" name="Jawab" id="Jawab" maxlength="20"><br> 

	NO HP Penanggung jawab : <input type="text" name="noHP" id="noHP" maxlength="12"><br>


	Jumlah Pemain Tim Anda  : <input type="number" name="pemain" id="pemain" maxlength="12" ><br>

	Perlombaan yang ingin diikuti    : <select name="perlombaan" id="lomba">
		<option value="Full Team Putra" id="lomba" >Full Team Putra</option>
		<option value="Full Team Putri" id="lomba">Full Team Putri</option>
		<option value="3X3 Putra" id="lomba">3X3 Putra</option>
		<option value="3X3 Putri" id="lomba">3X3 Putri</option>
	</select><br>

	Tim Anda memiliki pendanaan yang cukup : <input type="radio" name="dana" id="dana" value="ya">YA
	<input type="radio" name="dana" id="dana" value="tidak">Tidak<br>

	Prestasi yg pernah diraih : <textarea name="prestasi" id="prestasi" rows="4" cols="50"></textarea><br>
	
	<input type="submit" name="nm" id="nm" value="submit">
	<input type="reset" name="rst" id="rst" value="reset">
	
	</div>
</form>

<?php 
	if(isset($_GET['tim'])){
		if($_GET['tim'] == "kosong"){
			echo "<h4 style='color:red'>Nama Tim Belum Di Masukkan !</h4>";
		}
	}
	if(isset($_GET['Sekolah'])){
		if($_GET['Sekolah'] == "kosong"){
			echo "<h4 style='color:red'>Asal Sekolah/Universitas Belum Di Masukkan !</h4>";
		}
	}
	if(isset($_GET['Alamat'])){
		if($_GET['Alamat'] == "kosong"){
			echo "<h4 style='color:red'>Alamat Belum Di Masukkan !</h4>";
		}
	}
	if(isset($_GET['Jawab'])){
		if($_GET['Jawab'] == "kosong"){
			echo "<h4 style='color:red'>Nama Penanggung jawab Tim Belum Di Masukkan !</h4>";
		}
	}
	if(isset($_GET['noHP'])){
		if($_GET['noHP'] == "kosong"){
			echo "<h4 style='color:red'>No HP Penanggung jawab Tim Belum Di Masukkan !</h4>";
		}
	}
	if(isset($_GET['pemain'])){
		if($_GET['pemain'] == "kosong"){
			echo "<h4 style='color:red'>Jumlah pemain Belum Di Masukkan !</h4>";
		}
	}
	
	if(isset($_GET['dana'])){
		if($_GET['dana'] == "kosong"){
			echo "<h4 style='color:red'>Kesanggupan dana Belum Di Masukkan !</h4>";
		}
	}
	?>
</body>
</html>