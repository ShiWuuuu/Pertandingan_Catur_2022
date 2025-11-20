<div class = "bil">
<?php
#memulakan fungsi session
session_start();
#memanggil fail header, guar-peserta, connection dan fungsi
include('header1.php');
include('guard-peserta.php');
include('connection.php');
include('fungsi.php');
#pemboleh ubah $k mengambil nilai yang dipulangkan oleh fungsi semak
$k=semak();

#jika nilai yang dipulangkan oleh fungsi semak seperti dibawah
if($k=="Semua peserta telah dinilai")
{
	#arahan untuk mencari dan menyusun peserta yang mempunyai mata tertinggi
	$query_semak = "select* from peserta order by mata DESC";
	$laksana = mysqli_query($condb,$query_semak);
	$bil=1;
	#mengambil data hasil proses pencarian di atas
	while($m=mysqli_fetch_array($laksana))
	{
		#jika data yang ditemu sepadan dengan nokp peserta yang sedang log masuk
		if($m['nokp_peserta']==$_SESSION['nokp'])
		{
			#paparkan kedudukan keputusan peserta tersebut
			echo "<hr><br>Selamat datang, <p>".$m['nama_peserta']."</p>Anda mendapat tempat ke : <p>".$bil."</p><br>";
		}
		$bil++;
	}
}
echo $k;
?>
</div>
<?php include ('footer.php'); ?>