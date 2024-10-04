<?php
//membuat variabel array
$arraydata = [
    "nama" => "Nabilah",
    "usia" => 20,
    "pekerjaan" => "Mahasiswa",
    "hobi" => ["membaca komik","menari","mendengarkan musik"],
    "alamat" => "Semarang"
];

//encode array ke format json
$jsondata = json_encode($arraydata);
echo "data dalam format json: " . $jsondata;
?>
