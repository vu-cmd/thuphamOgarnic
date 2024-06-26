
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
					<a href="https://tk10.halink.asia/">Trang chủ</a>  > <a href=''>Đơn hàng</a>				</div> 

			</div>
		</div>
	</div>
	<!--ket thuc breadcrum-->

<style>
.order-summary{
	background-color: rgba(0, 0, 0, 0.02);
	box-shadow:  1px 1px 3px 0px rgba(0, 0, 0, 0.2), 0 1px 0 rgba(0, 0, 0, 0.07), inset 0 0 0 1px rgba(0, 0, 0, 0.05);

}
.order-summary h2 {
	font-size: 20px;
}
.order-summary > ul > li > span {
	font-size: 16px;
	line-height: 45px;
}
.order-summary ul li span + span {
     font-weight: bolder;
	margin-left: 10px;
        }
.order-details td:nth-child(2) {
    color: black;
    font-weight: bolder;
}
.order-details{
	font-size: 14px;
}
</style>

	<div  class="container">
		<div class="row">     
			<div class="col-md-6 col-sm-12 col-xs-12 sidebar">
				<div class="order-container">
					 <div class="container">
        <div class="order-details">
            <table style="width: 45%;">
                <thead>
					<tr style="font-size: 18px;">
                       <th>Chi tiết đơn hàng</th>
					</tr>
					
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Tổng</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="color: #669933;">Táo nhập khẩu × 1</td>
                        <td>70.000₫</td>
                    </tr>
                   
                    <tr>
                        <td>Phương thức thanh toán:</td>
                        <td>Chuyển khoản ngân hàng</td>
                    </tr>

					 <tr>
                        <td>Trạng thái thanh toán</td>
                        <td>Chưa thanh toán</td>
                    </tr>

					 <tr>
                        <td>Trạng thái đơn hàng</td>
                        <td>Đã xác nhận</td>
                    </tr>
                    <tr>
                        <td>Tổng cộng:</td>
                        <td>70.000₫</td>
                    </tr>
                </tbody>
            </table>
        </div>
       
    </div>
					
					
				</div>

</div>

 <div class="col-md-6 col-sm-12 col-xs-12 order-summary">
            <h2>Đơn hàng của bạn đã được nhận.</h2>
			@if(!empty($orderDetails))
            <ul>
                <li><span>Mã đơn hàng:</span> <span>{{ $orderDetails['order_id'] }}</span> </li>
                <li><span>Ngày:</span> <span>{{ date('d/m/Y') }}</span> </li>
                <li><span>Tổng cộng:</span> <span>{{ number_format($orderDetails['total_price'], 0, ',', '.') }}₫</span></li>
                <li><span>Phương thức thanh toán:</span> <span>Chuyển khoản ngân hàng</span></li>
            </ul>
			@else
                <p>Không có đơn hàng nào.</p>
            @endif
        </div>
<!--  -->
</div>
</div>


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