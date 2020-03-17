@extends('master')
@section('content')
 
 <div class="beta-products-list">
							<h2 style="color: #EE0000">Sản Phẩm tìm kiếm</h2>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($sp)}} sản phảm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">

								@foreach($sp as $tk)
								<div class="col-sm-3">
									<div class="single-item">
                                         @if($tk->giaKM!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif


										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$tk->id)}}"><img src="source\image\product\{{$tk->img}}" alt="" height="220px" width="260px" ></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$tk->tenSP}}</p>
											<p class="single-item-price" style="font-size: 15px" >
												<span class="flash-del">{{number_format($tk->DonGia)}} đồng</span>
												<span class="flash-sale">{{number_format($tk->giaKM)}} đồng</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang',$tk->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitietsanpham',$tk->id)}}"> Chi Tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach

								
							</div>

							
						</div>

@endsection