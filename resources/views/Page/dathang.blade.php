@extends('master')
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">

		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb">
				<a href="index.html">Trang chủ</a> / <span>Đặt hàng</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="container">
	<div id="content">

		<form action="{{route('dathang')}}" method="post" class="beta-form-checkout">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="row-tt">@if(Session::has('thongbao')){{Session::get('thongbao')}}@endif</div>
			<div class="row">
				<div class="col-sm-6">
					<button class="titlee">Đặt hàng</button>
					<div class="space20">&nbsp;</div>

					<div class="form-block">
						<label for="name">Họ tên*</label>
						<input type="text" name="name" placeholder="Họ tên" required>
					</div>
					<div class="form-block">
						<label>Giới tính </label>
						<input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
						<input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>

					</div>


					<div class="form-block">
						<label for="email">Email*</label>
						<input type="email" id="email" name="email" required placeholder="Email@gmail.com">
					</div>

					<div class="form-block">
						<label for="adress">Địa chỉ*</label>
						<input type="text" id="address" name="address" placeholder="Địa chỉ" required>
					</div>


					<div class="form-block">
						<label for="phone">Điện thoại*</label>
						<input type="text" id="phone" name="phone" placeholder="Điện thoại" required>
					</div>

					<div class="form-block">
						<label for="notes">Ghi chú</label>
						<textarea id="notes" name="notes"></textarea>
					</div>
					<style>
						.form-block input,
						.form-block select,
						.beta-form-checkout textarea {
							width: 60%;
							overflow: hidden;
							border-radius: 7px;
							border-color: #FF9933;
						}

						button.titlee {
							border-color: FF9933;
							background-color: #FF9933;
							height: 30px;
							width: auto;
							text-align: center;
							color: black;
							padding: 0px 10px;
							border-radius: 7px;
							font-size: 18px;
							border-color: #FF9933;

						}

						h5.tiltle {
							background-color: #FF9933;
							height: auto;
							width: auto;
							text-align: center;
							color: black;
							padding: 0px 10px;
							border-radius: 7px;
							font-size: 18px;
							border-color: #FF9933;

						}
					</style>
				</div>
				<div class="col-sm-6">
					<div class="your-order">
						<div class="your-order-head">
							<h5 class="tiltle">Đơn hàng của bạn</h5>
						</div>
						<div class="your-order-body" style="padding: 0px 10px">
							<div class="your-order-item">
								<div>
									@if(Session::has('cart'))
									@foreach($sanpham_cart as $cart)
									<!--  one item	 -->
									<div class="media">
										<img width="25%" src="source\image\product\{{$cart['SP']['img']}}" alt="" class="pull-left">
										<div class="media-body">
											<p class="font-large">{{$cart['SP']['TenSP']}}</p>

											<span class="color-gray your-order-info">Đơn giá: {{number_format($cart['Gia'])}} đồng</span>
											<span class="color-gray your-order-info">Số lượng: {{$cart['SL']}}</span>
										</div>
									</div>
									<!-- end one item -->
									@endforeach
									@endif
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="your-order-item">
								<div class="pull-left">
									<p class="your-order-f18">Tổng tiền:</p>
								</div>
								<div class="pull-right">
									<h5 class="color-black">@if(Session::has('cart')){{number_format($TongTien)}}@else 0 @endif đồng</h5>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="your-order-head">
							<h5 class="tiltle">Hình thức thanh toán</h5>
						</div>

						<div class="your-order-body">
							<ul class="payment_methods methods">
								<li class="payment_method_bacs">
									<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
									<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
									<div class="payment_box payment_method_bacs" style="display: block;">
										Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
									</div>
								</li>

								<li class="payment_method_cheque">
									<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
									<label for="payment_method_cheque">Chuyển khoản </label>
									<div class="payment_box payment_method_cheque" style="display: none;">
										Chuyển tiền đến tài khoản sau:
										<br>- Số tài khoản: 123 456 789
										<br>- Chủ TK: Nguyễn Kim Lương
										<br>- Ngân hàng ACB, Chi nhánh Vinh
									</div>
								</li>

							</ul>
						</div>

						<div class="text-center"><button type="submit" class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></button></div>
					</div> <!-- .your-order -->
				</div>
			</div>
		</form>
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection