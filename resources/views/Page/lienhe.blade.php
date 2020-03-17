@extends('master')
@section('content')

<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h2 class="inner-title"  >Liên hệ & Giới thiệu</h2>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Trang chủ</a> / <span>Liên hệ</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="our-history">
				<h2 class="text-center wow fadeInDown" style="background-color: #CCFFFF ; color: red;" >Quá trình phát triển</h2>
				<div class="space35">&nbsp;</div>

				<div class="history-slider" >
					<div class="history-navigation" style="text-align: center;" >
						
						<a data-slide-index="2" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2013</span></a>
						<a data-slide-index="3" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2015</span></a>
						<a data-slide-index="4" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2017</span></a>
						<a data-slide-index="5" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2019</span></a>
						<a data-slide-index="6" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">...</span></a>
					</div>

         </div>
        </div>

     

     	<h2 class="text-center wow fadeInDownwow fadeInDown" style="background-color: #CCFFFF ; color: red;" >Giới thiệu</h2>
			<div class="space20">&nbsp;</div>
			<h5 class="text-center other-title wow fadeInLeft">Trung tâm mua bán Phụ tùng, đồ chơi xe máy Shop KL-Racing</h5>

			<div style="padding-right: 30px;
 
  padding-left: 80px;" >
			<p class="text-center wow fadeInRight" style="font-size: 22px; text-align: left; color: #333399 ;background-color: #99FFFF" >+Chuyên bán đầy đủ đồ chơi như: Racing Boy, phuộc YSS, các loại đồ chơi Rizoma, Brembo, tay thắng CRG, bao tay Barracuda....và phụ tùng thay thế như: vỏ xeMichelin, Dunlop, sên DID, dây curoa Bando, ổ khóa Solcar, bình acquy chính hãng... <br />
				+Shop KL-Racing là sạp đồ chơi - phụ tùng xe máy Online đầu tiên sử dụng chính sách giao hàng tận nơi trên toàn quốc nhầm phục vụ cho anh em biker không có thời gian đi mua, khách hàng ở xa và đặc biệt là khách ở những tỉnh thành lân cận không có điều kiện thuận lợi đi mua hàng.<br />

                 +Shop KL-Racing ra đời với mong muốn tạo thêm một sự lựa chọn mới cho AE biker và mang đến những món đồ chơi xe máy chất lượng nhất với giá cả cạnh tranh.</p>
              </div>   
			<div class="space20">&nbsp;</div>

	<div class="beta-map">
		<h2>Địa chỉ MAP:</h2>
		
		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3780.10856613826!2d105.69296571420627!3d18.65912356979364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1570176138638!5m2!1svi!2s" width="400" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>


	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2> Form Liên hệ:Giao hàng/Trả hàng</h2>
					<div class="space20">&nbsp;</div>
					
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">	
						<div class="form-block">
							<input name="your-name" type="text" placeholder="Họ Tên Của Bạn">
						</div>
						<div class="form-block">
							<input name="your-email" type="email" placeholder="Địa Chỉ Email">
						</div>
						<div class="form-block">
							<input name="your-subject" type="text" placeholder="Tiêu Đề">
						</div>
						<div class="form-block">
							<textarea name="your-message" placeholder="Nội Dung"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary"> Gửi <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>THÔNG TIN LIÊN LẠC</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Địa chỉ</h6>
					<p>
						88 Nguyễn Thiếp<br>
						Thành phố Vinh <br>
						Nghệ An<br>
						ĐT:0986686868
					</p>
					<div class="space20">&nbsp;</div>
					
					<h6 class="contact-title">Về chúng tôi</h6>
					<p>
						Nguyenkimluong97@gmail.com
					</p>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection