<?php 
echo "<head><title>Dftar Tim yang terdaftar</title></head>";
	$fp = fopen("daftartim.txt", "r");
	echo "<table border=0>";

	while ($isi = fgets($fp,80)) {
		$pisah = explode("|",$isi);
		echo "<tr><td>Nama Tim </td><td>: $pisah[0]</td></tr>";

		echo "<tr><td>Asal Sekolah: </td><td>: $pisah[1]</td></tr>";

		echo "<tr><td>Alamat </td><td>: $pisah[2]</td></tr>";

		echo "<tr><td>Nama Penanggung jawab</td><td>: $pisah[3]</td></tr>";

		echo "<tr><td>N0. HP</td><td>: $pisah[4]</td></tr>";

		echo "<tr><td>Pemain</td><td>: $pisah[5]</td></tr>";

		echo "<tr><td>Nama Penanggung jawab</td><td>: $pisah[6]</td></tr>";

		echo "<tr><td>Lomba yang diikuti </td><td>: $pisah[7]</td></tr>
		<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
	}
	echo "</table>";
	echo "<a href=form.html>Klik Disini </a>Isi Form Pendaftaran";


 ?>