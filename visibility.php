<?php 

class produk{
	public $judul ,
		   $penulis,
		   $penerbit;
		  
		  protected $diskon = 0;

		   private $harga;
		   

		   public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		   	$this->judul = $judul;
		    $this->penulis = $penulis;
		    $this->penerbit = $penerbit;
		    $this->harga = $harga;
		   
		    }


		    public function getHarga() {
	return $this->harga - ( $this->harga * $this->diskon / 100);
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


public function setDiskon( $diskon ) {
$this->diskon = $diskon;
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
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
 