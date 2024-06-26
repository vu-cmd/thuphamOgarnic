    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\PageController;
    use App\Http\Controllers\AdminController;
    use App\Http\Controllers\CategoryController;
    use App\Http\Controllers\ContactController;

    use App\Http\Middleware\AdminLoginMiddleware;


    Route::get('/', function () {
        return view('welcome');
    });

    // route admin đăng nhập
    Route::get('/admin/login',[AdminController::class,'getLogin'])->name('admin.getLogin');
    Route::post('/admin/login',[AdminController::class,'postLogin'])->name('admin.postLogin');
    Route::get('/admin/logout',[AdminController::class,'getLogout'])->name('admin.getLogout');

    // kết thúc route admin đăng nhập


  

    // route cho mục đăng nhập đăng kí của khách hàng

    Route::get('/dangxuat',[PageController::class,'getLogout'])->name('getLogout');

    Route::get('/dangnhap',[PageController::class,'getLogin'])->name('getLogin');
    Route::post('/dangnhap',[PageController::class,'postLogin'])->name('postLogin');

    Route::get('/dangky',[PageController::class,'getRegister'])->name('getRegister');
    Route::post('/dangky',[PageController::class,'postRegister'])->name('postRegister');


    //  kết thúc route đăng nhập đăng kí cho khách hàng


    // bắt đầu phần route cho các mục category của admin
    Route::prefix('admin')->group(function () {
        Route::middleware([AdminLoginMiddleware::class])->group(function () {
            Route::group(['prefix'=>'category'],function(){
                 // admin/category/danhsach
                 Route::get('listproduct',[CategoryController::class,'getListProduct'])->name('admin.getListProduct');
                //  Route::get('contacts',[CategoryController::class,'getContact'])->name('admin.getContact');
                Route::get('contact', [CategoryController::class, 'getListContact'])->name('admin.getListContact');
                  Route::get('inputcontact', [CategoryController::class, 'getInputContact'])->name('admin.getInputContact');
                   Route::post('inputcontact',[CategoryController::class,'postInputContact'])->name('admin.postInputContact');
                 Route::get('add',[CategoryController::class,'getAddProduct'])->name('admin.getAddProduct');
                 Route::post('add',[CategoryController::class,'postAddProduct'])->name('admin.postAddProduct');
                  Route::get('user', [CategoryController::class, 'getUser'])->name('admin.getUser');
                 Route::delete('xoa/{id_product}', [CategoryController::class,'getDelete'])->name('admin.getDelete');
                 Route::get('sua/{id_product}',[CategoryController::class,'getEditProduct'])->name('admin.getEditProduct');
                 Route::put('sua/{id_product}',[CategoryController::class,'updateProduct'])->name('admin.updateProduct');
                  Route::get('order', [CategoryController::class, 'getListOrder'])->name('admin.getListOrder');
            });
        });
             });

//  Route::get('/admin/category/contact', [CategoryController::class, 'getListContact'])->name('admin.getListContact');

//   Route::get('/admin/category/inputcontact', [CategoryController::class, 'getInputContact'])->name('admin.getInputContact');

//    Route::post('/admin/category/inputcontact',[CategoryController::class,'postInputContact'])->name('admin.postInputContact');
    // Route::get('/admin/category/edit/{id_product}', [CategoryController::class, 'getEditProduct'])->name('admin.getEditProduct');
    // Route::put('/admin/product/update/{id_product}', [CategoryController::class, 'updateProduct'])->name('admin.updateProduct');
 Route::get('/admin/category/edit/{id_bill}',[CategoryController::class,'getEditOrder'])->name('admin.getEditOrder');
 Route::put('/admin/category/edit/{id_bill}',[CategoryController::class,'postEditOrder'])->name('admin.postEditOrder');
    //   Route::delete('admin/product/{id_product}', [CategoryController::class,'getDelete'])->name('admin.getDelete');

    // Route::get('/admin/category/listproduct', [CategoryController::class, 'getListProduct'])->name('admin.getListProduct');

//   Route::get('/admin/category/user', [CategoryController::class, 'getUser'])->name('admin.getUser');

    // Route::get('/admin/category/addporduct', [CategoryController::class, 'getAddProduct'])->name('admin.getAddProduct');
    // Route::post('/admin/category/addporduct',[CategoryController::class,'postAddProduct'])->name('admin.postAddProduct');

    // kết thúc route cho các mục category của admin

//  Route::get('/admin/category/order', [CategoryController::class, 'getListOrder'])->name('admin.getListOrder');
    // route cho phần trang chủ

  Route::get('/trangchu',[PageController::class,'index'])->name('banhang.index');

 Route::get('/trangchu/detail/{id_product}',[PageController::class,'getDetailProduct'])->name('banhang.getDetailProduct');

// kết thúc route cho phần trang chủ
  
// phần giỏ hàng

//  Route::get('/trangchu/checkout',[PageController::class,'getCheckout'])->name('banhang.getCheckout');
// Route::post('/add-to-cart/{id}', [App\Http\Controllers\ProductController::class, 'addToCart'])->name('addToCart');

Route::get('/add-to-cart/{id_product}',[PageController::class,'addToCart'])->name('banhang.addtocart');
Route::get('/del-cart/{id_product}',[PageController::class,'delCartItem'])->name('banhang.xoagiohang');
Route::get('/trangchu/checkout',[PageController::class,'getCheckout'])->name('banhang.getCheckout');
Route::post('/trangchu/checkout',[PageController::class,'postCheckout'])->name('banhang.postdathang');

Route::put('/trangchu/updateCart', [PageController::class,'updateCart'])->name('banhang.updateCart');

Route::post('postSearch', [PageController::class, 'postSearch'])->name('postSearch');
// Route::post('/trangchu/addcart/{id_product]', [PageController::class, 'addToCart'])->name('banhang.addToCart');


// route phần admin list oder


// kết thúc  admin list oder

// trang liên hệ
Route::get('/trangchu/lienhe', [ContactController::class, 'getContact'])->name('banhang.getContact');
Route::post('/trangchu/lienhe',[ContactController::class,'postContact'])->name('banhang.postContact');

// kết thúc trang liên hệ


Route::get('/trangchu/donhang', [PageController::class, 'getOrderTracking'])->name('banhang.getOrderTracking');
    // Route::get('/lienhe', function () {
    //     return view('banhang.contact');
    // });

    // Route::get('/admin', function () {
    //     return view('admin.admin');
    // });

    // Route::get('/listadd', function () {
    //     return view('admin/category.list-add');
    // });
  
