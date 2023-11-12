<?php

$sambung = mysqli_connect("localhost:3308","root","","identitas_mahasiswa");

$txtNum = $_POST['No'];
$txtPhoto = $_POST['Foto'];
$txtNIM = $_POST['NIM'];
$txtName = $_POST['Nama'];
$txtLesson = $_POST['Matakuliah'];
$txtScore = $_POST['Nilai Matakuliah'];

$sql = "INSERT INTO 'nilai_mahasiswa' ('','','','','','') VALUES ('$txtNum','$txtPhoto','$txtNIM','$txtName','$txtLesson','$txtScore')";

$tambah = mysqli_query($sambung,$sql);

if ($tambah){
    echo "Data Berhasil Ditambahkan!";
}

?>