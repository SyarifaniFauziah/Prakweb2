<?php
// class nilai 
class Mahasiswa{
    //property
public $nim,$matkul,$uts,$uas,$praktikum;

// method 

function __construct($nim,$matkul,$uts,$uas,$praktikum){
    //fungsi this -> memanggil property dari luar method 
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->uts = $uts;
    $this->uas = $uas;
    $this->praktikum = $praktikum;

}

public function Hitung(){
    return ($this->uts + $this->uas + $this->praktikum)/3;
}


class Skor {
    private $skor;

    public function __construct($skor) {
        $this->skor = $skor;
    }

    public function getGrade() {
        if ($this->skor >= 0 && $this->skor < 40) {
            return "Tidak Memadai";
        } elseif ($this->skor >= 40 && $this->skor < 60) {
            return "Kurang";
        } elseif ($this->skor >= 60 && $this->skor < 100) {
            return "Cukup";
        } elseif ($this->skor >= 100 && $this->skor < 150) {
            return "Baik";
        } else {
            return "Skor invalid";
        }
    }
}

// Example usage:
$skor = new Skor(75);
echo $skor->getGrade(); // Output: Cukup

}
