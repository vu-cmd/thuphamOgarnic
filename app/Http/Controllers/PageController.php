<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Validation\ValidatesRequests;
class PageController extends Controller
{
use ValidatesRequests;


//   bắt đầu đăng nhập
public function getLogin(){
   return view('banhang.login');
}
  
public function postLogin(Request $req){
    $this->validate($req,
    [
        'email'=>'required|email',
        'password'=>'required|min:6|max:20'
    ],
    [
        'email.required'=>'Vui lòng nhập email',
        'email.email'=>'Không đúng định dạng email',
        'password.required'=>'Vui lòng nhập mật khẩu',
        'password.min'=>'Mật khẩu ít nhất 6 ký tự'
    ]
    );
    $credentials=['email'=>$req->email,'password'=>$req->password];
    if(Auth::attempt($credentials)){//The attempt method will return true if authentication was successful. Otherwise, false will be returned.
        return redirect('/trangchu')->with(['flag'=>'alert','message'=>'Đăng nhập thành công']);
    }
    else{
        return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
    }
}
//  kết thúc đăng nhập

// bắt đầu đăng kí

public function getRegister(){
       
    return view('banhang.register');
}

public function postRegister(Request $req){
    $this->validate($req, [
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|max:20',
        'name' => 'required',
        'confirm-password' => 'required|same:password',
        'phone' => 'required',
        'address' => 'required',
    ], [
        'email.required' => 'Vui lòng nhập email',
        'email.email' => 'Không đúng định dạng email',
        'email.unique' => 'Email đã có người sử dụng',
        'password.required' => 'Vui lòng nhập mật khẩu',
        'confirm-password.same' => 'Mật khẩu không giống nhau',
        'password.min' => 'Mật khẩu ít nhất 6 ký tự',
        'phone.required' => 'Vui lòng nhập số điện thoại',
        'address.required' => 'Vui lòng nhập địa chỉ',
    ]);

    $user = new User();
    $user->name = $req->name;
    $user->email = $req->email;
    $user->password = Hash::make($req->password);
    $user->phone = $req->phone; // Gán giá trị cho trường phone
    $user->address = $req->address; // Gán giá trị cho trường address
    $user->level=2;  //level=1: admin; level=2:khách hàng;
    $user->save();
    
    return redirect()->back()->with('success', 'Tạo tài khoản thành công');
}


//  kết thúc đăng kí

// đăng xuất
public function getLogout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('banhang.index');
    }
    //  kết thúc đăng xuất

// phần view cho trang chủ và trang chi tiết

    public function index()
    {
        
        $products = Product::all(); // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
        return view('banhang.index',compact('products') );
        
    }
 
    public function postSearch (Request $request){
       $query = $request->input('search');

    if ($query) {
        // Tìm kiếm sản phẩm theo tên
        $products = Product::where('name_product', 'LIKE', '%' . $query . '%')->get();
    } else {
        // Lấy tất cả sản phẩm nếu không có từ khóa tìm kiếm
        $products = Product::all();
    }

      return view('banhang.index', compact('products'));
    }

    public function getDetailProduct(string $id_product){
        $product=Product::findOrFail($id_product);
        return view('banhang.detail',compact('product'));
    }
// kết thúc phần view cho trang chủ và trang chi tiết


// phần giỏ hàng

  public function getCheckout(){
      $cart = session('cart');
      $product = $cart->items ?? [];
      return view('banhang.checkout', compact('product'));
  
  }

  public function addToCart(Request $request,$id_product){
        $soluong = $request->input('soluong', 1); 
        $product=Product::find($id_product);
         if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
        }

        if ($soluong > $product->quantity) {
            return redirect()->back()->with('error', 'Số lượng yêu cầu vượt quá số lượng sản phẩm có sẵn.');
        }

        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->addMany($product,$id_product, $soluong);
        $request->session()->put('cart',$cart);
        return redirect()->back();
     }

public function delCartItem($id_product){
        $oldCart=Session::has('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->removeItem($id_product);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }else Session::forget('cart');
        return redirect()->back();
    }

   public function postCheckout(Request $request){
    
        $cart=Session::get('cart');
        
        $customer=new Customer();
        $customer->name=$request->input('name');
        $customer->gender=$request->input('gender');
        $customer->email=$request->input('email');
        $customer->address=$request->input('address');
        $customer->phone_number=$request->input('phone_number');
        $customer->note=$request->input('notes');
        $customer->save();
        
       
        $bill=new Bill();
        $bill->id_customer=$customer->id_customer;
        $bill->date_order=date('Y-m-d');
        $bill->total=$cart->totalPrice;
        $bill->payment=$request->input('payment');
        $bill->note=$request->input('notes');
        $bill->save();
        
        foreach($cart->items as $key=>$value)
        {
            $bill_detail=new BillDetail();
            $bill_detail->id_bill=$bill->id_bill;
            $bill_detail->id_product=$key;
            $bill_detail->quantity=$value['qty'];
            $bill_detail->unit_price=$value['price'];
            $bill_detail->save();

            // lấy thông tin sản phẩm
             $product = Product::find($key);
          if ($product) {
            $productsDetails[] = [
                'name' => $product->name_product,
                'quantity' => $value['qty']
            ];
        }
        }
       

        Session::forget('cart');

        
        $orderDetails = [
        'order_id' => $bill->id_bill,
        'customer_name' => $customer->name,
        'total_price' => $cart->totalPrice,
        'payment_status' => $bill->payment,
        'phone_number' => $customer->phone_number,
        'address' => $customer->address,
        'products' => $productsDetails,
        // Các thông tin khác nếu cần
    ];
    
    // Gửi email xác nhận đơn hàng
        Mail::to($customer->email)->send(new \App\Mail\OrderMail($orderDetails));
        return redirect('/trangchu')->with('success', 'Đặt hàng thành công');

    }

   public function updateCart(Request $request)
{
    // Lấy giỏ hàng cũ từ session
    $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
    $cart = new Cart($oldCart);

    // Lấy dữ liệu số lượng từ request
    $soluong = $request->input('soluong');

    // Kiểm tra nếu 'soluong' không phải là mảng
    if (!is_array($soluong)) {
        return redirect()->back()->with('error', 'Dữ liệu số lượng không hợp lệ.');
    }

    // Duyệt qua từng sản phẩm và cập nhật số lượng
    foreach ($soluong as $id_product => $quantity) {
        $product = Product::find($id_product);

        // Kiểm tra nếu sản phẩm không tồn tại
        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
        }

        // Kiểm tra số lượng mới
        if ($quantity > $product->quantity) {
            return redirect()->back()->with('error', 'Số lượng yêu cầu vượt quá số lượng sản phẩm có sẵn.');
        }

        // Cập nhật số lượng sản phẩm trong giỏ hàng
        $cart->updateQuantity($product, $id_product, $quantity);
    }

    // Lưu lại giỏ hàng mới vào session
    $request->session()->put('cart', $cart);

    // Redirect về trang giỏ hàng
    return redirect()->back()->with('success', 'Số lượng sản phẩm đã được cập nhật.');
}
//  kết thúc giỏ hàng


// theo dõi đơn đặt hàng 
public function getOrderTracking(){
      $orderDetails = [];
    return view('banhang.OrderTracking', compact($orderDetails));
}

// kết thúc theo dõi đơn đặt hàng 
}
