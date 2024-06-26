<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Contact;
use App\Models\Bill;
use App\Models\TypeProduct;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
class CategoryController extends Controller

{
    //  xóa sản phẩm
    
     public function getDelete(string $id_product)
     {
    $product = Product::find($id_product);

    if ($product) {
        // Xóa hình ảnh
        $imagePath = public_path( $product->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        // Xóa sản phẩm khỏi database
        $product->delete();

        return redirect()->back()->with('message', 'Bạn đã xóa thành công');
    } else {
        return redirect()->back()->with('error', 'Sản phẩm không tồn tại');
    }
    }

    //  kết thúc xá sản phẩm
    
    // View danh sách sản phẩm

     public function getListProduct()
    {
        $products = Product::all(); // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
        // return view('admin/category.list_product', compact('products')); // Truyền dữ liệu đến view

         return view('admin/category.list-product', compact('products'));
    }
//   kêt thúc view danh sách sản phẩm
    

//  thêm sản phẩm

    public function getAddProduct(Request $request)
    {
       $type_products = TypeProduct::all(); // Lấy tất cả loại sản phẩm từ cơ sở dữ liệu
       return view('admin/category.list-add', compact('type_products')); // Truyền dữ liệu đến view
    }

    public function postAddProduct(Request $request)
    {
        // Validate the request data
        $validation = Validator::make($request->all(), [
            'name_product' => 'required|string|max:300',
            'quantity' => 'required|integer',
            'TypeProduct_id' => 'required|exists:type_products,id_type',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // Kiểm tra nếu validation fails
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }
    // Tạo sản phẩm mới
        $product = new Product();
        $product->name_product = $request->input('name_product');
        $product->quantity = $request->input('quantity');
        $product->TypeProduct_id = $request->input('TypeProduct_id');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        // $product->image = 'image/products/'.$name;
        // Tự động cập nhật trạng thái dựa trên số lượng
        $product->status = ($request->input('quantity') > 0) ? 1 : 0;
        // Xử lý tải lên hình ảnh
       if($request->hasfile('image_file'))
        {
            $imagePath = public_path($product->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            $file = $request->file('image_file');
            $name = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('image/products/');
            $file->move($destinationPath, $name);
            $product->image = 'image/products/'.$name;
        }

    

        // Lưu sản phẩm vào database
        $product->save();

        // Redirect về trang danh sách sản phẩm hoặc trang khác tùy thuộc vào yêu cầu
        return redirect()->route('admin.getListProduct')->with('success', 'Product added successfully!');
    }

    
//  kêts thúc thêm sản phẩm


   public function getEditProduct($id_product)
    {
        $product = Product::findOrFail($id_product);
        $type_products = TypeProduct::all();
        // return view('edit', compact('listfood', 't_foods'));
        return view ('admin/category.list-edit',compact('product', 'type_products'));
    }


    public function updateProduct(Request $request, $id_product)
    {
        // Validate the request data
        $validation = Validator::make($request->all(), [
            'name_product' => 'required|string|max:300',
            'quantity' => 'required|integer',
            'TypeProduct_id' => 'required|exists:type_products,id_type',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image_file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // Kiểm tra nếu validation fails
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $product = Product::findOrFail($id_product);

        // Cập nhật thông tin sản phẩm
        $product->name_product = $request->input('name_product');
        $product->quantity = $request->input('quantity');
        $product->TypeProduct_id = $request->input('TypeProduct_id');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->status = ($request->input('quantity') > 0) ? 1 : 0;

        // Xử lý thay đổi hình ảnh
        if ($request->hasfile('image_file')) {
            // Xóa hình ảnh cũ
            $oldImagePath = public_path($product->image);
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }

            // Tải lên hình ảnh mới
            $file = $request->file('image_file');
            $name = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('image/products/');
            $file->move($destinationPath, $name);

            // Cập nhật đường dẫn hình ảnh
            $product->image = 'image/products/' . $name;
        }

        // Lưu thay đổi vào database
        $product->save();

        // Redirect về trang danh sách sản phẩm hoặc trang khác tùy thuộc vào yêu cầu
        return redirect()->route('admin.getListProduct')->with('success', 'Product updated successfully!');
    }
// kêt thúc chỉnh sửa sản phẩm
  
 public function getUser()
    {
        $users = User::all(); // Lấy tất cả các sản phẩm từ cơ sở dữ liệu
        // return view('admin/category.list_product', compact('products')); // Truyền dữ liệu đến view

        //  return view('admin/category.list-product', compact('products'));
        return view('admin/category.list-user', compact('users'));
    }
//  bắt đầu quản lý đơn hàng
  
public function getListOrder(){
    $bills = Bill::with('customer', 'billDetails')->get();

    return view('admin/category.list-order', compact('bills'));
    
}

// kết thúc quản lí đơn hàng

//  phần contact cho khách hàng

public function getListContact(){
     $contacts = Contact::all();
    return view('admin/category.list-contact', compact('contacts'));
}

public function getInputContact(Request $request){
         $email = $request->input('email');
         $contacts = Contact::all();
         return view('admin/category.list-inputContact', compact('contacts', 'email'));
    // return view('admin/category.list-inputContact');
}


public function postInputContact(Request $request){
      $email = $request->input('txtEmail');
      $feedbackContent = $request->input('feedback'); 
    //validate

    // kiểm tra có user có email như vậy không
    $user=User::where('email',$email)->get();
    //dd($user);
    if($user->count()!=0){
        
        $feedback = [
            'title' => 'Phản hồi của shop về vấn đề của bạn',
            'body' => $feedbackContent
        ];
        Mail::to($email)->send(new \App\Mail\ContactMail($feedback));
         $contact = Contact::where('email', $email)->first();
            if ($contact) {
                $contact->contact_status = 1;
                $contact->save();
            }
        Session::flash('message', 'Send email successfully!');
        // return view('admin/category.cate-contacts');  //về lại trang đăng nhập của khách
        $contacts = Contact::all();
        return view('admin/category.list-contact', compact('contacts', 'email'));
    }
    else {
          return redirect()->route('admin.getInputContact')->with('message','Your email is not right');
    }
}
// kết thúc contact

public function getEditOrder($id_bill)
{
    $bill = Bill::findOrFail($id_bill);
    return view('admin/category.list-editOrder', compact('bill'));
}

public function postEditOrder(Request $request, $id_bill)
{
    // Validate the request data
    $validation = Validator::make($request->all(), [
        'payment_status' => 'required|in:0,1',
        'order_status' => 'required|in:0,1,2,3'
    ]);

    // Kiểm tra nếu validation fails
    if ($validation->fails()) {
        return redirect()->back()->withErrors($validation)->withInput();
    }

    // Cập nhật thông tin đơn hàng
    $bill = Bill::findOrFail($id_bill);
    $bill->payment_status = $request->input('payment_status');
    $bill->order_status = $request->input('order_status');
    $bill->save();

    // Redirect về trang danh sách đơn hàng
    return redirect()->route('admin.getListOrder')->with('success', 'Order updated successfully!');
}


}
