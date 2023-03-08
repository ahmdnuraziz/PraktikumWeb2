<?php
// buat array
$animals = ["burung", "kucing", "nyamuk", "singa"];
echo $animals[1] . "<br>";

echo $animals[3];

foreach ($animals as $animal) {
    echo $animal . "<br>";
}

// buat array assosiative
$mahasiswa = ["nama"=>"Aziz", "jurusan" => "TI", "semester"=>2];
echo $mahasiswa["jurusan"] . "<br>";

// nampilin semua data
foreach($mahasiswa as $key=>$value){
    echo "key : " . $key . " value : " . $value . "<br>";
}

// array multi dimensi

$dosen = [
    ["pak rojul", "web"],
    ["pak reza", "DDP"],
    ["pak luqman", "OS"]
];

echo $dosen[0][0];

//  00 01 10


?>