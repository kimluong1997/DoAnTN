<?php

namespace App;

class Cart
{
	public $sanpham = null;
	public $TongSL = 0;
	public $TongTien = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->sanpham = $oldCart->sanpham;
			$this->TongSL = $oldCart->TongSL;
			$this->TongTien = $oldCart->TongTien;
		}
	}

	public function add($SP, $id){
		$giohang = ['SL'=>0, 'Gia' => $SP->DonGia, 'SP' => $SP];
		if($this->sanpham){
			if(array_key_exists($id, $this->sanpham)){
				$giohang = $this->sanpham[$id];
			}
		}
		$giohang['SL']++;
		$giohang['Gia'] = $SP->DonGia * $giohang['SL'];
		$this->sanpham[$id] = $giohang;
		$this->TongSL++;
		$this->TongTien += $SP->DonGia;
	}
	//xóa 1
	public function reduceByOne($id){
		$this->sanpham[$id]['SL']--;
		$this->sanpham[$id]['Gia'] -= $this->sanpham[$id]['SP']['Gia'];
		$this->TongSL--;
		$this->TongTien -= $this->sanpham[$id]['SP']['Gia'];
		if($this->sanpham[$id]['SL']<=0){
			unset($this->sanpham[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->TongSL -= $this->sanpham[$id]['SL'];
		$this->TongTien -= $this->sanpham[$id]['Gia'];
		unset($this->sanpham[$id]);
	}
}
