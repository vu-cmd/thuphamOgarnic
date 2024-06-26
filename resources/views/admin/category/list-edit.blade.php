@extends('admin.master')
@section('content')
  <style>
    .Choicefile {
      display: block;
      background: #14142B;
      border: 1px solid #fff;
      color: #fff;
      width: 150px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      padding: 5px 0px;
      border-radius: 5px;
      font-weight: 500;
      align-items: center;
      justify-content: center;
    }

    .Choicefile:hover {
      text-decoration: none;
      color: white;
    }

    #uploadfile,
    .removeimg {
      display: none;
    }

    #thumbbox {
      position: relative;
      width: 100%;
      margin-bottom: 20px;
    }

    .removeimg {
      height: 25px;
      position: absolute;
      background-repeat: no-repeat;
      top: 5px;
      left: 5px;
      background-size: 25px;
      width: 25px;
      /* border: 3px solid red; */
      border-radius: 50%;

    }

    .removeimg::before {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      content: '';
      border: 1px solid red;
      background: red;
      text-align: center;
      display: block;
      margin-top: 11px;
      transform: rotate(45deg);
    }

    .removeimg::after {
      /* color: #FFF; */
      /* background-color: #DC403B; */
      content: '';
      background: red;
      border: 1px solid red;
      text-align: center;
      display: block;
      transform: rotate(-45deg);
      margin-top: -2px;
    }
  </style>

  <main class="app-content" style="margin-top: 50px;">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách sản phẩm</li>
        <li class="breadcrumb-item"><a href="#">Chỉnh sửa sản phẩm</a></li>
      </ul>
    </div>
       @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <form action="{{ route('admin.updateProduct', $product->id_product) }}" method="POST" enctype="multipart/form-data" class="row">
                @csrf
                @method('PUT')
              <div class="form-group col-md-3">
                <label class="control-label">Tên sản phẩm</label>
                <input class="form-control" type="text" id="name_product" name="name_product" value="{{ $product->name_product }}" required>
              </div>
              <div class="form-group  col-md-3">
                <label class="control-label">Số lượng</label>
                <input class="form-control" type="number" name="quantity" value="{{ $product->quantity }}">
              </div>
            
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Danh mục</label>
                <select class="form-control"id="TypeProduct_id" name="TypeProduct_id">
                  <option>-- Chọn danh mục --</option>
                    @foreach($type_products as $type_product)
                    <option value="{{ $type_product->id_type }}" {{ $product->TypeProduct_id == $type_product->id_type ? 'selected' : '' }}>
                {{ $type_product->Type }}
            </option>
                     @endforeach
                </select>
              </div>
           
              <div class="form-group col-md-3">
                <label class="control-label">Giá bán</label>
                <input class="form-control" type="text" id="price" name="price" value="{{ $product->price }}">
              </div>
               <div class="form-group col-md-12">
                            <label class="control-label">Ảnh sản phẩm</label>
                            <input type="file" name="image_file">
                        </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mô tả sản phẩm</label>
                <textarea id="description" name="description" class="form-control">{{ $product->description }}</textarea>
              
              </div>
               <div class="col-md-12">
                <button type="submit" class=" btn-save btn btn-primary">Lưu Lại</button>
                </div>
          </form>   
          </div>
         
        </div>
  </main>


  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  
@endsection