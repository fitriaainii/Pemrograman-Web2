<?php 

// ini sebuah komentar
/* ini sebuah komentar */
# ini sebuah komentar

// macam macam menampilkan output
// echo "Hello World <br>";
// echo 'Hello World <br>';

// print_r("Fitria Nur Aini <br>");
// var_dump("STT Terpadu Nurul Fikri");

// membuat variable dan tipe data

// membuat variable user
// $nama = "Fitria Nur Aini";
// $umur = 18;
// $beratBadan = 45.0;
// $mahasiswa = true;
// echo "<br> Hello Nama saya $nama";
// echo "<br> Umur saya $umur";
// echo "<br> Berat badan saya $beratBadan kg";



// membuat variable sistem
// echo "<br> <br> Dokumen root " . $_SERVER['DOCUMENT_ROOT'];
// echo "<br> Nama file " . $_SERVER['PHP_SELF'];

// // membuat variable konstanta

// define('phi', 3.14);
// $jari = 8;
// $luas = phi * $jari * $jari;
// $keliling = 2 * phi * $jari;
// echo "<br> Luas lingkaran dengan jari-jari $jari = $luas cm2";
// echo "<br> Keliling lingkaran dengan jari-jari $jari = $keliling cm2";


// membuat tipe data array
$programs =["PHP", "Javascript", "HTML", "CSS"];
echo $programs[0];
echo $programs[1];
echo $programs[2];
echo $programs[3];
echo "<br> Jumlah data sebanyak " . count($programs);

?>