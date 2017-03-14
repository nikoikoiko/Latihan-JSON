<?php
$json_data=file_get_contents("jsonprofil.json");
$obj = json_decode($json_data);
echo "NIM : "; echo $obj->{'nim'};
echo "<br>";
echo "NAMA : "; echo $obj->{'nama'};
echo "<br>";
echo "ALAMAT : ";echo $obj->{'alamat'};
echo "<br>";
echo "HP : ";echo $obj->{'no_hp'};
echo "<br>";
echo "Mata Kuliah Pertama : ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "Mata Kuliah Kedua : ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "Mata Kuliah Ketiga : ";echo $obj->mata_kuliah[2];
?>