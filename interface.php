<?php 

interface InfoProduk {
	 public function getInfoProduk();
}

abstract class produk{
	protected $judul ,
		   $penulis,
		   $penerbit,
		    $harga,
		     $diskon = 0;
		  
		  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		   	$this->judul = $judul;
		    $this->penulis = $penulis;
		    $this->penerbit = $penerbit;
		    $this->harga = $harga;
		   
		    }

public function setJudul( $judul) {
		$this->judul = $judul;
}


		    public function getJudul() {
				return $this->judul;
		    }
		    public function setPenulis( $penulis ) {
		    	$this->penulis = $penulis;
		    }
public function getPenulis() {
				return $this->penulis;
		    }
		    public function setPenerbit( $penerbit) {
		$this->penerbit = $penerbit;
}


		    public function getPenerbit() {
				return $this->penerbit;
			}
			public function setDiskon( $diskon ) {
$this->diskon = $diskon;
}
			public function getDiskon() {
				return $this->diskon;
			}
			public function setHarga( $harga) {
		$this->harga = $harga;
}
		    public function getHarga() {
	return $this->harga - ( $this->harga * $this->diskon / 100);
}





 public function getLabel() {
		   	return "$this->penulis, $this->penerbit";
}
 
abstract public function getInfo();

		 

}

class liveaction extends produk implements InfoProduk {
public $waktuMain;

public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){

	parent::__construct($judul, $penulis, $penerbit, $harga);
	$this->waktuMain = $waktuMain;
}
public function getInfo()  {
	$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		   	
	return $str;
		   }



	public function getInfoProduk() {
	$str = "liveaction: " . $this->getInfo() . "- {$this->waktuMain} jam.";
			return $str;
	} 

}

class novel extends produk implements InfoProduk{
	public $jumlahHalaman;

public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 100) {
	
	parent::__construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman);
$this->jumlahHalaman = $jumlahHalaman;
}
public function getInfo()  {
	$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		   	
	return $str;
		   }
	public function getInfoProduk(){
			$str = "novel : " . $this->getInfo() . " - {$this->jumlahHalaman} Halaman.";
			return $str;

		}
	}

class CetakInfoProduk {
	public $daftarProduk = array();

public function tambahProduk( Produk $produk ) {
	$this->daftarProduk[] = $produk;
}

	public function cetak() {
		$str = "DAFTAR PRODUK : <br>";

foreach( $this->daftarProduk as $p) {
	$str .= "-{$p->getInfoProduk()} <br>";
}

		return $str;
	}
}



$produk1 = new liveaction("kakegurui", "mahiro takasugi", "tarinasari", 10000000, 50, "live-action");
$produk2 = new novel("IT", "Ina Zakaria", "Gramedia", 100000,100, "novel");

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();