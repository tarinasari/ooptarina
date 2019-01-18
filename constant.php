<?php 

// define('NAMA', 'Tarinasari');
// echo NAMA;
// echo "<br>";
// const UMUR = 16;
// echo UMUR;
// class coba {
// 	const NAMA = 'Tarinasari';
// }
// echo coba::NAMA;
// echo __FILE__
// function coba() {
// 	return __FUNCTION__;
// }
// echo coba();

class coba {
	public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;


 ?>