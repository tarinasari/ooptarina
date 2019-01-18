<?php 

class produk{
	public $judul ,
		   $penulis,
		   $penerbit,
		   $harga;
		   

		   public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		   	$this->judul = $judul;
		    $this->penulis = $penulis;
		    $this->penerbit = $penerbit;
		    $this->harga = $harga;
		   
		    

		   }

		   public function getLabel() {
		   	return "$this->penulis, $this->penerbit";
		   }
		   public function getInfoProduk() {
	$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		   	
	return $str;
		   }

}

class liveaction extends produk {
public $waktuMain;

public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){

	parent::__construct($judul, $penulis, $penerbit, $harga);
	$this->waktuMain = $waktuMain;
}
	public function getInfoProduk() {
	$str = "liveaction: " . parent::getInfoProduk() . "- {$this->waktuMain} jam.";
			return $str;
	} 

}

class novel extends produk {
	public $jumlahHalaman;

public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 100) {
	
	parent::__construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman);
$this->jumlahHalaman = $jumlahHalaman;
}

	public function getInfoProduk(){
			$str = "novel : " . parent::getInfoProduk() . " - {$this->jumlahHalaman} Halaman.";
			return $str;

		}
	}

class CetakInfoProduk {
	public function cetak( produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
		return $str;
	}
}



$produk1 = new liveaction("kakegurui", "mahiro takasugi", "tarinasari", 10000000, 50, "live-action");
$produk2 = new novel("IT", "Ina Zakaria", "Gramedia", 100000,100, "novel");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

 