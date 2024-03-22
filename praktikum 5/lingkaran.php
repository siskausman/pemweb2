<?php

class Lingkaran {
// Property / Variable
Private $jari;
const PHI = 3.14;

// Method / Function
function __construct($r){
    $this->jari = $r;

}
function getluas(){
    return self::PHI * $this->jari * $this->jari;
}


function getkeliling(){
    return 2 * self::PHI * $this->jari;
}
}

//Instance Object
$lingkaran1 = new Lingkaran(10);
echo 'Luas Lingkaran1 = ' . $lingkaran1->getluas();