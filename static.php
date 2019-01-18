<?php 

// class ContohStatic {
// 	public static $angka = 1;

// 	public static function konnichiwa() {
// 		return "konnichiwa." . self::$angka++ . "kali.";
// 	}
// }

// echo  ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::konnichiwa();
// echo "<hr>";
// echo ContohStatic::konnichiwa();


class contoh {
	public static $angka = 1;

	public function konnichiwa() {
		return "konnichiwa" . self::$angka++ . " kali. <br>";
	}
}

$obj = new contoh;
echo $obj->konnichiwa();
echo $obj->konnichiwa();
echo $obj->konnichiwa();

echo "<hr>";

$obj2 = new contoh;
echo $obj2->konnichiwa();
echo $obj2->konnichiwa();
echo $obj2->konnichiwa();


 ?>