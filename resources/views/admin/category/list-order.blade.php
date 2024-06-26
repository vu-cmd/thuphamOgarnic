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
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
   
    <div class="col-sm-8">
        <form class="form-inline" action="" method="get">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Tìm kiếm đơn hàng" name="query">
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
                             
                                     
                                    <th>Mã đơn hàng</th>
                                    <th>Tên khách hàng</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Địa chỉ nhận hàng</th>
                                     <th>Tổng hóa đơn</th>
                                     <th>Thanh toán</th>
                                    <th>Đơn hàng</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                    @foreach($bills as $bill)
                                <tr>
                                <td>{{ $bill->id_bill }}</td>
                                <td>{{ $bill->customer->name }}</td>
                                <td>{{ $bill->customer->phone_number }}</td>
                                <td>{{ $bill->customer->email }}</td>
                                <td>{{ $bill->customer->address }}</td>
                                <td>{{ number_format($bill->total, 0, ',', '.') }} đ</td>
                                <td>
                                    @if ($bill->payment_status == 0)
                                    <span class="badge bg-danger">Chưa thanh toán</span>
                                      @else
                                <span class="badge bg-success">Đã thanh toán</span>
                                       @endif
                                 </td>
                                 
                                 @if ($bill->order_status == 0)
                                    <td><span class="badge bg-warning">Đang xử lý</span></td>
                                 @elseif ($bill->order_status == 1)
                                    <td><span class="badge bg-success">Đang giao hàng</span></td>
                                 @elseif ($bill->order_status == 2)
                                    <td><span class="badge bg-info">Đã giao hàng</span></td>
                                 @elseif ($bill->order_status == 3)
                                    <td><span class="badge bg-danger">Đã hủy</span></td>
                                @endif
                                <td>
                                    <!-- <form>
                                        <button class="btn btn-primary btn-sm trash" type="submit" title="Xóa">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form> -->

                                    <a href="{{ route('admin.getEditOrder', ['id_bill' => $bill->id_bill]) }}" class="btn btn-primary btn-sm edit" title="Sửa">
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

 <!-- modal -->
 

 <!--  -->

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