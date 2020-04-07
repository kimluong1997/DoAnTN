<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> KL_SHOP </title>
	<base href="{{asset('')}}">
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/style.css">
	<link rel="stylesheet" href="source/assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css">


	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Car Rental Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="body/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="body/css/galleryeffect.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="body/css/jquery.flipster.css">
	<link rel='stylesheet' href='css/dscountdown.css' type='text/css' media='all' />
	<link href="body/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="body/css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">



</head>

<body>
	@include('header')
	<!-- #header -->
	<div class="rev-slider">
		@yield('content')
	</div>
	<!-- .container -->
	@include('footer')



	<!-- include js files -->
	<script src="source/assets/dest/js/jquery.js"></script>
	<script src="source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="source/assets/dest/vendors/animo/Animo.js"></script>
	<script src="source/assets/dest/vendors/dug/dug.js"></script>
	<script src="source/assets/dest/js/scripts.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="source/assets/dest/js/waypoints.min.js"></script>
	<script src="source/assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="source/assets/dest/js/custom2.js"></script>
	<script>
		$(document).ready(function($) {
			$(window).scroll(function() {
				if ($(this).scrollTop() > 150) {
					$(".header-bottom").addClass('fixNav')
				} else {
					$(".header-bottom").removeClass('fixNav')
				}
			})
		})
	</script>




	<script type="text/javascript" src="body/js/jquery-2.1.4.min.js"></script>
	<!--scripts-->
	<!-- Counter required files -->
	<script type="text/javascript" src="body/js/dscountdown.min.js"></script>
	<script src="body/js/demo-1.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$('.demo2').dsCountDown({
				endDate: new Date("December 24, 2020 23:59:00"),
				theme: 'black'
			});
		});
	</script>
	<!-- //Counter required files -->

	<!--//scripts-->
	<script type="text/javascript" src="body/js/move-top.js"></script>
	<script type="text/javascript" src="body/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!--banner Slider starts Here-->
	<script src="body/js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function() {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function() {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function() {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<script src="js/modernizr.custom.js"></script>


	<script src="body/js/jquery.flipster.js"></script>
	<script>
		$(function() {
			$(".flipster").flipster({
				style: 'carousel',
				start: 0
			});
		});
	</script>
	<!--banner Slider starts Here-->
	<!-- required-js-files-->
	<link href="body/css/owl.carousel.css" rel="stylesheet">
	<script src="body/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel({
				items: 5,
				itemsDesktop: [768, 4],
				itemsDesktopSmall: [414, 3],
				lazyLoad: true,
				autoPlay: true,
				navigation: true,

				navigationText: false,
				pagination: false,

			});

		});
	</script>
	<!--//required-js-files-->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- 
	<div class="group_icon">

		<div style="position: absolute; top: 19%; left: 4px">
			<a class="btn btn-warning" href="https://www.facebook.com/truong.tk.94/" target="_blank" style="border-radius: 20%; width: 45px; height: 45px; font-size: 25px; line-height: 32px;"><i class="ionicons ion-social-windows"></i></a>
		</div>
		<div style="position: absolute; top: 46%; left: 4px">
			<button class="btn btn-warning" id="mail_contact" style="border-radius: 20%; width: 45px; height: 45px; font-size: 25px; line-height: 32px; padding-left: 9px; padding-top: 5px;"><i class="fa fa-envelope"></i></button>
		</div>
		<div style="position: absolute; top: 73%; left: 4px">
			<a class="btn btn-warning" href="https://www.facebook.com/" target="_blank" style="border-radius: 20%; width: 45px; height: 45px; font-size: 25px; line-height: 32px;"><i class="fa fa-facebook"></i></a>
		</div>
		<style>
			.group_icon {
				position: fixed;
				top: 67%;
				border-radius: 8px;
				height: 190px;
				border: #f6f6f6 1px solid;
				background-color: #f6f6f6;
				margin-left: 10px;

			}



			i.fa.fa-facebook {
				color: white;
			}
		</style> -->

</body>

</html>