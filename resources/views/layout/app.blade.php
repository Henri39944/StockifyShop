<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stockify Shop</title>

		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

        <link rel="shortcut icon" type="image/icon" href="{{ asset('/uploads/logo/favicon.png') }}"/>

        <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/linearicons.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/bootsnav.css') }}" >	
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">

    </head>
    <body>
        @yield('content')

        <section id="clients"  class="clients">
			<div class="container">
				<div class="owl-carousel owl-theme" id="client">
						<div class="item">
							<a href="#">
								<img src="{{ asset('/uploads/images/clients/c1.png') }}" alt="brand-image" />
							</a>
						</div>
						<div class="item">
							<a href="#">
								<img src="{{ asset('/uploads/images/clients/c2.png') }}" alt="brand-image" />
							</a>
						</div>
						<div class="item">
							<a href="#">
								<img src="{{ asset('/uploads/images/clients/c3.png') }}" alt="brand-image" />
							</a>
						</div>
						<div class="item">
							<a href="#">
								<img src="{{ asset('/uploads/images/clients/c4.png') }}" alt="brand-image" />
							</a>
						</div>
						<div class="item">
							<a href="#">
								<img src="{{ asset('/uploads/images/clients/c5.png') }}" alt="brand-image" />
							</a>
						</div>
					</div>

			</div>
		</section>

		<section id="newsletter"  class="newsletter">
			<div class="container">
				<div class="hm-footer-details">
					<div class="row">
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>information</h4>
								</div>
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#">about us</a></li><!--/li-->
										<li><a href="#">contact us</a></li><!--/li-->
										<li><a href="#">news</a></li><!--/li-->
										<li><a href="#">store</a></li><!--/li-->
									</ul>
								</div>
							</div>
						</div>
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>collections</h4>
								</div>
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#">samsung</a></li><!--/li-->
										<li><a href="#">apple</a></li><!--/li-->
										<li><a href="#">huawei</a></li><!--/li-->
										<li><a href="#">lg</a></li><!--/li-->
										<li><a href="#">honor</a></li><!--/li-->
									</ul>
								</div>
							</div>
						</div>
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>my accounts</h4>
								</div>
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#">my account</a></li><!--/li-->
										<li><a href="#">wishlist</a></li><!--/li-->
										<li><a href="#">Community</a></li><!--/li-->
										<li><a href="#">order history</a></li><!--/li-->
										<li><a href="#">my cart</a></li><!--/li-->
									</ul>
								</div>
							</div>
						</div>
						<div class=" col-md-3 col-sm-6  col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>newsletter</h4>
								</div>
								<div class="hm-foot-para">
									<p>
										Subscribe  to get latest news,update and information.
									</p>
								</div>
								<div class="hm-foot-email">
									<div class="foot-email-box">
										<input type="text" class="form-control" placeholder="Enter Email Here....">
									</div>
									<div class="foot-email-subscribe">
										<span><i class="fa fa-location-arrow"></i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</section>

		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<div class="footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>	
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div>
					<p>
						&copy;copyright 2020. Part of Stockify</a>
					</p>
				</div>
			</div>

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div>
        </footer>        
    </body>

    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/bootsnav.js') }}"></script>
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>
</html>