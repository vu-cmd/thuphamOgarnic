

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
    							<a class="" href="">Giới thiệu</a>
    						</li>
    						<li class="menu-restaurant">
    							<a class="" href="">Thực đơn</a>
    						</li>
    						<li class="menu-restaurant">
    							<a class="" href="">Tin tức – sự kiện</a>
    						</li>
    						<li class="menu-restaurant">
    							<a class="active_keep" href="lien-he.html">Liên hệ</a>
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
                    <!-- <div class="wishlist-link">
                        <form name="frmLang" action="" method="post">
                                                                                    <span>
                                <a style="cursor: pointer;" onclick="javascript:setLang('en')">
                                 	<img src="../../public/template/images/en.png" alt="English (UK)" title="English (UK)">
                                    <i class="fa fa-language"></i>
                                    <span>EN</span>
                                </a>
                            </span>
                                                        <input name="lang" type="hidden" value="vi">
                        </form>
                        <script>
                            function setLang(str){
                                document.frmLang.lang.value=str;
                                document.frmLang.submit();
                            }
                        </script>
                    </div> -->
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
<!-- header -->

<div class="container" id="article">  
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="breadcrumb" style="margin-bottom: 0;">
				<a href="https://tk10.halink.asia/">Trang chủ</a>  > <a href='/lien-he.html'>Liên hệ</a>			</div> 
		</div>
	</div>
</div>

<!-- <div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 pad0">
			<div class="general-banner-about">
				<img src="https://tk10.halink.asia/data/Flash/">
			</div>
		</div>
	</div>
</div> -->

    <div class="container">
        <div class="row">
        	<div class="col-xs-12">
				<div class="newsheader">
					<h2>Gửi tin nhắn cho chúng tôi</h2>
				</div>
        	</div>
        </div>
    </div>

<div class="content-container page_contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
				<div class="row">
				
				
				<form  action="{{ route('banhang.postContact') }}" class='contact-form' method='post' >
				<div class="col-lg-12">
                 @csrf
					<div class="row marb10">
						<div class="col-md-12">
							<div> <input type="text" class="form-control" name="fullname" placeholder="Họ tên*"  value="{{ $user->name ?? '' }}"> </div>
						</div>
					</div>

					<div class="row marb10">
						<div class="col-md-12">
							<div> <input type="text" class="form-control" name="email" placeholder="Email*"  value="{{ $user->email ?? '' }}"> </div>
						</div>
					</div>

					<div class="row marb10">
						<div class="col-md-12">
							<div> <input type="text" class="form-control" name="phone" placeholder="Số điện thoại*" value="{{ $user->phone ?? '' }}"> </div>
						</div>

						
					</div>
				</div>

				<div class="col-lg-12">
					<textarea placeholder="Nội dung*"  class="form-control" name="message" style="height: 160px;"></textarea>

					<input type="submit"  name="submit" class="btn btn-primary" value="Gửi liên hệ" style="color: #fff;width: 180px;font-size: 16px;background: #80bb35;padding: 10px 0;text-transform: uppercase;border-radius: 30px;display: inline-block;margin: 15px 0;outline: 0;border: 0;transition: .3s;"/>
				</div>
				</form>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
			     <div class="contact-box-info clearfix margin-bottom-30">
<div>
<div class="item">
<div>
<div class="info"><span style="font-size:15px;"><strong><label>Địa chỉ li&ecirc;n hệ:</label></strong> Tầng trệt, T&ograve;a nh&agrave; DTEC TOWER - Số 6 Phan Chu Trinh, P.T&acirc;n Th&agrave;nh, Q.T&acirc;n Ph&uacute;, TP.HCM</span></div>
</div>

<div>
<div class="info"><span style="font-size:15px;"><strong><label>Số điện thoại:</label></strong> 090.635.1080 - 096.698.1085</span>

<p><span style="font-size:15px;"><strong>Thứ 2 - Chủ nhật:</strong> 9:00 - 18:00</span></p>
</div>
</div>

<div>
<div class="info"><span style="font-size:15px;"><strong><label>Email:</label>&nbsp;</strong>dv@halink.vn</span></div>
</div>
</div>
</div>
</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="full_width_map" style="margin-top: 20px;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2158591061684!2d106.63522381480097!3d10.794772792309038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752c1ba7652513%3A0xbcb1ab4339f43c00!2zQ8O0bmcgdHkgVGhp4bq_dCBL4bq_IFdlYiBIQUxJTks!5e0!3m2!1svi!2s!4v1589167847185!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>				</div>
				<script>
					$('.full_width_map').click(function () {
						$(this).find('iframe').css("pointer-events", "auto");
					});
					$( ".full_width_map" ).mouseleave(function() {
						$(this).find('iframe').css("pointer-events", "none"); 
					});
				</script>
			</div>
		</div>

			
		</div>
	</div>
</main>
		<!--end contac-->
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
			border-radius: 0px;
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
			background-color: #428bca;
			border-color: #357ebd;
			color: #fff;
		}
		.full_width_map iframe{
			width: 100%;
		}
	</style>


 
    <!-- <div class="bg-dkform">
  <div class="container">
    <div class="col-lg-6 col-xs-12">
      <div class="newsletter-text">
        <h3>Yêu cầu gọi lại</h3>
        <p>Tham gia dịch vụ của chúng tôi để được cập nhật với các ưu đãi và khuyến mãi mới nhất của chúng tôi!</p>
      </div>
    </div>
    <div class="col-lg-6 col-xs-12">
      <form accept-charset="UTF-8" action="" method="post">
        <input type="text" name="email-l" class="inputmail" placeholder="Nhập số điện thoại">
        <button type="submit" class="newsletter-btn">
          <i class="fa fa-long-arrow-right"></i>
        </button>
      </form>
    </div>
  </div>
</div> -->



<!-- menu mobile -->



   
<script>
    new WOW().init();
</script>

@endsection