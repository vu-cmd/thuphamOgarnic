@extends('admin.master')
@section('content')
<style>
        .form-control{
            height: 33px;
            width: 200px;
            margin-left: 100px ;
        }
        .btn-search{
           height: 33px;
           background-color:#d55d67;
           color: #ffffff;
        }
      
      
    </style>
    <main class="app-content" style="margin-top: 50px;">
        <!-- <div class="app-title">
          <ul class="app-breadcrumb breadcrumb side" >
             <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
         </ul>
        </div> -->
           <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
    <div class="col-sm-2">
        <a class="btn btn-add btn-sm" href="{{route('admin.getAddProduct')}}" title="Thêm">
            <i class="fas fa-plus"></i> Tạo mới sản phẩm
        </a>
    </div>
    <div class="col-sm-8">
        <form class="form-inline" action="/search-results.html" method="get">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm" name="query">
                <div class="input-group-append">
                    <button class="btn btn-search btn-sm" type="submit">
                        <i class="fas fa-search"></i> Tìm kiếm
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <!-- <th width="10"><input type="checkbox" id="all"></th> -->
                                      <th>STT</th>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Số lượng</th>
                                    <th>Tình trạng</th>
                                    <th>Giá tiền</th>
                                    <th>Danh mục</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                  @foreach($products as $key => $product)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $product->id_product }}</td>
                                    <td>{{ $product->name_product }}</td>
                                    <td><img  src="{{ asset($product->image) }}" alt="{{ $product->name_product }}" width="100px"></td>
                                     
                                    <td>{{ $product->quantity }}</td>
                                    <td>
                                        @if($product->quantity > 0)
                                          <span class="badge bg-success">Còn hàng</span>
                                        @else
                                            <span class="badge bg-danger">Hết hàng</span>
                                        @endif
                                    </td>
                                    <td>{{ number_format($product->price, 0, ',', '.') }} đ</td>
                                    <td>{{ $product->type_products->Type ?? 'N/A' }}</td>
                                    <td>
                                     <form action="{{ route('admin.getDelete', $product->id_product) }}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                         <button class="btn btn-primary btn-sm trash" type="submit" title="Xóa">
                                          <i class="fas fa-trash-alt"></i>
                                             </button>
                                      </form>
                                        <a href="{{ route('admin.getEditProduct', ['id_product' => $product->id_product]) }}" class="btn btn-primary btn-sm edit" title="Sửa">
                                   <i class="fas fa-edit"></i>
                                     </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
<!--
  MODAL
-->

<!--
MODAL
-->
@endsection
@section('js')
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="src/jquery.table2excel.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
   
    
@endsection