<?php
#Memulakan fungsi SESSION
session_start();

#Memanggil fail header.php dan fail fungsi.php
include('header.php');
include('fungsi.php');
?>
<!--Memaparkan pautan (hyperlink) -->
<hr><br>
<div class="info"><h2>Syarat Pertandingan</h2><br>
<li>Seorang Peserta hanya boleh menghantar 1 penyertaan sahaja</li>
<li>Terdapat 2 kategori iaitu sekolah dan individu</li>
<li>Bagi kategori individu, pemenang akan tempat 1 hingga 5. </li>
<li>Semua penyertaan akan mendapat sijil penyertaan </li>
<li>Bagi kategori sekolah, tiada had untuk pelajar menghantar penyertaan</li>
<li>Pemenang akan dikira dari jumlah mata terkumpul pelajar-pelajar dari sekolah tersebut yang menyertai pertandingan</li>
<li>Keputusan hanya akan dipaparkan setelah semua peserta telah dinilai</li></div><br>
<?php include ('footer.php'); ?>