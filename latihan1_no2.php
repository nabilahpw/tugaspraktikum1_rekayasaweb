<?php
// Membuat variabel yang berisi data JSON
$jsondata = '{"nama":"Nabilah","usia":20,"pekerjaan":"Mahasiswa","hobi":["membaca komik","menari","mendengarkan musik"],"alamat":"Semarang"}';

// Decode JSON menjadi PHP Object
$objectData = json_decode($jsondata);
echo "Mengakses data sebagai Object: \n";
echo "Nama: " . $objectData->nama . "\n";
echo "Usia: " . $objectData->usia . "\n";
echo "Pekerjaan: " . $objectData->pekerjaan . "\n";
echo "Hobi pertama: " . $objectData->hobi[0] . "\n";
echo "Alamat: " . $objectData->alamat . "\n";

echo "\n"; // Line break

// Decode JSON menjadi PHP Array
$arrayData = json_decode($jsondata, true); // true akan mengembalikan sebagai array
echo "Mengakses data sebagai Array: \n";
echo "Nama: " . $arrayData['nama'] . "\n";
echo "Usia: " . $arrayData['usia'] . "\n";
echo "Pekerjaan: " . $arrayData['pekerjaan'] . "\n";
echo "Hobi pertama: " . $arrayData['hobi'][0] . "\n";
echo "Alamat: " . $arrayData['alamat'] . "\n";
?>
