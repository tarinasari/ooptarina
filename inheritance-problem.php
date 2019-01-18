<?php 

class produk{
	public $judul ,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jumlahHalaman,
		   $waktuMain,
		   $tipe;

		   public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0, $tipe) {
		   	$this->judul = $judul;
		    $this->penulis = $penulis;
		    $this->penerbit = $penerbit;
		    $this->harga = $harga;
		    $this->jumlahHalaman = $jumlahHalaman;
		    $this->waktuMain = $waktuMain;
		    $this->tipe = $tipe;

		   }

		   public function getLabel() {
		   	return "$this->penulis, $this->penerbit";
		   }
		   public function getInfoProduk() {

		   	$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		   	if( $this->tipe == "live-action") {
		   		$str .= " - {$this->jumlahHalaman} Halaman.";
		   	} else if( $this->tipe == "novel") {
		   		$str .= " - {$this->waktuMain} Jam.";
		   	}

		   	return $str;
		   

}
}


class CetakInfoProduk {
	public function cetak( produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
		return $str;
	}
}



$produk1 = new produk("kakegurui", "mahiro takasugi", "tarinasari", 10000000, 0, 50, "live-action");
$produk2 = new Produk("IT", "Ina Zakaria", "Gramedia", 100000,100, 0, "novel");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

