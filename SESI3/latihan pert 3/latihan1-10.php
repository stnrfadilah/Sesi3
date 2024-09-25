<!-- Membuat program untuk latihan php dasar
 Nama : Siti Nur Fadilah
 NIM : 322231614
 Prodi : Komputerisasi Akuntansi -->

<html>
    <head>
        <h1>Latihan PHP Dasar</h1>
    </head>
    
    <?php
    // Latihan 1: Pengenalan variable

// membuat variabel untuk menyimpan nama 
$nama = "Siti Nur Fadilah";

//Menampilkan nilai variable
echo "Nama saya adalah $nama <br>" ;

    //Latihan 2: Operasi Penjumlahan

$angka1 = "10";
$angka2 = "5";
$jumlah = $angka1+$angka2;
echo "Hasil penjumlahan: $jumlah <br>" ;

    //Latihan 3: Operasi pengurangan

$a = "20";
$b = "7";
$selisih = $a - $b ;
echo "Hasil pengurangan : $selisih <br>" ;

    //Latihan 4: Operasi Matematika
$nilaix = "3";
$nilaiy = "4";
$hasilKali = $nilaix * $nilaiy;
echo "Hasil Perkalian : $hasilKali <br>" ;

    //Latihan 5: Operasi Pembagian
$nilai1 = "100";
$nilai2 = "25" ;
$hasilBagi = $nilai1/$nilai2;
echo "Hasil Pembagian : $hasilBagi <br>" ;

    //Latihan 6: Modus (Sisa Bagi)
$bilangan1 = "17" ;
$bilangan2 = "5" ;
$sisa = $bilangan1 % $bilangan2 ;
echo "Sisa Pembagian : $sisa <br>" ;

    //Latihan 7 : Konversi Tipe Data
$umur = "19" ;
$umurSebagaiString = (string)$umur;
echo "Umur saya adalah $umurSebagaiString tahun <br>" ;

    //Latihan 8 : Menghitung Luas Persegi Panjang
$panjang = "8";
$lebar = "5";
$luas = $panjang * $lebar ;
echo "Luas persegi panjang $luas <br>" ;

    //Latihan 9 : Menghitung Volume Kubus
$sisi = "4";
$volume = $sisi * $sisi *$sisi;
echo "Volume kubus $volume <br>" ;

    //Latihan 10 : Menghitung Rata-rata Nilai
$nilai1 = "80";
$nilai2 = "90";
$nilai3 = "75";
$rataRata = ($nilai1 + $nilai2 + $nilai3) / 3;
echo "Rata-rata nilai $rataRata"

?>
</html>