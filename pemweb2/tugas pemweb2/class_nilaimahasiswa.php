<?php
class NilaiMahasiswa {
    public $matakuliah;
    public $nilai;
    public $nim;

    function __construct ($matkul, $nilai, $nim) {
        $this->matakuliah = $matkul;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }
    function kelulusan() {
        if ($this->nilai >= 56) {
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        }
    }
    function grade() {
        if ($this->nilai >= 90) {
            return "A+";
        } elseif ($this->nilai >= 85) {
            return "A";
        } elseif ($this->nilai >= 80) {
            return "A-";
        } elseif ($this->nilai >= 75) {
            return "B+";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 65) {
            return "B-";
        } elseif ($this->nilai >= 60) {
            return "C+";
        } elseif ($this->nilai >= 55) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }
}
?>
