<?php
#memulakan fungsi session
session_start();
#memanggil fail header, guard-hakim dan fungsi
include('header2.php');
include('guard-hakim.php');
include('fungsi.php');
#menyemak kewujudan data GET. JIka data GET empty, buka fail senarai-peserta
if(empty($_GET))
{
	die("<script>window.location.href='senarai-peserta.php';</script>");
}
?>
<h3>Kemaskini Peserta Baru</h3>
<form action='peserta-kemaskini-proses.php?nokp_lama=<?= $_GET['nokp'] ?>' method ='POST'>
Nama
<input type = 'text' name='nama' value='<?= $_GET['nama'] ?>' required><br>
NoKP
<input type = 'text' name='nokp' value='<?= $_GET['nokp'] ?>' required><br>
Kata Laluan
<input type = 'password' name='katalaluan' value='<?= $_GET['katalaluan'] ?>' required><br>
Sekolah
<select name='kod_sekolah' required>
	<option value='<?= $_GET['kod_sekolah'] ?>'>
		<?= $_GET['nama_sekolah'] ?>
	</option>
	<?= $list=senarai_sekolah(); ?>
</select> <br>
	<input type ='submit' value='Kemaskini' color= white>
</form>
<?php include ('footer.php'); ?>