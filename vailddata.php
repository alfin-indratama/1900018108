<!DOCTYPE html>
<html>
<head>
	<title>Validasi data</title>
	<link rel="stylesheet" type="text/css" href="csstim.css">

</head>
<body>
<div class="content"><?php  
$tim = $_POST['tim'];
 
if($tim == ""){
	header("location:form.php?tim=kosong");
}else{
	echo "Nama  tim anda adalah : ". $tim;
}
$Sekolah = $_POST['Sekolah'];
 
if($Sekolah == ""){
	header("location:form.php?Sekolah=kosong");
}else{
	echo "</br>Asal sekolah anda adalah : ". $Sekolah;
}

$Alamat = $_POST['Alamat'];
 
if($Alamat == ""){
	header("location:form.php?Alamat=kosong");
}else{
	echo "</br>Alamat tim anda adalah : ". $Alamat;
}

$Jawab = $_POST['Jawab'];
 
if($Jawab == ""){
	header("location:form.php?Jawab=kosong");
}else{
	echo "</br>Nama Penanggung jawab tim anda adalah : ". $Jawab;
}

$noHP = $_POST['noHP'];
 
if($noHP == ""){
	header("location:form.php?noHP=kosong");
}else{
	echo "</br>No HP Penanggung jawab tim  anda adalah : ". $noHP;
}
$pemain = $_POST['pemain'];
 
if($pemain == ""){
	header("location:form.php?pemain=kosong");
}else{
	echo "</br>Jumlah anggota tim anda adalah : ". $pemain;
}


$dana = $_POST['dana'];
 
if($dana == ""){
	header("location:form.php?dana=kosong");
}else{
	echo "</br>Tim anda memiliki cukup dana? ". $dana;
}
?>
</div>


</body>
</html>




