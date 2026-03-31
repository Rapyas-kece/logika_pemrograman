<?php
echo "  Tugas Logika Pemrograman X PPLG 2 <br> ";
echo "Kelompok 4: Alfian Dzaky (03) dan Ibnu Zaky (15) <br><br>";

//soal 1 //
// hanya satu kondisi positif //
// variabel menjaga kebersihan || lingkungan //

$menjaga_kebersihan = true;
if ($menjaga_kebersihan) {
    echo "hasil: lingkungan menjadi bersih dan sehat";
} else {
    echo "hasil: kondisi tidak terpenuhi 
    <br><br>";}

    //soal 2//
    //hanya satu negatif/
    //variabel mematuhi peraturan//

$menjaga_peraturan = false;
if ($menjaga_peraturan) {
    echo "hasil: jika mematuhi peraturan maka lingkungan bersih dan sehat <br>";
} else {
    echo "hasil: kondisi tidak terpenuhi <br>";
}

//soal 3//
//2 kondisi//
//variabel menjaga tanaman hias//

$menjaga_tanaman = true;
if($menjaga_tanaman) {
    echo "hasil: jika menjaga tanaman maka akan tumbuh subur <br>";} 
else{
    echo "hasil: kondisi tidak terpenuhi";
}

$tanaman_subur = true ;
if ($tanaman_subur) {
    echo "hasil: tanaman tumbuh subur dan indah <br>";}
    else {
    echo "hasil: kondisi tidak terpenuhi <br>";
}

//soal 4//
//5-7 kondisi//
//variabel perlombaan//


$kondisi = 100;

if ($kondisi == 1) {
    echo "Kondisi 1: Babak penyisihan dimulai.<br>";
    echo "Hasil: Semua peserta harus melakukan registrasi ulang.<br>";
} elseif ($kondisi == 2) {
    echo "Kondisi 2: Waktu perlombaan hampir habis.<br>";
    echo "Hasil: Panitia memberikan tanda peringatan.<br>";
} elseif ($kondisi == 3) {
    echo "Kondisi 3: Peserta melanggar aturan.<br>";
    echo "Hasil: Juri memberikan pengurangan poin.<br>";
} elseif ($kondisi == 4) {
    echo "Kondisi 4: Peserta tampil dengan percaya diri.<br>";
    echo "Hasil: Penilaian peserta lebih maksimal.<br>";
} elseif ($kondisi == 5) {
    echo "Kondisi 5: Peserta memenangkan babak semifinal.<br>";
    echo "Hasil: Peserta berhak masuk ke babak final.<br>";
} elseif ($kondisi == 6) {
    echo "Kondisi 6: Peserta memperoleh nilai tertinggi di final.<br>";
    echo "Hasil: Peserta dinobatkan sebagai juara pertama.<br>";
} elseif ($kondisi == 7) {
    echo "Kondisi 7: Terjadi hasil seri.<br>";
    echo "Hasil: Juri mengadakan babak tambahan untuk menentukan pemenang.<br>";
} else {
    echo "Kondisi tidak dikenali.<br>";
}

//soal 5//
//variael kemenangan peserta//

$kondisi = 2;
if ($kondisi == 1 ) {
    echo "peserta menang babak penyisihan <br>";
}

elseif ($kondisi == 2) {
    echo "masuk final <br>";
} 
elseif ($kondisi == 3) {
    echo "menjadi juara <br>" ;
} else {
    echo "kondisi tidak dikenali <br>";
}

//soal 6//
//variabel pajak dan pengelolaan dana//

$kondisi= 1 ;
if($kondisi == 1) {
    echo "masyarakat membayar pajak tepat waktu dan pemerintah mengelola dana dengan baik <br>";
}elseif ($kondisi == 2) {
    echo "maka pembangunan berjalan lancar. <br>" ;
} else{ 
    echo "kondisi tidak dikenali <br>";
}

//soal 7//
//pelanggaran aturan//
$pelanggaran_aturan = 1 ;
if($pelanggaran_aturan == 1) {
    echo "Jika masyarakat melanggar aturan maka akan terjadi konflik sosial.
<br>";
}
elseif($pelanggaran_aturan == 2) {
    echo "tidak menghormati hak orang lain maka akan terjadi konflik sosial.
 <br>";
}
else{
    echo "kondisi tidak dikenali <br>";
}

?>