

@extends('layout.master')
@section('content')

<!-- Modal tìm kiếm -->

<!-- and Modal tìm kiếm -->
<style>
.add-cart {
    width: 100px;
    height: 40px;
    background-color: #80bb35;
    border-radius: 20px;
    display: flex;
    margin: auto;
}
.add-cart:hover{
	cursor: pointer;
}
.add-to-cart {
    text-decoration: none;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%; /* Để nội dung căn giữa ngang */
}

.add-to-cart i {
    margin-right: 5px;
}

.add-to-cart span {
    font-weight: bold;
}
</style>
<script type="text/javascript">
    $('#navbar li').hover(function(){
        $(this).toggleClass('open');
    });   
</script>    

<script type="text/javascript">
    jssor_1_slider_init = function() {

        var jssor_1_SlideshowTransitions = [
        {$Duration:500,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
        {$Duration:500,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
        {$Duration:1000,x:-0.2,$Delay:40,$Cols:12,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
        {$Duration:2000,y:-1,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}},
        {$Duration:1200,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}}
        ];

        var jssor_1_options = {
          $AutoPlay: 1,
          $SlideshowOptions: {
            $Class: $JssorSlideshowRunner$,
            $Transitions: jssor_1_SlideshowTransitions,
            $TransitionsOrder: 1
        },
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
        },
        $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
        }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*#region responsive code begin*/

    var MAX_WIDTH = 3000;

    function ScaleSlider() {
        var containerElement = jssor_1_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;

        if (containerWidth) {

            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

            jssor_1_slider.$ScaleWidth(expectedWidth);
        }
        else {
            window.setTimeout(ScaleSlider, 30);
        }
    }

    ScaleSlider();

    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    /*#endregion responsive code end*/
};
</script>
<style>
    /* jssor slider loading skin spin css */
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }


    .jssorb053 .i {position:absolute;cursor:pointer;}
    .jssorb053 .i .b {fill:#fff;fill-opacity:0.5;}
    .jssorb053 .i:hover .b {fill-opacity:.7;}
    .jssorb053 .iav .b {fill-opacity: 1;}
    .jssorb053 .i.idn {opacity:.3;}

    .jssora093 {display:block;position:absolute;cursor:pointer;}
    .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
    .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
    .jssora093:hover {opacity:.8;}
    .jssora093.jssora093dn {opacity:.6;}
    .jssora093.jssora093ds {opacity:.3;pointer-events:none;}
</style>
<main>
	<div class="container">
		<div class="row">
			<div class="col-md-3 mt-5 hidden-xs hidden-sm aside-vetical-menu">
				<div class="blog-aside aside-item sidebar-category">
					<div class="aside-title text-center text-xl-left">
						<h2 class="title-head"><span>Danh mục</span></h2>
					</div>
					<div class="aside-content">
						<div class="nav-category  navbar-toggleable-md">
							<ul class="nav navbar-pills">
								<li class="nav-item">
									<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
									<a class="nav-link" href="">Rau sạch</a>
								</li>
								<li class="nav-item active">
									<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
									<a href="" class="nav-link">Củ, quả sạch</a>
								</li>

								<li class="nav-item">
									<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
									<a class="nav-link" href="">Trái cây tươi</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-xs-12 col-xm-12 mt-5 aside-vetical-menu">
			<section class="slider-main">
    <div id="jssor_1" class="lidesile">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:50px;height:50px;" src="https://tk10.halink.asia/public/theme/images/blank.gif" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1360px;height:660px;overflow:hidden;">
                            <div>
                    <img data-u="image" src="https://tk10.halink.asia/data/Flash/L2xy81564989391.jpg" />
                    <div class="content-sli">
                        <div class="hero-caption">
                            <div class="ms-circle">&nbsp;</div>
                            <hr>
                            <h1></h1>

                            <h3></h3>
                        </div>
                    </div>
                </div>
                            <div>
                    <img data-u="image" src="https://tk10.halink.asia/data/Flash/cBInh1564989414.jpg" />
                    <div class="content-sli">
                        <div class="hero-caption">
                            <div class="ms-circle">&nbsp;</div>
                            <hr>
                            <h1></h1>

                            <h3></h3>
                        </div>
                    </div>
                </div>
                    </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <path class="b" d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z"></path>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
            </svg>
        </div>
    </div>
</section>
			</div>
		</div>
	</div>

	
<script type="text/javascript">jssor_1_slider_init();</script>

	<section class="awe-section-2">
		<div class="container">
			<div class="row">
				<div class="slidenew">
                	<div class="owl-carousel owl-theme">
												<div class="col-md-12">
							<div class="item">
								<a href="#" class="clearfix hover-color">
									<img src="https://tk10.halink.asia/data/Flash/N4VZU1565164040.jpg" alt="banner">
								</a>	
							</div>
						</div>
												<div class="col-md-12">
							<div class="item">
								<a href="#" class="clearfix hover-color">
									<img src="https://tk10.halink.asia/data/Flash/pVh8O1565164066.jpg" alt="banner">
								</a>	
							</div>
						</div>
												<div class="col-md-12">
							<div class="item">
								<a href="#" class="clearfix hover-color">
									<img src="https://tk10.halink.asia/data/Flash/uCyCL1565164088.jpg" alt="banner">
								</a>	
							</div>
						</div>
											</div>
				</div>
			</div>
		</div>
	</section>
<!-- @php
    // Lọc sản phẩm có TypeProduct_id = 3
    $filteredProducts = $products->filter(function($product) {
       return $product->TypeProduct_id == 3 || $product->TypeProduct_id == 2 || $product->TypeProduct_id == 2;
    });

    // Chia sản phẩm thành các nhóm, mỗi nhóm chứa 4 sản phẩm
    $chunks = $filteredProducts->chunk(4);
@endphp -->
@php
    // Lọc sản phẩm có TypeProduct_id = 3
    $filteredProducts_3 = $products->filter(function($product) {
       return $product->TypeProduct_id == 3;
    });

    // Lọc sản phẩm có TypeProduct_id = 2
    $filteredProducts_2 = $products->filter(function($product) {
       return $product->TypeProduct_id == 2;
    });

    // Lọc sản phẩm có TypeProduct_id = 1
    $filteredProducts_1 = $products->filter(function($product) {
       return $product->TypeProduct_id == 1;
    });

    // Chia sản phẩm thành các nhóm, mỗi nhóm chứa 4 sản phẩm
    $chunks_3 = $filteredProducts_3->chunk(4);
    $chunks_2 = $filteredProducts_2->chunk(4);
    $chunks_1 = $filteredProducts_1->chunk(4);
@endphp

<section class="awe-section-3">
		<div class="section section-deal products-view-grid">
			<div class="container">
				<div class="section-title text-center">
					<h2><a href="">Rau sạch</a></h2>			
				</div>


             @foreach($chunks_3 as $chunk)
				<div class="section-content row">
					
					<div class="product">
						
                		<div class="owl-carousel owl-theme">
							@foreach($chunk as $product)
														<div class="col-md-12">
								<div class="product-box">
									<!-- <div class="product-thumbnail flexbox-grid"> -->
										<div>
										<a href="san-pham/ca-chua-da-lat" title="Cà chua Đà Lạt">
											<img src="{{ asset($product->image) }}" alt="{{ $product->name_product }}">
										</a>
																				<div class="sale-flash">
											<div class="before"></div> -33% 
										</div>
																				
						           <div class="add-cart">
                                        <a href="{{ route('banhang.addtocart',$product->id_product) }}" class="add-to-cart pull-left" ><i class="fa fa-shopping-cart">
										</i><span>Mua</span></a> 
                                    </div>

									</div>
									<div class="product-info a-center">
										<h3 class="product-name">
											<a href="{{ route('banhang.getDetailProduct', $product->id_product )}}" title="Cà chua Đà Lạt">
												{{ $product->name_product }}</a>
										</h3>
										<div class="price-box clearfix">			
											<div class="special-price">
												<span class="price product-price">
													{{ number_format($product->price, 0, ',', '.') }} đ											
												</span>
											</div>
																						<div class="old-price">
												<span class="price product-price-old">
													30.000 đ
												</span>
											</div>
																					</div>		
									</div>
								</div>
							</div>
						
  @endforeach
                            
													</div>
												
					</div>
						
				</div>
				@endforeach

			</div>
		</div>
</section>

<section class="awe-section-3">
		<div class="section section-deal products-view-grid">
			<div class="container">
				<div class="section-title text-center">
					<h2><a href="">củ,quả</a></h2>			
				</div>
             @foreach($chunks_2 as $chunk)
				<div class="section-content row">
					
					<div class="product">

                		<div class="owl-carousel owl-theme">
							@foreach($chunk as $product)
														<div class="col-md-12">
								<div class="product-box">
									<!-- <div class="product-thumbnail flexbox-grid"> -->
										<div>
										<a href="san-pham/ca-chua-da-lat" title="Cà chua Đà Lạt">
											<img src="{{ asset($product->image) }}" alt="{{ $product->name_product }}">
										</a>
																				<div class="sale-flash">
											<div class="before"></div> -33% 
										</div>
																			
										 <div class="add-cart">
                                        <a href="{{ route('banhang.addtocart',$product->id_product) }}" class="add-to-cart pull-left" ><i class="fa fa-shopping-cart">
										</i><span>Mua</span></a> 
                                    </div>

									</div>
									<div class="product-info a-center">
										<h3 class="product-name">
											<a href="{{ route('banhang.getDetailProduct', $product->id_product )}}" title="Cà chua Đà Lạt">
												{{ $product->name_product }}</a>
										</h3>
										<div class="price-box clearfix">			
											<div class="special-price">
												<span class="price product-price">
													{{ number_format($product->price, 0, ',', '.') }} đ											
												</span>
											</div>
																						<div class="old-price">
												<span class="price product-price-old">
													30.000 đ
												</span>
											</div>
																					</div>		
									</div>
								</div>
							</div>
  @endforeach
                            
													</div>
												
					</div>
						
				</div>
				@endforeach

			</div>
		</div>
</section>	

<section class="awe-section-3">
		<div class="section section-deal products-view-grid">
			<div class="container">
				<div class="section-title text-center">
					<h2><a href="">Trái cây</a></h2>			
				</div>
             @foreach($chunks_1 as $chunk)
				<div class="section-content row">
					
					<div class="product">

                		<div class="owl-carousel owl-theme">
							@foreach($chunk as $product)
														<div class="col-md-12">
								<div class="product-box">
									<!-- <div class="product-thumbnail flexbox-grid"> -->
										<div>
										<a href="san-pham/ca-chua-da-lat" title="Cà chua Đà Lạt">
											<img src="{{ asset($product->image) }}" alt="{{ $product->name_product }}">
										</a>
																				<div class="sale-flash">
											<div class="before"></div> -33% 
										</div>
																				
										<div class="add-cart">
                                        <a href="{{ route('banhang.addtocart',$product->id_product) }}" class="add-to-cart pull-left" ><i class="fa fa-shopping-cart">
										</i><span>Mua</span></a> 
                                    </div>

									</div>
									<div class="product-info a-center">
										<h3 class="product-name">
											<a href="{{ route('banhang.getDetailProduct', $product->id_product )}}" title="Cà chua Đà Lạt">
												{{ $product->name_product }}</a>
										</h3>
										<div class="price-box clearfix">			
											<div class="special-price">
												<span class="price product-price">
													{{ number_format($product->price, 0, ',', '.') }} đ											
												</span>
											</div>
																						<div class="old-price">
												<span class="price product-price-old">
													30.000 đ
												</span>
											</div>
																					</div>		
									</div>
								</div>
							</div>
  @endforeach
                            
													</div>
												
					</div>
						
				</div>
				@endforeach

			</div>
		</div>
</section>	
<section class="awe-section-8">
		<div class="section_banner">
			<div class="container">
				<div class="row banner-image-col-tab">
										<div class="col-md-6 col-sm-6">
						<div class="item px-4 mb-4">
							<a href="#" class="clearfix">
								<img src="https://tk10.halink.asia/data/Flash/vAN7c1565167335.png" alt="banner">
							</a>	
						</div>
					</div>
										<div class="col-md-6 col-sm-6">
						<div class="item px-4 mb-4">
							<a href="#" class="clearfix">
								<img src="https://tk10.halink.asia/data/Flash/o0gt31565167357.png" alt="banner">
							</a>	
						</div>
					</div>
									</div>
			</div>
		</div>
	</section>

	

	

	<section class="awe-section-11">
		<div class="section section-brand mb-5">
			<div class="container">
				<div class="row">
					<div class="doitac-carousel">
                		<div class="owl-carousel owl-theme">
														<div class="col-md-12">
								<div class="brand-item">
									<a href="#" class="img25">
										<img src="https://tk10.halink.asia/data/Partners/doi-tac-11565150212.png" alt="Đối tác">
									</a>
								</div>
							</div>
														<div class="col-md-12">
								<div class="brand-item">
									<a href="#" class="img25">
										<img src="https://tk10.halink.asia/data/Partners/doi-tac-21565150236.png" alt="Đối tác">
									</a>
								</div>
							</div>
														<div class="col-md-12">
								<div class="brand-item">
									<a href="#" class="img25">
										<img src="https://tk10.halink.asia/data/Partners/doi-tac-31565150263.png" alt="Đối tác">
									</a>
								</div>
							</div>
														<div class="col-md-12">
								<div class="brand-item">
									<a href="#" class="img25">
										<img src="https://tk10.halink.asia/data/Partners/doi-tac-41565150290.png" alt="Đối tác">
									</a>
								</div>
							</div>
														<div class="col-md-12">
								<div class="brand-item">
									<a href="#" class="img25">
										<img src="https://tk10.halink.asia/data/Partners/doi-tac-51565150419.png" alt="Đối tác">
									</a>
								</div>
							</div>
														<div class="col-md-12">
								<div class="brand-item">
									<a href="#" class="img25">
										<img src="https://tk10.halink.asia/data/Partners/doi-tac-61565150445.png" alt="Đối tác">
									</a>
								</div>
							</div>
													</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<div id="myModall" class="modal fade" role="dialog" style="z-index:99999999999;top:10%">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" 
                style="position: absolute;top:-20px;right:-20px;font-size: 30px;height: 40px;width: 40px;color: #fff;border-radius: 50%;background:#000;opacity: 1;font-weight: normal;">&times;
                </button>
                <div class="row">
                	<div class="col-md-6">
                		<div class="image margin-bottom-15">
							<a class="img-product clearfix" title="" href="javascript:;">
								<img id="product-featured-image-quickview" class="img-responsive product-featured-image-quickview" src="//bizweb.dktcdn.net/100/308/325/products/43350e0a3ce5e4aa54ddaf90d33728.jpg?v=1524537029390" alt="quickview">
							</a>
						</div>
                	</div>
                	<div class="col-md-6">
                		<div class="content">
                			<h3 class="product-name"><a href="">Dưa leo Đà Lạt</a></h3>
                			<div class="status clearfix">
								Trạng thái: <span class="inventory"><i class="fa fa-check"></i> Còn hàng</span>
							</div>
							<div class="price-box margin-bottom-20 clearfix">			
								<div class="special-price f-left">
									<span class="price product-price">65.000₫</span>
								</div>
								<div class="old-price">									
									<span class="price product-price-old" style="display: none;">
										giá sale
									</span>
								</div>
							</div>
							<div class="product-description rte">
								Giá trị dinh dưỡng: &nbsp; Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức. Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt giúp duy trì sức khỏe, tốt cho tim mạch, ngăn ngừa tiến trình bệnh tiểu đường. &nbsp; Cũng như Táo, Nho của Mỹ, Úc… đều được bảo quả
							</div>
							<div class="info-other">
								<p><label class="inline-block">Hãng sản xuất</label>: Úc</p>
								<p><label class="inline-block">Loại sản phẩm</label>: Hoa quả tươi</p>
							</div>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div> 


</main>


 
   



<script>
    new WOW().init();
</script>

@endsection