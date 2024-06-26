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
        <li class="breadcrumb-item">Danh sách đưn hàng</li>
        <li class="breadcrumb-item"><a href="#">Chỉnh sửa đơn hàng</a></li>
      </ul>
    </div>
       
     
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <form action="{{ route('admin.postEditOrder', $bill->id_bill) }}" method="POST" enctype="multipart/form-data" class="row">
             @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
             @endif

              @csrf
              @method('PUT')
            
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Trạng thái thanh toán</label>
                <select value="{{ $bill->payment_status }}" class="form-control" id="TypeProduct_id" name="payment_status">
            
                 <option value="0" {{ $bill->payment_status == 0 ? 'selected' : '' }}>Chưa thanh toán</option>
                 <option value="1" {{ $bill->payment_status == 1 ? 'selected' : '' }}>Đã thanh toán</option>
                
                </select>
                <!-- <div>
           
                <ul>
                  <li>0: Chưa thanh tán</li>
                  <li>1: Đã thanh toán</li>
                </ul>
              </div> -->
              </div>

                <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Trạng thái đơn hàng</label>
                <select value="{{ $bill->order_status }}" class="form-control"id="TypeProduct_id" name="order_status">
                   <option value="0" {{ $bill->order_status == 0 ? 'selected' : '' }}>Đang xử lý</option>
                   <option value="1" {{ $bill->order_status == 1 ? 'selected' : '' }}>Đang giao hàng</option>
                   <option value="2" {{ $bill->order_status == 2 ? 'selected' : '' }}>Đã giao hàng</option>
                   <option value="3" {{ $bill->order_status == 3 ? 'selected' : '' }}>Đã hủy</option>
     
                </select>

                <!-- <div>

            
                <ul>
                  <li>0: Đang xử lí</li>
                  <li>1: Đang giao hàng</li>
                  <li>2: Đã giao hàng</li>
                  <li>3: Đã hủy</li>
                </ul>
              </div> -->
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