@extends('admin.master')

@section('content')
<main class="app-content" style="margin-top: 50px;">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Phản hồi khách hàng</li>
            
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Phản hồi khách hàng</h3>
                <div class="tile-body">
                    <form action="{{ route('admin.postInputContact')}}" method="post" class="row" enctype="multipart/form-data">
                      @csrf
                         <!-- <div class=" control-label form-group col-md-3">Họ Tên</label>
                            <input class="form-control" type="text" name="name_product"  value="{{ old('fullname') }}">
                        </div> -->
                        <div class=" control-label form-group col-md-3">Email</label>
                            <input class="form-control" type="text" name="txtEmail" value="{{ old('txtEmail', $email) }}" required>
                        </div>
                        <!-- <div class="control-label form-group col-md-3">Số điện thoại</label>
                            <input class="form-control" type="text" name="price"  value="{{ old('phone') }}">
                        </div> -->
            
                        <div class="form-group col-md-12">
                            <label class="control-label">Nội dung phản hồi lại cho khách</label>
                            <textarea class="form-control" name="feedback" ></textarea>
                          
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class=" btn-save btn btn-primary">Gửi</button>
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
