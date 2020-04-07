@extends('master')
@section('content')




<div class="banner-bottom" style=" padding-bottom: 0px;">
	<!--//screen-gallery-->
	<div class="wthree_title_agile" style="font-size: 20px">
		<h3>TOP <span>product</span> HOT</h3>
	</div>
	<button class="btn-spch">
		<p class="sub_para"> SẢN PHẨM CHĨNH HÃNG</p>
	</button>
	<style>
		button.btn-spch {
			margin-left: 481px;
			border-radius: 5px;
			border: 2px blue;
			padding-left: 11px;
			height: 28px;
		}

		.col-sm-3 {
			margin-bottom: 15px;
		}
	</style>
	<div class="inner_w3l_agile_grids">
		<div class="sreen-gallery-cursual">

			<div id="owl-demo" class="owl-carousel">

				@foreach($slide as $sl)

				<div class="item-owl">
					<div class="test-review">
						<img src="source/image/slide/{{$sl->Hinh}}" class="img-responsive-slide" alt="" width="400px" height="400px" />
						<h5 style="color: #FF0000">{{$sl->Ten}}</h5>
					</div>
				</div>
				@endforeach
				<!--//screen-gallery-->
			</div>
			<style>
				img.img-responsive-slide {
					height: 200px;
					width: 200px;
				}

				.owl-carousel .owl-wrapper-outer {
					overflow: inherit !important;
					position: relative;
					width: 100%;
				}

				.inner_w3l_agile_grids {
					margin-top: 13px !important;
				}

				.banner-bottom {
					margin-bottom: -48px;
				}

				.space60 {
					line-height: 7px;
				}
			</style>
		</div>
	</div>
</div>

<div class="gallery" id="gallery" style="padding-top: 0px; background: #CCFFFF ;">
	<!-- gallery -->
	<div class="container">
		<div class="wthree_title_agile">
			<h3> Show Room <span>DECAL</span> HOT </h3>
		</div>
		<div class="inner_w3l_agile_grids">
			<div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
				<a href="source/image/product/g1.jpg">
					<div class="nd-wrap nd-style-8">
						<img src="source/image/product/g1.jpg" class="img-responsive" alt="" width="350px" height="232px" />
						<div class="nd-content">
							<div class="nd-content_inner">
								<div class="nd-content_inner1">
									<h4 class="nd-title">SATRIA F150</h4>
									<span class="nd-icon">
										<i class="glyphicon glyphicon-link"></i>
									</span>
									<span class="nd-icon">
										<i class="glyphicon glyphicon-search"></i>
									</span>

								</div>
							</div>
						</div>
					</div>
				</a>


			</div>
			<div class="col-md-4 gal-gd wow fadeInUp animated" data-wow-delay=".5s">
				<a href="source/image/product/g2.jpg">
					<div class="nd-wrap nd-style-8">
						<img src="source/image/product/g2.jpg" class="img-responsive" alt=" " width="350px" height="232px" />
						<div class="nd-content">
							<div class="nd-content_inner">
								<div class="nd-content_inner1">
									<h4 class="nd-title">S1000RR 2018</h4>
									<span class="nd-icon">
										<i class="glyphicon glyphicon-link"></i>
									</span>
									<span class="nd-icon">
										<i class="glyphicon glyphicon-search"></i>
									</span>

								</div>
							</div>
						</div>
					</div>
				</a>


			</div>
			<div class="col-md-4 gal-gd wow fadeInRight animated" data-wow-delay=".5s">
				<a href="source/image/product/g3.jpg">
					<div class="nd-wrap nd-style-8">
						<img src="source/image/product/g3.jpg" class="img-responsive" alt=" " width="350px" height="232px" />
						<div class="nd-content">
							<div class="nd-content_inner">
								<div class="nd-content_inner1">
									<h4 class="nd-title">EXCITER 150RC</h4>
									<span class="nd-icon">
										<i class="glyphicon glyphicon-link"></i>
									</span>
									<span class="nd-icon">
										<i class="glyphicon glyphicon-search"></i>
									</span>

								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 gal-gd-sec wow fadeInLeft animated" data-wow-delay=".5s">
				<a href="source/image/product/g4.jpg">
					<div class="nd-wrap nd-style-8">
						<img src="source/image/product/g4.jpg" class="img-responsive" alt=" " width="350px" height="232px" />
						<div class="nd-content">
							<div class="nd-content_inner">
								<div class="nd-content_inner1">
									<h4 class="nd-title">KAWASAKI Z900</h4>
									<span class="nd-icon">
										<i class="glyphicon glyphicon-link"></i>
									</span>
									<span class="nd-icon">
										<i class="glyphicon glyphicon-search"></i>
									</span>

								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 gal-gd-sec wow fadeInRight animated" data-wow-delay=".5s">
				<a href="source/image/product/g5.jpg">
					<div class="nd-wrap nd-style-8">
						<img src="source/image/product/g5.jpg" class="img-responsive" alt="" width="350px" height="232px" />
						<div class="nd-content">
							<div class="nd-content_inner">
								<div class="nd-content_inner1">
									<h4 class="nd-title">SATRIA F150</h4>
									<span class="nd-icon">
										<i class="glyphicon glyphicon-link"></i>
									</span>
									<span class="nd-icon">
										<i class="glyphicon glyphicon-search"></i>
									</span>

								</div>
							</div>
						</div>
					</div>
				</a>
			</div>

		</div>
	</div>
</div>



<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="beta-products-list">
						<h2 style="color: #EE0000">Sản Phẩm Mới</h2>
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy {{count($spmoi)}} sản phảm</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							@foreach($spmoi as $moi)
							<div class="col-sm-3">
								<div class="single-item">
									@if($moi->giaKM!=0)
									<div class="ribbon-wrapper">
										<div class="ribbon sale">New</div>
									</div>
									@endif

									<div class="single-item-header">
										<a href="{{route('chitietsanpham',$moi->id)}}"><img src="source\image\product\{{$moi->img}}" alt="" height="220px" width="260px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$moi->TenSP}}</p>
										<p class="single-item-price" style="font-size: 15px">
											@if($moi->giaKM==0)
											<span class="flash-sale">{{number_format($moi->DonGia)}} đồng</span>

											@else
											<span class="flash-del">{{number_format($moi->DonGia)}} đồng</span>
											<span class="flash-sale">{{number_format($moi->giaKM)}} đồng</span>

											@endif
										</p>
									</div>
									<style>
										a.add-to-cart.pull {
											border-radius: 50%;
											/* margin-top: -20px; */
										}
									</style>
									<div class="single-item-caption">
										<a class="add-to-cart pull" href="{{route('themgiohang',$moi->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chitietsanpham',$moi->id)}}">Chi Tiết<i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach

							<div class="row">{{$spmoi->links()}}</div>

						</div>
					</div> <!-- .beta-products-list -->


					<!-- about -->
					<div class="services" id="service" style="padding-top: 0px; background: #CCFFFF ;">
						<div class="container">
							<div class="wthree_title_agile">
								<h3> SALE <span>DAY</span> FLAST </h3>
							</div>
							<p class="sub_para">Giảm giá SỐC</p>
							<div class="inner_w3l_agile_grids">
								@foreach($spcu as $cu)

								<div class="col-md-4 agileits_service_grid_btm_left">
									<div class="agileits_service_grid_btm_left1">
										<div class="agileits_service_grid_btm_left2">
											<h5 style="color: #FF0000">TOP SẢN PHẨM</h5>
											<p>Tên sản phẩm<span>:</span>{{$cu->TenSP}}</p>
											<p>Giá KM<span>:</span>{{number_format($cu->giaKM)}} đồng </p>
											<p>Mon, Tue, Thu, Fri, Sat</p>

										</div>
										<img src="source\image\product\{{$cu->img}}" alt=" " class="img-responsive">
									</div>
								</div>
								@endforeach
								<div class="clearfix"> </div>
							</div>
							<style>
								.agileits_service_grid_btm_left2 {
									height: 234px;
								}

								img.img-responsive {
									height: 260px;
								}
							</style>
						</div>
					</div>





					<div class="beta-products-list">
						<h2 style="color: #EE0000">Sản Phẩm Khuyến Mại</h2>
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy {{count($spkm)}} sản phảm</p>
							<div class="clearfix"></div>
						</div>
						<div class="row">
							@foreach($spkm as $km)
							<div class="col-sm-3">
								<div class="single-item">
									@if($km->giaKM!=0)
									<div class="ribbon-wrapper">
										<div class="ribbon sale">Sale</div>
									</div>
									@endif


									<div class="single-item-header">
										<a href="{{route('chitietsanpham',$km->id)}}"><img src="source\image\product\{{$km->img}}" alt="" height="220px" width="260px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$km->TenSP}}</p>
										<p class="single-item-price" style="font-size: 15px">
											<span class="flash-del">{{number_format($km->DonGia)}} đồng</span>
											<span class="flash-sale">{{number_format($km->giaKM)}} đồng</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull" href="{{route('themgiohang',$km->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chitietsanpham',$km->id)}}"> Chi Tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach

							<div class="row">{{$spkm->links()}}</div>
						</div>


					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->

</div>
@endsection