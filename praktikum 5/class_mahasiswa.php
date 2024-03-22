<?php

class Mahasiswa {
    // property
    public $ipk;
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;

    // Method
    function __construct($_nim,$_nama){
        $this ->nim = $_nim;
        $this ->nama = $_nama;
    }
    function predikat_ipk(){
        if($this->ipk < 2.0){
            return 'CUKUP';
        } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) {
            return 'baik';
        } elseif ($this->ipk >= 3.0 && $this->ipk < 3.75){
            return 'MEMUASKAN';
        } elseif ($this->ipk >= 3.75 && $this->ipk <= 4.0){
            return 'NILAI DILUAR JANGKAUAN';
        }
    }
}

// instance object
$mahasiswa1 = new Mahasiswa(10110223291,'siska');
$mahasiswa1->ipk = 3.37;
$mahasiswa1->prodi = 'teknik informatika';
$mahasiswa1->angkatan = 2023;