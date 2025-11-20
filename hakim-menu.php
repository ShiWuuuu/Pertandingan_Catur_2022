<?php
#memulakan fail session
session_start();
#memanggil fail header.php dan guard-hakim.php
include('header2.php');
include('guard-hakim.php');
?>
<!--Memaparkan nama hakim-->
<br><h2>Selamat datang, <?= $_SESSION['nama'] ?>!</h2><br>
<!--memaparkan tugas-tugas sebagai hakim pertandingan -->
<p>- Tugasan Hakim -</p>
	<br><li>Setiap hakim boleh mendaftar peserta baharu dengan cara memuat naik data*txt peserta.</li>
	<li>Setiap hakim boleh menilai mana-mana peserta yang telah disenaraikan.</li>
	<li>Peserta terakhir akan dinilai dan diberikan markah pada hari terakhir pertandingan.</li><br>
<?php include('footer.php'); ?>