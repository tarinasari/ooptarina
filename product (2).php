<?php 

class produk{
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

		   public function getLabel() {
		   	return "$this->penulis, $this->penerbit";
		   }

}

// $produk1 = new produk();
// $produk1->judul = "kakegurui";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "koenokatachi";
// $produk2->tambahproperty = "haha";
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "kakegurui";
$produk3->penulis = "mahiro takasugi";
 $produk3->penerbit = "tarinasari";
 $produk3->harga = 100000000;
 
 $produk4 = new Produk();
 $produk4->judul = "IT";
 $produk4->penulis = "Ina zakaria";
 $produk4->penerbit = "Gramedia";
 $produk4->harga = 100000;

 echo "live-action : " . $produk3->getLabel();
 echo "<br>";
 echo "novel : " . $produk4->getLabel();
