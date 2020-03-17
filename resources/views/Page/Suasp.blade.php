

<div id="header">
	 <div class="header-top">
		
		</div> <!-- .header-top -->
		<div class="header-body" style="background-color: #CCFFFF; >
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="index.html" id="logo"><img src="source/image/product/logo.png" width="400px" alt=""></a>
				</div>

				<div>
					
					<h3> <i> SHOP KL-RACING Cung cấp phụ tùng độ xe các loại..</i> </h3>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="/">
					        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						@if(Session::has('cart'))
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if(Session::has('cart')){{Session('cart')->totalQty}}@else Trống @endif) 


									<a href="{{route('dathang')}}" class="beta-btn primary text-center" >Thanh toán <i class="fa fa-chevron-right"></i></a>
							
							</div>

                         

							<div class="beta-dropdown cart-body" style="display: inline; " >


								<div class="center">
										<div class="space10">&nbsp;</div>
										
									</div>
								
								@foreach($product_cart as $product)

								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="source\image\product\{{$product['item']['img']}}" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">{{$product['item']['TenSP']}}</span>
											<a class="cart-item-delete" href=""><i class="fa fa-times"></i></a>
										
											<span class="cart-item-amount"> {{$product['qty']}} * <span> {{ number_format( $product['item']['DonGia'])}} đồng </span></span>
										</div>
									</div>
								</div>
                                  @endforeach
                               

								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">  {{ number_format( Session ('cart') ->  totalPrice)}} đồng </span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="checkout.html" class="beta-btn primary text-center">Thanh toán <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> 
						  @endif
					</div>
				</div>
				<div class="clearfix"></div>
			

		</div> <!-- .header-body -->
	
	</div> 

