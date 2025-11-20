<?php
# Memulakan fungsi session
session_start();

#memanggil fail header.php fungsi.php
include('header.php');
include('fungsi.php');
?>

<!--Tajuk antaramuka -->
<hr><br><h2>|  <a href="peserta-login-borang.php">Log Masuk Peserta</a>  |  <a href="hakim-login-borang.php">Log Masuk Hakim</a>  |  <a href="peserta-signup-borang.php">Mendaftar Peserta Baru</a> |<br><br></h2>
<hr><br>Pendaftaran Peserta Baru<br><br>

<!--Borang Pendaftaran Peserta baru -->
<form action='peserta-signup-proses.php' method='POST'>
	
	Nama Peserta <input type ='text' name='nama' require><br>
	Nokp Peserta <input type ='text' name='nokp' require><br>
	Katalaluan <input type ='password' name='katalaluan' require><br>
	Sekolah <select name='kod_sekolah' require><br>
				<option selected value disabled>Pilih</option>
				<!--Mengambil senarai sekolah dari fail fungsi.php-->
				<?= $list=senarai_sekolah(); ?>
	</select><br><br>
	<input type='submit' value='Daftar'>
</form><br>

<?php include ('footer.php'); ?>