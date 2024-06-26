<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart
{
	public $items = null;  //$items là mảng liên hợp, cụ thể $items=array("product_id"=>array("qty","price","item")); ->item lại là 1 mảng Product
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	//thêm 1 mặt hàng item có id cụ thể vào giỏ hàng
	public function add($item, $id_product){
		// $mathang = ['qty'=>0, 'price' => $item->promotion_price==0?$item->unit_price:$item->promotion_price, 'item' => $item];
		$mathang = ['qty'=>0, 'price' => $item->price, 'item' => $item];
		//$mathang: lưu số lượng, tổng tiền của 1 item (mặt hàng) trong giỏ hàng
		//qty: số lượng của 1 item (mặt hàng) trong giỏ hàng
		//price: tổng tiền của 1 item (mặt hàng) trong giỏ hàng
		//item: là mặt hàng trong giỏ hàng
		if($this->items){ //nếu items != null tức có mặt hàng trong cart thì
			if(array_key_exists($id_product, $this->items)){ //array_key_exists() là hàm kiểm tra id của item (mặt hàng) được thêm vào đã có trong giỏ hàng chưa? nếu có thì lấy về item(mặt hàng) có id này rồi lưu vào biến $mathang 
				$mathang = $this->items[$id_product];
			}
		}
		$mathang['qty']++;  //tăng số lượng của item vừa thêm lên 1
		$mathang['price'] = $item->price * $mathang['qty'];
		// $mathang['price'] = $item->promotion_price==0?$item->unit_price:$item->promotion_price * $mathang['qty'];
		$this->items[$id_product] = $mathang;
		$this->totalQty++;
		$this->totalPrice += ($item->price);
		// $this->totalPrice += ($item->promotion_price==0?$item->unit_price:$item->promotion_price);
	}
	//thêm nhiều mặt hàng item có số lượng soluong có id cụ thể vào giỏ hàng
	public function addMany($item, $id_product,$soluong){
		// $mathang = ['qty'=>0, 'price' => $item->promotion_price==0?$item->unit_price:$item->promotion_price, 'item' => $item];
		$mathang = ['qty'=>0, 'price' => $item->price, 'item' => $item];

		//$mathang: lưu số lượng, tổng tiền của 1 item (mặt hàng) trong giỏ hàng
		//qty: số lượng của 1 item (mặt hàng) trong giỏ hàng
		//price: tổng tiền của 1 item (mặt hàng) trong giỏ hàng
		//item: là mặt hàng trong giỏ hàng
		if($this->items){ //nếu items != null tức có mặt hàng trong cart thì
			if(array_key_exists($id_product, $this->items)){ //array_key_exists() là hàm kiểm tra id của item (mặt hàng) được thêm vào đã có trong giỏ hàng chưa? nếu có thì lấy về item(mặt hàng) có id này rồi lưu vào biến $mathang 
				$mathang = $this->items[$id_product];
			}
		}
		$mathang['qty']=$mathang['qty']+=$soluong;  //tăng số lượng của item vừa thêm lên số lượng
		// $mathang['price'] = ($item->promotion_price==0?$item->unit_price:$item->promotion_price) * $mathang['qty'];
		$mathang['price'] = ($item->price) * $mathang['qty'];
		$this->items[$id_product] = $mathang;
		$this->totalQty +=$soluong;
        // $this->totalPrice += ($item->promotion_price==0?$item->unit_price:$item->promotion_price) * $soluong;
		 $this->totalPrice += ($item->price) * $soluong;
	}
	//xóa 1
	public function reduceByOne($id_product){
		$this->items[$id_product]['qty']--;
		$this->items[$id_product]['price'] -= $this->items[$id_product]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id_product]['item']['price'];
		if($this->items[$id_product]['qty']<=0){
			unset($this->items[$id_product]);  //hàm unset(): xóa giá trị của biến
		}
	}
	//xóa nhiều
	public function removeItem($id_product){
		$this->totalQty -= $this->items[$id_product]['qty'];
		$this->totalPrice -= $this->items[$id_product]['price'];
		unset($this->items[$id_product]);
	}



	public function updateQuantity($item, $id_product, $soluong)
{
    $mathang = [
        'qty' => 0,
        'price' => $item->price,
        'item' => $item
    ];

    if ($this->items) {
        if (array_key_exists($id_product, $this->items)) {
            $mathang = $this->items[$id_product];
        }
    }

    $this->totalQty -= $mathang['qty'];
    $this->totalPrice -= ($mathang['item']->price * $mathang['qty']);

    $mathang['qty'] = $soluong;
    $mathang['price'] = $item->price * $soluong;
    $this->items[$id_product] = $mathang;

    $this->totalQty += $soluong;
    $this->totalPrice += ($item->price * $soluong);
}


}
