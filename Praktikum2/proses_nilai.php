<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$tugas = $_GET['tugas'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$totalNilai = ($tugas + $uts + $uas) / 3;

if($totalNilai > 75){
    $keterangan = "LULUS";
} else {
    $keterangan = "Tidak LULUS";
}
?>