<?php
#memulakan fungis session
session_start();
#memanggil fail header.php
include('header.php');
?>
<!--tajuk antaramuka log masuk peserta-->
<hr><br><h2>|  <a href="peserta-login-borang.php">Log Masuk Peserta</a>  |  <a href="hakim-login-borang.php">Log Masuk Hakim</a>  |  <a href="peserta-signup-borang.php">Mendaftar Peserta Baru</a> |<br><br></h2>
<hr><br>Log Masuk Peserta<br><br>
<!--BOraqng daftar masuk (signup) peserta-->
<form action='peserta-login-proses.php' method='POST'>
	NoKP Peserta <input type='text' name='nokp'> <br>
	Kata Laluan <input type='password' name='katalaluan'><br><br>
	<input type='submit' value='Masuk'>
</form><br>
<?php include('footer.php'); ?>