<header>
<div class="topbar hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-9 a-left">
                <ul class="list-inline f-left">
                    <li>
                        <i class="fa fa-mobile" style=" font-size: 20px; display: inline-block; position: relative; transform: translateY(2px); "></i> Hotline: 
                        <span>
                            <a href=""> 090.635.1080 - 096.698.1085</a>
                        </span>
                    </li>
                    <li class="margin-left-20">
                        <i class="fa fa-map-marker"></i> <b>Địa chỉ</b>: 
                        <span>
                            Tầng trệt, Tòa nhà DTEC TOWER - Số 6 Phan Chu Trinh, P.Tân Thành, Q.Tân Phú, TP.HCM                        </span>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <ul class="list-inline f-right">
                    @if(Auth::check())
                            <li><a href="#"><i class="fa fa-user" style="margin-right: 10px;"></i>{{ ucwords(Auth::user()->name) }}</a></li>
                            <li><span>|</span></li>
                            <li><a  href="{{ route('getLogout') }} "></i>Đăng xuất</a></li>
                     @else
                    <li>
                        <a href="{{ route('getLogin') }}">Đăng nhập</a>
                    </li>
                    <li><span>|</span></li>
                    <li>
                        <a  href="{{ route('getRegister') }}">Đăng ký</a>
                    </li>
                     @endif
                </ul>
               
            </div>
        </div>
    </div>
</div>

<div class="container hidden-sm hidden-xs">
    <div class="header-content clearfix">
        <div class="row">
            <div class="col-xs-12 col-md-3 text-lg-left">
                <div class="logo inline-block">
                    <a href="" class="logo-wrapper" title=" Halink">
                            <img src="https://media.istockphoto.com/id/1415339208/vi/vec-to/logo-th%E1%BB%B1c-ph%E1%BA%A9m-sinh-th%C3%A1i-t%E1%BB%91t-cho-s%E1%BB%A9c-kh%E1%BB%8Fe-sinh-h%E1%BB%8Dc-t%E1%BB%B1-nhi%C3%AAn-d%E1%BA%A5u-hi%E1%BB%87u-xanh-s%E1%BA%A3n-ph%E1%BA%A9m-h%E1%BB%AFu-c%C6%A1.jpg?s=1024x1024&w=is&k=20&c=Q6PSRFf7d6MtMalUNU-DtCyXxL8RRwlX6q_gnDppBF4="  alt=" Halink" style= "width: 120px; height: 120px">
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-md-8 col-lg-7 hidden-xs">
                <div class="policy d-flex justify-content-around">
                    <div class="item-policy d-flex align-items-center">
                        <a href="#">
                            <img src="/public/theme/images/policy1.png" alt="DuaLeo-X">
                        </a>
                        <div class="info a-left">
                            <a href="#">Miễn phí vận chuyển</a>
                            <p>Bán kính 100 km</p>
                        </div>
                    </div>
                    <div class="item-policy d-flex align-items-center">
                        <a href="#">
                            <img src="/public/theme/images/policy2.png" alt="DuaLeo-X">
                        </a>
                        <div class="info a-left">
                            <a href="#">Hỗ trợ 24/7</a>
                            <p>Hotline: <a href="callto:19001009"> 19001009</a></p>
                        </div>
                    </div>
                    <div class="item-policy d-flex align-items-center">
                        <a href="#">
                            <img src="/public/theme/images/policy3.png" alt="DuaLeo-X">
                        </a>
                        <div class="info a-left">
                            <a href="#">Giờ làm việc</a>
                            <p>T2 - T7 Giờ hành chính</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-1 col-lg-2 hidden-sm hidden-xs">
    <div class="top-cart-contain f-right">
        <div class="mini-cart text-xs-center">
            @if(Session::has('cart') )
            <div class="heading-cart">
                <a>
                    <div class="icon f-left relative">
                        <i class="fa fa-shopping-bag"></i>
                        <span class="cartCount count_item_pr hidden-lg" id="cart-total">{{ $totalQty }}</span>
                    </div>
                    <div class="right-content hidden-md">
                        <span class="label">Giỏ hàng</span>
                        (<span class="cartCount2">{{ $totalQty }}</span>)
                    </div>
                </a>
            </div>
            <div class="top-cart-content">
                <ul id="cart-sidebar" class="mini-products-list count_li">
                    @foreach($productCarts as $product)
                    <ul class="list-item-cart">
                        <li class="item productid-{{ $product['item']['id'] }}">
                            <div class="border_list">
                                <a class="product-image">
                                    <img alt="{{ $product['item']['name'] }}" src="{{asset( $product['item']['image']) }}" width="100">
                                </a>
                                <div class="detail-item">
                                    <div class="product-details">
                                        <p class="product-name">
                                            <a  title="{{ $product['item']['name'] }}">{{ $product['item']['name_product'] }}</a>
                                        </p>
                                    </div>
                                    <div class="product-details-bottom">
                                        <span class="price">
                                            {{ number_format($product['item']['price']) }}₫
                                        </span>
                                        
                                        <a href="{{ route('banhang.xoagiohang',$product['item']['id_product']) }}" title="Xóa" class="remove-item-cart fa fa-remove">&nbsp;</a>
                                        <div class="quantity-select qty_drop_cart">x{{ $product['qty'] }}</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                  
                    @endforeach
                   

                     <div class="pd">
                        <div class="top-subtotal">Tổng cộng: <span class="price">{{ number_format($totalPrice) }}₫</span></div>
                    </div>
                </ul>
                <div class="pd right_ct" style="margin-left: 110px; padding-bottom: 20px;">
                    <!-- <a href="" class="btn btn-primary"><span>Giỏ hàng</span></a> -->
                    <a href="{{ route('banhang.getCheckout') }}" class="btn btn-primary"><span>Thanh toán</span></a>
                </div>
            </div>
            @endif
            <!-- kết thúc giỏ hàng -->
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</div>
    <nav>
        <div class="container">
            <div class="hidden-sm hidden-xs">
                <ul class="nav nav-left">
                    <li class="nav-item active"><a class="nav-link" href="{{ route('banhang.index') }}">Trang chủ</a></li>
                    <li class="nav-item  has-mega">
                        <a href="" class="nav-link">Sản phẩm</a>           
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/gioi-thieu.html">Giới thiệu</a>
                    </li>
                    <li class="nav-item ">
						<a href="chu-de/tin-tuc.html" class="nav-link">Tin tức</a>			
								
					
					
					</li>
                    <li class="nav-item "><a class="nav-link"  href="{{ route('banhang.getContact') }}">Liên hệ</a></li>
                    <li class="nav-item "><a class="nav-link" href="{{ route('banhang.getOrderTracking') }}">Đơn hàng</a></li>
                </ul>

                <div class="menu-search f-right bbbbb">										
					<div class="header_search search_form">
						<form class="input-group search-bar search_form" action="{{ route('postSearch') }}" method="post" >	
                             @csrf	
							<input type="search" name="search" value="{{ request('search') }}" placeholder="Tìm sản phẩm" class="input-group-field st-default-search-input search-text auto-search" autocomplete="off">
							<span class="input-group-btn">
								<button class="btn icon-fallback-text">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</form>
					</div>
				</div>	
            </div>
        </div>
    </nav>
</header>