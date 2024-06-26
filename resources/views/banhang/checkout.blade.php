
@extends('layout.master')
@section('content')

<script type="text/javascript">
	window.onscroll = function() {menuSticky()};
	var navbar = $("header nav");
	// Get the offset position of the navbar
	var sticky = 40;
	// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
	function menuSticky() {	
		if (window.pageYOffset >= sticky) {
			navbar.addClass("sticky")
		} else {
			navbar.removeClass("sticky");
		}
	}
</script>

<style>
	.input_quantity{
	width: 60px;
	height: 30px;
	border: solid 1px ;
	border-radius: 15px;
	text-indent: 10px; 
	margin-top: 15px;
}
</style>
<nav class="navbar-main navbar navbar-default cl-pri" >
    <!-- MENU mobile-->
    <div class="container nav-wrapper">
        <div class="row">
            <div class="navbar-header">             
                <div class="hidden-lg hidden-md">
                    <div class="mobile-menu-icon-wrapper"> 
                        <ul class="mobile-menu-icon clearfix">
                            <li class="search">
                                <div class="logo-mobile">
                                    <a href="https://tk10.halink.asia/" title=" Halink">
                                        <img src="https://tk10.halink.asia/data/Flash/rNe6x1589167971.png" alt=" Halink" >
                                    </a>
                                </div>
                            </li>
                            <!-- <div class="rawimages">
                                <span id="active_language">
                                    <a style="cursor: pointer;" onclick="javascript:setLang('vn')">
                                        <img src="../../public/template/images/vn.png" alt="Vietnamese" title="Vietnamese"></a>
                                </span>
                                <span>
                                     <a style="cursor: pointer;" onclick="javascript:setLang('en')">
                                    <img src="../../public/template/images/en.png" alt="English (UK)" title="English (UK)"></a>
                                </span>
                            </div> -->
                            <li id="cart-target" class="cart">
                                <a href="gio-hang.html" class="cart " title="Giỏ hàng">
                                    <svg class="svg-next-icon svg-next-icon-size-20">
                                       <i class="fa fa-shopping-bag" ></i>
                                    </svg>          
                                    <span id="cart-count">
                                        0                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AND MENU mobile-->

    <div class="header-main" style="display: none;">
    	<div class="container">
    		<div class="row">
    			
    			<div class="col-md-12">
    				<div class="flex-col hide-for-medium float-right">
    					<ul class="nav" style="height: 70px;">
    						<li class="menu-restaurant">
    							<a class="" href="">Trang chủ</a>
    						</li>
    						<li class="menu-restaurant">
    							<a class="" href="gioi-thieu.html">Giới thiệu</a>
    						</li>
    						<li class="menu-restaurant">
    							<a class="" href="san-pham.html">Thực đơn</a>
    						</li>
    						<li class="menu-restaurant">
    							<a class="" href="chu-de/bai-viet-tin-tuc.html">Tin tức – sự kiện</a>
    						</li>
    						<li class="menu-restaurant">
    							<a class="" href="lien-he.html">Liên hệ</a>
    						</li>
    						<li class="html header-button-1">
    							<div class="header-button">
    								<a href="tel:0972939830" class="button-primary-lowercase">
    									<span>Hotline: 0909009009</span>
    								</a>
    							</div>
    						</li>
    					</ul>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <div id="navbar" class="navbar-collapse collapse container" style="display: none;">
        <div class="row rowban1">
        	<div class="col-md-4 col-xs-3">
        		<div class="logo"> 
        			<a href="https://tk10.halink.asia/" title=" Halink">
        				<img style="height: 100%;" src="https://tk10.halink.asia/data/Flash/rNe6x1589167971.png"  alt=" Halink">
        			</a>
        		</div>
        	</div>
            <div class="col-md-8 col-xs-9" >
                <div class="banner-top1">
                    <div class="account-links">
                        <ul class="list-inline">
                        	<li class="register-link">
                        		<a href="" title="">
                        			<i class="fa fa-envelope"></i>
                        			<span>linhchihoanggia@gmail.com</span>
                        		</a>
                        	</li>
                        	<li class="signIn-link">
                        		<a href="" title="">
                        			<i class="fa fa-clock-o"></i>
                        			<span>
                        				08:00 - 20:00
                        			</span>
                        		</a>
                        	</li>
                        </ul>
                    </div>
                    <div class="wishlist-link">
                                                	<a href="tel:0982669787">
                        		<i class="fa fa-phone"></i>
                        		<span>0911 229 229</span>
                        	</a>
                                            </div>
                    <div class="minicart-wrapper">
                    	<a href="gio-hang.html" class="cart " title="Giỏ hàng">
                    		<i class="fa fa-shopping-cart"></i>
                    		<span class="mini-cart-label">Giỏ hàng</span>
                    		<span class="cart_item">
                    			0                    		</span>
                    	</a>
                    </div>
                    <div class="search-wrapper">
                    	<a class="cd-search-trigger" data-toggle="modal" data-target="#myModal">
                    		<i class="fa fa-search"></i>
                    	</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</nav>

<!-- Modal tìm kiếm -->
<div id="myModal" class="modal fade" role="dialog">
  	<div class="modal-dialog">
    <!-- Modal content-->
    	<div class="modal-content">
      		<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" 
		        style="position: absolute;top: -15px;right: -15px;font-size: 30px;height: 30px;width: 30px;color: #fff;border-radius: 50%;background: #bbbbbb;opacity: 1;font-weight: normal;">&times;
		      	</button>
		      	<form action="/search/" style="width: 100%;float: left;">
		      		<div class="box-search">
		      			<div class="box-input">
		      				<input name="type" value="product" type="hidden">
		      				<div class="input-group-search" data-toggle="dropdown" aria-expanded="false" style="border: 1px solid #ddd;height: 42px;">
		      					<input autocomplete="off" id="search-global" name="q" placeholder="Nhập từ khóa tìm kiếm" type="text">
		      				</div>
		      				<button class="btn-searchbox">
		      					<svg class="svg-next-icon svg-next-icon-size-30">
		      					</svg><i class="fa fa-search" style="font-size:18px"></i>
		      				</button>
		      				<div class="dropdown-menu box-filter-search hidden">
		      					<ul></ul>
		      				</div>
		      			</div>
		      		</div>
		      	</form>
      		</div>	
    	</div>
  	</div>
</div>
<!-- and Modal tìm kiếm -->

<script type="text/javascript">
    $('#navbar li').hover(function(){
        $(this).toggleClass('open');
    });   
</script>    <main>
	<div class="container-fluid " id="article">  
		<div class="row">
			<div class="col-sm-12 col-md-12 pad0">

				<div class="breadcrumb">
					<a href="https://tk10.halink.asia/">Trang chủ</a>  > <a href=''>Giỏ hàng</a>				</div> 

			</div>
		</div>
	</div>
	<!--ket thuc breadcrum-->

	<div style="height:30px" class="none"></div>
	<div  class="container">
		<div class="row">
                 @if(Session::has('cart'))
                    
			<div class="col-md-7 col-sm-12 col-xs-12 sidebar">
				<form  method="post" action="{{ route('banhang.updateCart') }}" class="tbleloack" enctype="multipart/form-data">
                @csrf
                @method('PUT')
					<table id="table-cart-order" class="table-style" cellpadding="0" cellspacing="0" width="100%">

						<thead>

							<tr style="text-align: left; border-top: 1px solid #ddd;
							border-bottom: 1px solid #ddd;" >
							<th  style="width:20%" >

								Hình
							</th>

							<th>

								Tên sản phẩm
							</th>

							<th style="width: 10%" >

								Đơn giá
							</th>



							<th style="width: 15%">

								Số lượng
							</th>

							<th style="width: 15%" class="title_td">

								Thành tiền
							</th>

							<th style="width: 5%" >

								Xóa
							</th>

						</tr>

					</thead>
                           <!--  -->
					@foreach($productCarts as $product)
					<tbody>
                              
								<tr class="border" style="border-bottom: 1px solid #ddd;"> 

									<td class="product-img">

										<img src="{{asset( $product['item']['image']) }}"  style="max-width: 100%;width: 100px;" >

									</td>

									<td>

										<a class="product-link" href="{{ route('banhang.getDetailProduct', $product['item']['id_product']) }}">
                                              {{ $product['item']['name_product'] }}
											</a>

										</td>

										<td style="color:#FF0000;">
                                              
										 {{ number_format($product['item']['price']) }}₫
										
										</td>
										<td>
                                                 <input type="number" name="soluong[{{ $product['item']['id_product'] }}]"  class="input_quantity" min="1" max="{{ $product['item']['quantity'] }}" value="{{ $product['qty'] }}" />
                                            
                                        </td>

										<td class="border-right" style="color:#FF0000;" class="title_td">

                                         <span>{{ number_format($product['qty'] * (float) str_replace(',', '', $product['item']['price']), 0, ',', '.') }} đ</span>
										</td>

										<td>

											<a href="{{ route('banhang.xoagiohang',$product['item']['id_product']) }}" class="delete-cart-item" title="Xóa sản phẩm này?">

												<img src="public/template/images/icon_delete.png" ></a>

											</td>

										</tr>

									  @endforeach
									<tr class="noborder">

										<td colspan="2">

										</td>

										<td colspan="2">

											<label style="font-size:14px;"> Tổng tiền:</label>

										</td>

										<td colspan="2">

											<label class="sum-price" id="total-payment-here" style="color: red">

												{{ number_format($totalPrice) }}₫</label>

											</td>

                                          @endif
										</tr>
										<tr class="noborder">
											<!-- <td colspan="4">
												<button href="{{ route('banhang.index') }}"  type="submit" class="btn btn-primary addpro"><a style="color:#fff" >Tiếp tục mua hàng  <i class="fa fa-long-arrow-right"></i></a></button>
											</td> -->
											<td>
												<a href="{{ route('banhang.index') }}">
													<button type="button" class="btn btn-success">Tiếp tục mua hàng
														<i class="fa fa-long-arrow-right"></i>
													</button>
												</a>
												
												
											</td>
	                                        <td>
                                                   <button type="submit" class="btn btn-success">Cập nhật lại giỏ hàng
													<i class="fa-regular fa-upload"></i>
												   </button>
                                          </td>
										</tr>
         
   </tbody>

</table>

</form>

</div>
<div class="col-md-5 col-sm-12 col-xs-12 " style="border: 1px solid #e2dfdf;background: #f3f3f3;color: #000;">

	<h2 class="page-title" >Thông tin khách hàng</h2>

		  <form action="{{ route('banhang.postdathang') }}" method="post" id="form_submit_cart">
	     @csrf
                <div class="row">
                    <!-- session('success') sinh ra từ hàm postDatHang trong PageController -->
                    @if(Session::has('success'))
                     {{ Session::get('success')}}
         @endif
                </div>
   <style>
        input[type="text"], input[type="email"], textarea, select {
            color: black;
			
        }
    </style>
		
		<table width="100%"  cellspacing="0" cellpadding="0" style=" margin-top:10px; text-align:left; ">
       
			<tr>

				<td class="title_td">Họ tên</td>

				<td><input  type="text" class="form-control"  name="name" placeholder="Họ tên" value="" /></td>

			</tr>
        <tr>

				<td  class="title_td">Giới TÍnh</td>

				<td>
					
					<select name="gender" class="form-control"  >

						<option value="0" selected >giới tính</option>

						<option value="1"  >Nam</option>

						<option value="2"  >Nữ</option>	

						<option value="3"  >Khác</option>	

					</select> 
				</td>

			</tr>
			<tr>

				<td class="title_td">Địa chỉ</td>

				<td><input type="text" class="form-control"  name="address" placeholder="Địa chỉ"  value=""/></td>

			</tr> 

			<tr>

				<td class="title_td">Điện thoại</td>

				<td><input class="form-control"  type="text" name="phone_number" placeholder="Điện thoại" value="" /></td>

			</tr>

			<tr>

				<td class="title_td">Email</td>

				<td><input  type="email" name="email" class="form-control" required placeholder="expample@gmail.com" value=""/></td>

			</tr>

			<tr>

				<td class="title_td">Phương thức thanh toán</td>

				<td>

					<select name="payment" class="form-control"  >

						<option value="0" selected >Phương thức thanh toán</option>

						<option value="1"  >Thanh toán khi nhận hàng</option>

						<option value="2"  >Thanh toán online</option>	

					</select> 

				</td>

			</tr>

			<tr>

				<td class="title_td">Ghi chú</td>

				<td><textarea name="notes" class="form-control"></textarea></td>

			</tr> 

			<tr>

				<td colspan="2">
					<button type="submit" class="btn btn-primary addpro">Đặt hàng</button>
				</td>

			</tr>        

		</table>

	</form>
</div>


<!-- <div class="space_10"></div> -->

</div>
</div>


<div  style="height: 20px"></div>
</main>

<script type="text/javascript">

	$(document).ready(function(){

		$('.change_order_info').click(function(){

			$('.block-update-order').toggle(500)

		});

		$('.ddl_quan').change(function(){

			$('.tbleloack').submit();

		});

		$('#btn-submit-cart').click(function(){

			$('#form_submit_cart').submit();

		});

	})

</script>
<style type="text/css">
	table td, table th {
		padding: 9px 10px;
		text-align: left;
	}
	caption, th, td {
		font-weight: normal;
		text-align: left;
		vertical-align: middle;
	}
	.form-control {
		font-size: 12px;
		box-shadow: none;
		height: 27px;
		padding: 3px 5px;
	}
	.form-control:focus {
		border-color: #66afe9;
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(102, 175, 233, 0.6);
		outline: 0 none;
	}
	.form-control {
		background-color: #fff;
		border: 1px solid #d6d4d4;
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
		color: #9c9b9b;
		display: block;
		font-size: 13px;
		height: 40px;
		line-height: 1.42857;
		padding: 6px 12px;
		transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
		width: 100%;
	}
	.btn-primary {
		background-color: #d5b16d;
		border-color: #d5b16d;
		color: #fff;
	}

	.product-img img{
		width: 100%;
	}
	.btn-primary:hover {
		color: #fff;
		background: #de0c19;
		border-color: #de0c19;
	}
</style>




 
    


<!-- menu mobile -->



   
<script>
    new WOW().init();
</script>

<@endsection