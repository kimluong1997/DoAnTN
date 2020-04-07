@extends('master')
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h2 class="inner-title">SẢN PHẨM:{{$sanpham->TenSP}} </h2>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="{{route('trangchu')}}">Trang chủ</a> / <span>Thông tin chi tiết sản phẩm</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="container">
	<div id="content">
		<div class="row">
			<div class="col-sm-9">

				<div class="row">
					<div class="col-sm-4">
						<img src="source/image/product/{{$sanpham->img}}" alt="">
					</div>
					<div class="col-sm-8">
						<div class="single-item-body">
							<p class="single-item-title">
								<h2>{{$sanpham->TenSP}}</h2>
							</p>
							<p class="single-item-price">
								@if($sanpham->giaKM==0)
								<span class="flash-sale">{{number_format($sanpham->DonGia)}} đồng</span>

								@else
								<span class="flash-del">{{number_format($sanpham->DonGia)}} đồng</span>
								<span class="flash-sale">{{number_format($sanpham->giaKM)}} đồng</span>

								@endif
							</p>
						</div>

						<div class="clearfix"></div>
						<div class="space20">&nbsp;</div>

						<div class="single-item-desc">
							<p>{{$sanpham->MoTa}}</p>
						</div>
						<div class="space20">&nbsp;</div>

						<p>Options:</p>
						<div class="single-item-options">

							<select class="wc-select" name="color">
								<option>Số lượng</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
							</select>
							<a class="add-to-cart" href="{{route('themgiohang',$sanpham->id)}}"><i class="fa fa-shopping-cart"></i></a>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="space40">&nbsp;</div>
				<div class="woocommerce-tabs">
					<ul class="tabs">
						<li><a href="#tab-description">Mô Tả</a></li>

					</ul>

					<div class="panel" id="tab-description">
						<p>{{$sanpham->MoTa}}</p>
					</div>

				</div>
				<div class="space50">&nbsp;</div>
				<div class="beta-products-list">
					<h4>Sản phẩm tương tự</h4>

					<div class="row">
						@foreach($sp_tuongtu as $sp_tuongtu)
						<div class="col-sm-4">
							<div class="single-item">
								<div class="single-item-header">
									<a href="{{route('chitietsanpham',$sp_tuongtu->id)}}"><img src="source/image/product/{{$sp_tuongtu->img}}" alt="" height="220px" width="260px"></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">{{$sp_tuongtu->TenSP}}</p>
									<p class="single-item-price" style="font-size: 15px">
										@if($sp_tuongtu->giaKM==0)
										<span class="flash-sale">{{number_format($sp_tuongtu->DonGia)}} đồng</span>

										@else
										<span class="flash-del">{{number_format($sp_tuongtu->DonGia)}} đồng</span>
										<span class="flash-sale">{{number_format($sp_tuongtu->giaKM)}} đồng</span>

										@endif
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull" href="{{route('themgiohang',$sanpham->id)}}"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="{{route('chitietsanpham',$sanpham->id)}}"> Chi tiết <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div> <!-- .beta-products-list -->
			</div>
			<div>
				<a href="https://viettimes.vn/top-20-smartphone-dang-mua-nhat-tren-the-gioi-2017-147313.html"><img src="source/image/banner.jpg" alt="" height="520px" width="260px"></a>

			</div>
		</div>
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection