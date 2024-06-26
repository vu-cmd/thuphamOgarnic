@extends('admin.master')

@section('content')
<main class="app-content" style="margin-top: 50px;">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách sản phẩm</li>
            <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo mới sản phẩm</h3>
                   @if ($errors->any())
                        <div class="alert alert-danger">
                      <ul>
                  @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                @endforeach
               </ul>
               </div>
              @endif
                <div class="tile-body">
                    <form action="{{ route('admin.postAddProduct') }}" method="post" class="row" enctype="multipart/form-data">
                          @csrf
                        <div class="form-group col-md-3">
                            <label class="control-label">Tên sản phẩm</label>
                            <input class="form-control" type="text" name="name_product">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Số lượng</label>
                            <input class="form-control" type="number" name="quantity">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleSelect1" class="control-label">Danh mục</label>
                            <select class="form-control" id="exampleSelect1" name="TypeProduct_id">
                                <option value="">-- Chọn danh mục --</option>
                                @foreach($type_products as $typeproduct)
                                <option value="{{ $typeproduct->id_type }}">{{ $typeproduct->Type }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Giá bán</label>
                            <input class="form-control" type="text" name="price">
                        </div>
                     
                           <!-- <div class="form-group col-md-3">
                            <label class="control-label">Trạng thái</label>
                            <select class="form-control" name="status">
                                <option value="1">còn hàng</option>
                                <option value="0">hết hàng</option>
                            </select>
                        </div> -->
                        <div class="form-group col-md-12">
                            <label class="control-label">Ảnh sản phẩm</label>
                            <input type="file" name="image_file">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Mô tả sản phẩm</label>
                            <textarea class="form-control" name="description" ></textarea>
                            <!-- <script>CKEDITOR.replace('mota');</script> -->
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class=" btn-save btn btn-primary">Lưu Lại</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/plugins/pace.min.js"></script>
@endsection
