
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
	width: 120px;
	height: 30px;
	border: solid 1px ;
	border-radius: 15px;
	text-indent: 10px; 
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
    							<a class="active_keep" href="san-pham.html">Thực đơn</a>
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
</script>    
<!-- <script src='public/js/zoomsl-3.0.min.js' type='text/javascript'></script> -->
<!-- <script type="text/javascript">
	jQuery(document).ready(function ($) {
		$("#detail_img").imagezoomsl({
			magnifiersize: [490, 492],			
			zoomrange: [1, 1],
			magnifiereffectanimate: "fadeIn",
			magnifierborder: "1px",
			magnifierpos: "right"
		}); 	
	});
</script> -->
<!-- and phóng ảnh -->
<link rel= "stylesheet" type = "text/css" href = "https://tk10.halink.asia/public/template/css/font-awesome.min.css" />
<link rel= "stylesheet" type = "text/css" href = "https://tk10.halink.asia/public/cloud-zoom-master/cloud-zoom.css" />
<script type="text/javascript" src="https://tk10.halink.asia/public/cloud-zoom-master/cloud-zoom.js"></script>
<!-- star js click 5 hinh nho hien border mau xanh va giu im mau khi click  -->
<script>
	$(document).ready(function() {

		$('.myDiv').click(function(){
			$('.myDiv').removeAttr("id");
			$(this).attr("id","borderpro")
		});

	});
	$(document).ready(function() 
	{
		$("#owl-demo").owlCarousel({
			navigation: !0,
			navigationText:['<i class="fa fa-angle-leftt"></i>','<i class="fa fa-angle-rightt"></i>'],
			items: 5,
			lazyLoad : true,
			itemsDesktop: [1199, 5],
			itemsDesktopSmall: [979, 2],
			itemsTablet: [768, 3],
			itemsTabletSmall: [540, 3],
			itemsMobile: [360, 3],
			autoHeight: false,
			autoPlay : true,
			responsive:true,
		});
	});	
</script>
<!-- and js click 5 hinh nho hien border mau xanh  -->
<main>
	@isset($product)
	<div class="container" id="article">  
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="breadcrumb">
					<a href="#">Trang chủ</a>  > <a href = "#" title="Rau củ">{{ $product->type_products->Type ?? 'N/A' }}</a> >> {{ $product->name_product }}			</div> 
			</div>
		</div>
	</div>
@endisset

	<div class="container">
		<div class="row">
			 @isset($product)
			<div class="col-md-9">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-xs-12 col-sm-12 imgprodetail">
						<div class="image_pro">
							
							
															<span class="product-label new" style="right:45px;">New</span>
							
							
								<a href="#" class="cloud-zoom" id="cloudZoom" rel="tint: '#ffffff',tintOpacity:0.8 ,smoothMove:5,zoomWidth:300, adjustY:-4, adjustX:10" id="detail_imgs">
									<img id="detail_img" src="{{ asset($product->image) }}" class="imgdepro"/>
								</a>

								<div class="imgsp" >
									<div id="owl-demo">
																					<a href="#" class="cloud-zoom-gallery">
												<img class="listbox_img myDiv" alt="Dưa leo Đà Lạt" src="{{ asset($product->image) }}" />
											</a>
										
																			</div>    
								</div>
						</div>
					</div>
				
					<div class="col-xs-12 col-sm-12 col-md-7 details-pro">
						<h1 class="title-het" name="idpro" value="{{ $product->id_product }}">{{ $product->name_product }}</h1>
						<div class="price-box clearfix">
							<div class="special-price">
								<span class="price product-price">{{ $product->price }} đ</span> 
							</div> 
						</div>
						<!-- <div class="mota"></div>
						<hr style="border-top: 1px solid #ddd;"> -->
						<div class="clearfix">
							<form id="add-to-cart-form" action="{{ route('banhang.addtocart', $product->id_product) }}" >	
								@csrf

								<div class="select-wrapper clearfix " >
									<label>Số lượng</label>
									<div class="input-group">
										<!-- <input value="-" onclick="minusQuantity();" class="qty-btn" type="button">
										<input id="quantity" name="quantity" value="1" min="1" class="quantity-selector" type="text">
										<input value="+" onclick="plusQuantity();" class="qty-btn" type="button"> -->
										<input type="number" name="soluong" class="input_quantity" placeholder="Nhập số lượng" min="1"  max="{{ $product->quantity }}" />
										<span style="color: #757575; font-size: 16px; margin-left: 15px; ">{{ $product->quantity }} sản phẩm có sẵn</span>
									</div>
								</div>
					             <!-- <a style="width: 180px;" class="add-to-checkout addpro" href="{{ route('banhang.addtocart',$product->id_product) }}">
									
									<span style="margin-left: 40px;"> Đặt hàng ngay</span>
								</a>		 -->
								 <button type="submit" class="add-to-checkout addpro" style="width: 180px;">
                                     <span > Đặt hàng ngay</span>
                                 </button>
								
							</form>
						</div>
						<hr style="border-top: 1px solid #ddd;">
						<div class="tag-wrapper">
							<div class="share_social">
								<div class="social-media" data-permalink="http://tk10.halink.asia/san-pham/dua-leo-da-lat">
									<span style="color:#252525;">Chia sẻ</span>
									<a target="_blank" href="//www.facebook.com/sharer.php?u=http://tk10.halink.asia/san-pham/dua-leo-da-lat" class="share-facebook" title="Chia sẻ lên Facebook">
										<i class="fa fa-facebook"></i>
									</a>
									<a target="_blank" href="//twitter.com/share?text=Halink&amp;url=http://tk10.halink.asia/san-pham/dua-leo-da-lat" class="share-twitter" title="Chia sẻ lên Twitter">
										<i class="fa fa-twitter"></i>
									</a>
									<a target="_blank" href="//pinterest.com/pin/create/button/?url=http://tk10.halink.asia/san-pham/dua-leo-da-lat&amp;media=data/Product/dua-leo-da-lat.jpg&amp;description=Halink" class="share-pinterest" title="Chia sẻ lên pinterest">
										<i class="fa fa-pinterest"></i>
									</a>
									<a target="_blank" href="" class="share-google" title="+1">
										<i class="fa fa-google-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="row" style="margin-top: 30px;">
					<div class="col-xs-12 col-lg-12 col-md-12 product-single">
						<div class="product-tabs">
							<ul class="list-unstyled navtabs comments">
								<li role="presentation" class="active">
									<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Mô tả</a>
								</li>
								
							</ul>
						  	<div class="tab-content">
						  		<div role="tabpanel" class="tab-pane fade in active" id="tab1">
						  			<div class="entry-content">{{ $product->description }}</div>
						  		</div>
						  	 
						    </div>
						</div>
					</div>
				</div>
			</div>
			@endisset
	</div>
</main>

<script type="text/javascript">
	// function plusQuantity(){
		
	// 	if ( jQuery('input[name="quantity"]').val() != undefined ) {
	// 		var currentVal = parseInt(jQuery('input[name="quantity"]').val());
	// 		if (!isNaN(currentVal)) {
	// 			jQuery('input[name="quantity"]').val(currentVal + 1);
	// 		} else {
	// 			jQuery('input[name="quantity"]').val(1);
	// 		}
	// 	}else {
	// 		console.log('error: Not see elemnt ' + jQuery('input[name="quantity"]').val());
	// 	}
	// }
	// function minusQuantity(){
		
	// 	if ( jQuery('input[name="quantity"]').val() != undefined ) {
	// 		var currentVal = parseInt(jQuery('input[name="quantity"]').val());
	// 		if (!isNaN(currentVal) && currentVal > 1) {
	// 			jQuery('input[name="quantity"]').val(currentVal - 1);
	// 		}
	// 	}else {
	// 		console.log('error: Not see elemnt ' + jQuery('input[name="quantity"]').val());
	// 	}
	// }
	function minusQuantity() {
    let quantityInput = document.getElementById('quantity');
    let quantity = parseInt(quantityInput.value);
    if (quantity > 1) {
        quantityInput.value = quantity - 1;
    }
}

function plusQuantity() {
    let quantityInput = document.getElementById('quantity');
    let quantity = parseInt(quantityInput.value);
    quantityInput.value = quantity + 1;
}
</script>



 
   



   
<script>
    new WOW().init();
</script>

@endsection