@extends('master')
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Sản phẩm</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="index.html">Home</a> / <span>Sản phẩm</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<!-- <div class="space60">&nbsp;</div> -->
			<div class="row">
				<div class="col-sm-3">
					<ul class="aside-menu">

						@foreach($loai as $l)
						<li><a href="{{route('loaisanpham',$l->id)}}">{{$l->TenSP}}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="col-sm-9">
					<div class="beta-products-list">
						<h4>SẢN PHẨM</h4>
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy {{count($sp_theoloai)}} sản phảm</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							@foreach($sp_theoloai as $sp)
							<div class="col-sm-4">
								<div class="single-item">

									@if($sp->giaKM!=0)
									<div class="ribbon-wrapper">
										<div class="ribbon sale">Sale</div>
									</div>
									@endif

									<div class="single-item-header">
										<a href="{{route('chitietsanpham',$sp->id)}}"><img src="source/image/product/{{$sp->img}}" alt="" height="220px" width="260px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$sp->TenSP}}</p>
										<p class="single-item-price" style="font-size: 15px">


											@if($sp->giaKM==0)
											<span class="flash-sale">{{number_format($sp->DonGia)}} đồng</span>

											@else
											<span class="flash-del">{{number_format($sp->DonGia)}} đồng</span>
											<span class="flash-sale">{{number_format($sp->giaKM)}} đồng</span>

											@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull" href="{{route('themgiohang',$sp->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chitietsanpham',$sp->id)}}">Chi Tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>

										<style>
											a.add-to-cart.pull {
												border-radius: 50%;
											}
										</style>
									</div>
								</div>


							</div>
							<div>
								<a href="https://vatgia.com/raovat/3626/7129655/motul-dau-nhot-thuong-hieu-150-nam.html"><img src="source/image/banner1.jpg" alt="" height="420px" width="360px" style=" float: right;"></a>
							</div>
							@endforeach
						</div>
					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<h4>SẢN PHẨM KHÁC</h4>
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy {{count($sp_khac)}} sản phảm</p>
							<div class="clearfix"></div>
						</div>
						<div class="row">
							@foreach($sp_khac as $spk)
							<div class="col-sm-4">
								<div class="single-item">


									@if($spk->giaKM!=0)
									<div class="ribbon-wrapper">
										<div class="ribbon sale">Sale</div>
									</div>
									@endif
									<div class="single-item-header">
										<a href="{{route('chitietsanpham',$spk->id)}}"><img src="source/image/product/{{$spk->img}}" alt="" height="220px" width="260px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$spk->TenSP}}</p>
										<p class="single-item-price" style="font-size: 15px">

											@if($spk->giaKM==0)
											<span class="flash-sale">{{number_format($spk->DonGia)}} đồng</span>

											@else
											<span class="flash-del">{{number_format($spk->DonGia)}} đồng</span>
											<span class="flash-sale">{{number_format($spk->giaKM)}} đồng</span>

											@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull" href="{{route('themgiohang',$spk->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chitietsanpham',$spk->id)}}">Chi Tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class="space40">&nbsp;</div>

					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection