<?php

$sambung = mysqli_connect("localhost","root","","identitas_mahasiswa");

function query ($query){
    
    global $sambung;
    $hasil = mysqli_query($sambung,$query);

    $baris = [];

    while($baris = mysqli_fetch_assoc($hasil)){
        $baris[] = $baris;
    }
    return $baris;  
}
?>