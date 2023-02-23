<?php
$nilai1 =[
    "id"    =>1,
    "nim"   =>"22089",
    "uts"   =>89,
    "uas"   =>80,
    "tugas"   =>90,

];
$nilai2 =[
    "id"    =>2,
    "nim"   =>"24089",
    "uts"   =>78,
    "uas"   =>86,
    "tugas"   =>45

];
$nilai3 =[
    "id"    =>3,
    "nim"   =>"25089",
    "uts"   =>74,
    "uas"   =>83,
    "tugas"   =>41

];

$nilai4 =[
    "id"    =>4,
    "nim"   =>"15089",
    "uts"   =>73,
    "uas"   =>84,
    "tugas"   =>42

];

$kumpulannilai = [$nilai1, $nilai2, $nilai3, $nilai4];

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Siswa</title>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Daftar Mahasiswa</h1>
            <table class="table table-striped border">
                <thead>
                    <tr class="thead-dark">
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">UTS</th>
                    <th scope="col">UAS</th>
                    <th scope="col">Tugas</th>
                    <th scope="col">Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($kumpulannilai as $nilai):?>
                        <tr>
                            <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"])/3;?>
                            <th scope="row"><?= $nilai["id"];?></th>
                            <td><?= $nilai["nim"];?></td>
                            <td><?= $nilai["uts"];?></td>
                            <td><?= $nilai["uas"];?></td>
                            <td><?= $nilai["tugas"];?></td>
                            <td><?= number_format($nilai_akhir, 2, ",",".");?></td>
                        </tr>
                    <?php endforeach;?>
                    
                </tbody>
            </table>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>