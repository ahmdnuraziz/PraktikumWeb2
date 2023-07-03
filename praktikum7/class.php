<?php 
// bmi pasien
class bmiPasien 
{
    // tulis properti dan method
    public $nama, $berat, $tinggi, $umur, $jk;
    //bikin method construc
    public function __construct($nama, $berat, $tinggi, $umur, $jk)
    {
        //akses properti
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk = $jk;
    }

    // bikin hasil method
    public function hasilBMI()
    {
        $tinggi_m = $this->tinggi / 100;
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        return round($bmi);
    }

    public function statusBMi()
    {
        $bmi = $this->hasilBMI();
        if ($bmi < 18.5) {
            return "Kekurangan berat badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Berat badan normal";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan berat badan";
        } else {
            return "Obesitas";
        }
    }
}

// buat objek
// $pasien = new bmiPasien("Aziz", "61", "169", "21", "L")
// // tampilin
// echo $pasien->nama . "<br>":
// echo $pasien->berat . "<br>";
// echo $pasien->hasilBMI() . "<br>";
// echo $pasien->statusBMI() . "<br>";


?>