<?php

//membuat konstanta dengn huruf besar, cara 1
define ('NAMA','Nur Ahmad Soleh');

echo NAMA;

echo "<hr>";
//cara 2

const UMUR = 28;
echo UMUR;


//define tidak dapat masuk dalam kelas
//const dapat dibuat di dalam kelas

class coba{
    const NAMA= 'nur ahmad soleh';

}
//cara panggil
echo "<hr>";
echo coba:: NAMA;

//magic const

echo "<hr>";

echo __LINE__; 
//tambil baris atau 30 pada contoh

echo "<hr>";
echo __FILE__; 
//nama file
echo "<hr>";
echo __DIR__;

//dapat juga untuk mengetahui kelas dan function






?>