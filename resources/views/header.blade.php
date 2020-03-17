

<div id="header">
	<!--  <div class="header-top" >
		
	 	
	</div>  -->
	<div class="header-body" style="background-color: #CCFFFF; >
	<div class="container beta-relative">




		<div class="pull-left">

			<a href="{{route('trangchu')}}" id="logo"><img src="source/image/product/logo0.png" width="300px" alt=""></a>
		</div>

		<div>
			<!-- <marquee width="50%" style="color: red; font-size: 25px;" <i> SHOP KL-RACING Cung cấp phụ tùng độ xe các loại..</i></marquee> -->
			<center>


				<script type="text/javascript">


					farbbibliothek = new Array();


					farbbibliothek[0] = new Array("#FF0000","#FF1100","#FF2200","#FF3300","#FF4400","#FF5500","#FF6600","#FF7700","#FF8800","#FF9900","#FFaa00","#FFbb00","#FFcc00","#FFdd00","#FFee00","#FFff00","#FFee00","#FFdd00","#FFcc00","#FFbb00","#FFaa00","#FF9900","#FF8800","#FF7700","#FF6600","#FF5500","#FF4400","#FF3300","#FF2200","#FF1100");


					farbbibliothek[4] = new Array("#00FF00","#000000","#00FF00","#00FF00");


					farbbibliothek[1] = new Array("#00FF00","#FF0000","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00");


					farbbibliothek[3] = new Array("#FF0000","#FF4000","#FF8000","#FFC000","#FFFF00","#C0FF00","#80FF00","#40FF00","#00FF00","#00FF40","#00FF80","#00FFC0","#00FFFF","#00C0FF","#0080FF","#0040FF","#0000FF","#4000FF","#8000FF","#C000FF","#FF00FF","#FF00C0","#FF0080","#FF0040");


					farbbibliothek[2] = new Array("#FF0000","#EE0000","#DD0000","#CC0000","#BB0000","#AA0000","#990000","#880000","#770000","#660000","#550000","#440000","#330000","#220000","#110000","#000000","#110000","#220000","#330000","#440000","#550000","#660000","#770000","#880000","#990000","#AA0000","#BB0000","#CC0000","#DD0000","#EE0000");


					farbbibliothek[5] = new Array("#000000","#000000","#000000","#FFFFFF","#FFFFFF","#FFFFFF");


					farbbibliothek[6] = new Array("#0000FF","#FFFF00");

					farben = farbbibliothek[4];
					function farbschrift()
					{
						for(var i=0 ; i<Buchstabe.length; i++)
						{
							document.all["a"+i].style.color=farben[i];
						}
						farbverlauf();
					}
					function string2array(text)
					{
						Buchstabe = new Array();
						while(farben.length<text.length)
						{
							farben = farben.concat(farben);
						}
						k=0;
						while(k<=text.length)
						{
							Buchstabe[k] = text.charAt(k);
							k++;
						}
					}
					function divserzeugen()
					{
						for(var i=0 ; i<Buchstabe.length; i++)
						{
							document.write("<span style='font-size:40px;font-weight:bold' id='a"+i+"' class='a"+i+"'>"+Buchstabe[i] + "</span>");
						}
						farbschrift();
					}
					var a=1;
					function farbverlauf()
					{
						for(var i=0 ; i<farben.length; i++)
						{
							farben[i-1]=farben[i];
						}
						farben[farben.length-1]=farben[-1];

						setTimeout("farbschrift()",30);
					}
//
var farbsatz=1;
function farbtauscher()
{
	farben = farbbibliothek[farbsatz];
	while(farben.length<text.length)
	{
		farben = farben.concat(farben);
	}
	farbsatz=Math.floor(Math.random()*(farbbibliothek.length-0.0001));
}
setInterval("farbtauscher()",5000);

text= " SHOP KL-RACING Độ xe chuyên nghiệp... "; 
string2array(text);
divserzeugen();
//document.write(text);
</script>
</center>
<br />

</div>
<div class="pull-right beta-components space-left ov">
	<div class="space10">&nbsp;</div>

	<div class="social"  >
		<style type="text/css">
			.social-icons-agileits {
				float: left;
				padding-top: .8em;
			}
			.social-icons-agileits ul li{
				color: #fff;
				font-size: 1em;
				letter-spacing:1px;
			}
			.social-icons-agileits ul li span {
				color: #fff;
				font-size: 1em;
			}
			.social-icons-agileits ul li{
				display:inline-block;
			}
			.social-icons-agileits ul li a{
				color:#fff;
				font-size:1.1em;
				padding:10px;
				transition: 0.5s all;
				-webkit-transition: 0.5s all;
				-moz-transition: 0.5s all;
				-o-transition: 0.5s all;
				-ms-transition: 0.5s all;
			}
			/*--social-icons--*/
			.social {
				text-align: center;
				transform: translateY(-50%);
				float: right;
				margin-top: 1.5em;
			}
			.social li {
				display: inline;
				margin-right: 7px;
			}
			.social .link {
				display: inline-block;
				vertical-align: middle;
				position: relative;
				width: 40px;
				height: 40px;
				border-radius: 50%;
				-webkit-border-radius: 50%;
				-moz-border-radius: 50%;
				-o-border-radius: 50%;
				-ms-border-radius: 50%;
				background-clip: content-box;
				padding: 2px;
				transition: .5s;
				color: #D7D0BE;
				margin-right: 10px;
				text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2), 0 1px 0 rgba(255, 255, 255, 0.2);
				font-size: 16px;
			}
			.social .link span {
				display: block;
				position: absolute;
				text-align: center;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				-webkit-transform:translate(-50%, -50%);
				-ms-transform:translate(-50%, -50%);
				-o-transform: translate(-50%, -50%);
				-moz-transform: translate(-50%, -50%);
			}
			.social .link:hover {
				color: white;
				transform: translateX(0px) rotate(360deg);
			}
			.social .link.google-plus {
				background-color: tomato;
				color: white;
			}
			.social .link.twitter {
				background-color: #00ACEE;
				color: white;
			}
			.social .link.facebook {
				background-color: #3B5998;
				color: white;
			}
		</style>
		<ul>
			<a href="https://www.facebook.com/" class="link facebook" target="_parent"><span class="fa fa-facebook-square"></span></a>
			<a href="https://www.google.com/" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>
			<a href="https://www.gmail.com/" class="link google-plus" target="_parent"><span class="fa fa-google-plus-square"></span></a>
		</ul>
	</div>

	<div class="beta-comp">


		<form role="search" method="get" id="searchform" action="{{route('seach')}}">

			<input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
			<button class="fa fa-search" type="submit" id="searchsubmit"></button>
		</form>
	</div>

	<div class="beta-comp">
		@if(Session::has('cart'))
		<div class="cart">
			<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if(Session::has('cart')){{Session('cart')->TongSL}}@else Trống @endif) 


				<a href="{{route('dathang')}}" class="beta-btn primary text-center" >Thanh toán <i class="fa fa-chevron-right"></i></a>

			</div>



			<div class="beta-dropdown cart-body" style="display: none; " >


				<div class="center">
					<div class="space10">&nbsp;</div>

				</div>

				@foreach($sanpham_cart as $product)

				<div class="cart-item">
					<div class="media">
						<a class="pull-left" href="#"><img src="source\image\product\{{$product['SP']['img']}}" alt=""></a>
						<div class="media-body">
							<span class="cart-item-title">{{$product['SP']['TenSP']}}</span>
							<a class="cart-item-delete" href=""><i class="fa fa-times"></i></a>

							<span class="cart-item-amount"> {{$product['SL']}} * <span> {{ number_format( $product['SP']['DonGia'])}} đồng </span></span>
						</div>
					</div>
				</div>
				@endforeach


				<div class="cart-caption">
					
				</div>
			</div>
		</div> 
		@endif
	</div>
</div>
<div class="clearfix"></div>


</div> <!-- .header-body -->
<div class="header-bottom" style="background-color: #FF9933; padding: 10px; ">
	<div class="container">
		<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>AAA</span> <i class="fa fa-bars"></i></a>
		<div class="visible-xs clearfix"></div>
		<nav class="main-menu">
			<ul class="l-inline ov">
				<li><a href="{{route('trangchu')}}"style="color: black; font-size: 20px ;font-weight: bold; font-style: normal;"  > <b> Trang chủ </b> </a></li>
				<li><a href="" style="color: black ;font-size: 20px ;font-weight: bold; font-style: normal;"> <b> Danh mục sản phẩm</b></a>
					<ul class="sub-menu">
						@foreach($loai_sp as $loai)

						<li><a href="{{route('loaisanpham',$loai->id)}}">{{$loai->TenSP}}</a></li>
						@endforeach

					</ul>
				</li>
				<li><a href="{{route('gioithieu')}}" style="color: black;font-size: 20px ;font-weight: bold; font-style: normal;"><b>Tin tức BIKER</b></a></li>
				<li><a href="{{route('lienhe')}}" style="color: black;font-size: 20px ;font-weight: bold; font-style: normal;"><b>Liên hệ</b></a></li>

				<div class="container">

					<div class="pull-right auto-width-right">
						<ul class="top-details menu-beta l-inline">



							@if(Auth::check())
							<li><a href="" style="color: #0000EE">Chào {{Auth::user()->name}}</a></li>
							<li><a href="{{route('dangxuat')}}" style="color: #0000EE">Đăng xuất</a></li>
							@else
							<li><a href="{{route('dangki')}}" style="color: #0000EE">Đăng kí</a></li>
							<li><a href="{{route('dangnhap')}}" style="color: #0000EE">Đăng nhập</a></li>
							@endif


						</ul>
					</div>
					<div class="clearfix"></div>
				</div> <!-- .container -->

			</ul>

		</nav>
	</div> <!-- .container -->
</div> <!-- .header-bottom -->
</div> 

