<!-- Membuat program data pribadi dibuat oleh :
 Nama : Siti Nur Fadilah
 NIM : 32231614
 Prodi : Komputerisasi Akuntansi -->

<html>
    <head>
                <title>Latihan Pertama</title>
    </head>
<body>
    <h1>Data Pribadi Saya</h1>
<?php
// Deklarasi Variable
$nama_saya   = "Siti Nur Fadilah" ;
$jurusan     = "Komputerisasi Akuntansi" ;
$semester    = "3" ;
$nim         = "32231614" ;
$umur        = "19" ;
$berat_badan = "53.42" ;
 
/* dibawah ini adalah script untuk menampilkan
 data yang telah dideklarasikan diatas*/ 

 echo "Nama Saya $nama_saya <br />" ;
 echo "Sekarang semester $semester dan $jurusan dan NIM saya $nim <br />" ;
 echo 'Umur saya sekarang adalah '. $umur . ' tahun <br />' ;
 echo "Berat badan saya $berat_badan Kg" ;
 ?>
</body>
</html>