<?php
#Memulakan fungsi SESSION
session_start();

#Memanggil fail header.php dan fail fungsi.php
include('header.php');
include('fungsi.php');
?><hr><br><br>
<h2>Keputusan Individu</h2><br><br>
<?php
#memanggil fungsi semak() dari fail fungsi.php
$k=semak();

#semakkan nilai yang dipulangkan
if($k=="Semua peserta telah dinilai")
{
	#jika nilai dipulangkan semua peserta telah dinilai.
	#panggi fungsi keputusan individu dari fail fungsi.php
	#dan papar keputusan 5 individu terbaik.
	#Bilangan pemenang anda boleh ubah di fail fungsi.php
	keputusan_individu();
}
else
{
	#paparan jika proses penilaian masih belum tamat
	echo"<br>Proses Penilaian masih dibuat";
}
?>
<br>
<br>
<hr>
<br>
<br>
<!--Memaparkan keputusan Keseluruhan Sekolah-->
<h2>Keputusan Sekolah</h2><br><br>
<?php
#memanggil fungsi semak() dari fail fungsi.php
$k=semak();
if($k=="Semua peserta telah dinilai")
{
	#jika nilai dipulangkan semua peserta telah dinilai.
	#panggi fungsi keputusan sekolah dari fail fungsi
	#dan paparkan keputusan keseluruhan sekolah
	keputusan_sekolah();
}
else
{
	#paparan jika proses penilaian masih belum tamat
	echo "<br>Proses Penilaian masih dibuat";
}
?><br><br><br>
<?php include ('footer.php'); ?>