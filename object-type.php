<?php 

class produk{
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

		   public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		   	$this->judul = $judul;
		    $this->penulis = $penulis;
		    $this->penerbit = $penerbit;
		    $this->harga = $harga;

		   }

		   public function getLabel() {
		   	return "$this->penulis, $this->penerbit";
		   }
}


class CetakInfoProduk {
	public function cetak( produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
		return $str;
	}
}



$produk1 = new produk("kakegurui", "mahiro takasugi", "tarinasari", 10000000);
$produk2 = new Produk("IT", "Ina Zakaria", "Gramedia", 100000);


  echo "Live-action : " . $produk1->getLabel();
 echo "<br>";
 echo "Novel : " . $produk2->getLabel();
 echo "<br>";
 $infoproduk1 = new CetakInfoProduk();
 echo $infoproduk1->cetak($produk1);
 