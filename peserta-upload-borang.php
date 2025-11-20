<?php
#memulakan fungsi session
session_start();
#memanggil fail header, guard-hakim dan connection
include('header2.php');
include('guard-hakim.php');
include('connection.php');
?>
<!--Tajuk laman -->
<br><h3>Muat Naik Data Peserta (*.txt)</h3><br>
<!--BOrang untuk memuat naik fail-->
<form action='peserta-upload-proses.php' method='POST' enctype='multipart/form-data'>
	<h3><b>Sila Pilih Fail .txt yang ingin memuat naik</b></h3><br>
	<input type ='file' name='data_peserta'>
	<input type = 'submit' name = 'btn-upload' value = "Hantar">
</form><br>
<?php include('footer.php'); ?>