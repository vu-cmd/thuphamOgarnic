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
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách liên hệ</b></a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
    
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

                                    <th>ID Contact</th>
                                    <th>Họ Tên</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Nội dung</th>
                                    <th>Trạng thái</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                                @foreach ($contacts as $index => $contact)
                            <tbody>
                          
                                  
                                <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->fullname }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->message }}</td>
                                    <td>
                                   @if ($contact->contact_status == 0)
                                       <span class="badge bg-danger" >Chưa liên hệ</span>
                                    @else
                                       <span class="badge bg-info" >Đã liên hệ</span>
                                    @endif
                                </td>    
                                   <td>
                                   
                                        <a href="{{ route('admin.getInputContact', ['email' => $contact->email]) }}" class="btn btn-primary btn-sm edit" title="Sửa">
                                   <i class="fas fa-edit"></i>
                                     </a>
                                    </td>
                                </tr>
                        

                            </tbody>
                              @endforeach
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