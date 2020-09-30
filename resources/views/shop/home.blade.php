@extends('layout.app')

@section('content')
	@include('layout.navigation')
	<header id="home" class="welcome-hero">
		<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
				<ol class="carousel-indicators">
				<li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
				<li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
				<li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
			</ol>

			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="single-slide-item slide1">
						<div class="container">
							<div class="welcome-hero-content">
								<div class="row">
									<div class="col-sm-7">
										<div class="single-welcome-hero">
											<div class="welcome-hero-txt">
												<h4>great design phone</h4>
												<h2>try our new iphone</h2>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuiana smod tempor  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. 
												</p>
												<div class="packages-price">
													<p>
														€ 699.00
														<del>€ 799.00</del>
													</p>
												</div>
												<button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
													<span class="lnr lnr-plus-circle"></span>
													add <span>to</span> cart
												</button>
												<button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
													more info
												</button>
											</div>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="single-welcome-hero">
											<div class="welcome-hero-img">
												<img src="{{ asset('/uploads/images/slider/slider1.png') }}" alt="slider image">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="single-slide-item slide2">
						<div class="container">
							<div class="welcome-hero-content">
								<div class="row">
									<div class="col-sm-7">
										<div class="single-welcome-hero">
											<div class="welcome-hero-txt">
												<h4>great design macbook air</h4>
												<h2>try our new macbook air</h2>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuiana smod tempor  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. 
												</p>
												<div class="packages-price">
													<p>
														€ 1199.00
														<del>€ 1299.00</del>
													</p>
												</div>
												<button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
													<span class="lnr lnr-plus-circle"></span>
													add <span>to</span> cart
												</button>
												<button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
													more info
												</button>
											</div>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="single-welcome-hero">
											<div class="welcome-hero-img">
												<img src="{{ asset('/uploads/images/slider/slider2.png') }}" alt="slider image">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="single-slide-item slide3">
						<div class="container">
							<div class="welcome-hero-content">
								<div class="row">
									<div class="col-sm-7">
										<div class="single-welcome-hero">
											<div class="welcome-hero-txt">
												<h4>great design macbook pro</h4>
												<h2>try our new macbook pro</h2>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuiana smod tempor  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. 
												</p>
												<div class="packages-price">
													<p>
														€ 1299.00
														<del>€ 1399.00</del>
													</p>
												</div>
												<button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
													<span class="lnr lnr-plus-circle"></span>
													add <span>to</span> cart
												</button>
												<button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
													more info
												</button>
											</div>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="single-welcome-hero">
											<div class="welcome-hero-img">
												<img src="{{ asset('/uploads/images/slider/slider3.png') }}" alt="slider image">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section id="new-arrivals" class="new-arrivals">
		<div class="container">
			<div class="section-header">
				<h2>new arrivals</h2>
			</div>
			<div class="new-arrivals-content">
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
							<div class="single-new-arrival-bg">
								<img src="{{ asset('/uploads/images/collection/arrivals1.png') }}" alt="new-arrivals images">
								<div class="single-new-arrival-bg-overlay"></div>
								<div class="sale bg-1">
									<p>sale</p>
								</div>
								<div class="new-arrival-cart">
									<p>
										<span class="lnr lnr-cart"></span>
										<a href="#">add <span>to </span> cart</a>
									</p>
									<p class="arrival-review pull-right">
										<span class="lnr lnr-heart"></span>
										<span class="lnr lnr-frame-expand"></span>
									</p>
								</div>
							</div>
							<h4><a href="#">samsung a20</a></h4>
							<p class="arrival-product-price">€165.00</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
							<div class="single-new-arrival-bg">
								<img src="{{ asset('/uploads/images/collection/arrivals2.png') }}" alt="new-arrivals images">
								<div class="single-new-arrival-bg-overlay"></div>
								<div class="sale bg-2">
									<p>sale</p>
								</div>
								<div class="new-arrival-cart">
									<p>
										<span class="lnr lnr-cart"></span>
										<a href="#">add <span>to </span> cart</a>
									</p>
									<p class="arrival-review pull-right">
										<span class="lnr lnr-heart"></span>
										<span class="lnr lnr-frame-expand"></span>
									</p>
								</div>
							</div>
							<h4><a href="#">samsung a70</a></h4>
							<p class="arrival-product-price">€280.00</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
							<div class="single-new-arrival-bg">
								<img src="{{ asset('/uploads/images/collection/arrivals3.png') }}" alt="new-arrivals images">
								<div class="single-new-arrival-bg-overlay"></div>
								<div class="new-arrival-cart">
									<p>
										<span class="lnr lnr-cart"></span>
										<a href="#">add <span>to </span> cart</a>
									</p>
									<p class="arrival-review pull-right">
										<span class="lnr lnr-heart"></span>
										<span class="lnr lnr-frame-expand"></span>
									</p>
								</div>
							</div>
							<h4><a href="#">samsung s20 ultra</a></h4>
							<p class="arrival-product-price">€1040.00</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
							<div class="single-new-arrival-bg">
								<img src="{{ asset('/uploads/images/collection/arrivals4.png') }}" alt="new-arrivals images">
								<div class="single-new-arrival-bg-overlay"></div>
								<div class="sale bg-1">
									<p>sale</p>
								</div>
								<div class="new-arrival-cart">
									<p>
										<span class="lnr lnr-cart"></span>
										<a href="#">add <span>to </span> cart</a>
									</p>
									<p class="arrival-review pull-right">
										<span class="lnr lnr-heart"></span>
										<span class="lnr lnr-frame-expand"></span>
									</p>
								</div>
							</div>
							<h4><a href="#">samsung note 20</a></h4>
							<p class="arrival-product-price">€1130.00</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
							<div class="single-new-arrival-bg">
								<img src="{{ asset('/uploads/images/collection/arrivals5.png') }}" alt="new-arrivals images">
								<div class="single-new-arrival-bg-overlay"></div>
								<div class="new-arrival-cart">
									<p>
										<span class="lnr lnr-cart"></span>
										<a href="#">add <span>to </span> cart</a>
									</p>
									<p class="arrival-review pull-right">
										<span class="lnr lnr-heart"></span>
										<span class="lnr lnr-frame-expand"></span>
									</p>
								</div>
							</div>
							<h4><a href="#">iphone x</a></h4>
							<p class="arrival-product-price">€520.00</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
							<div class="single-new-arrival-bg">
								<img src="{{ asset('/uploads/images/collection/arrivals6.png') }}" alt="new-arrivals images">
								<div class="single-new-arrival-bg-overlay"></div>
								<div class="sale bg-1">
									<p>sale</p>
								</div>
								<div class="new-arrival-cart">
									<p>
										<span class="lnr lnr-cart"></span>
										<a href="#">add <span>to </span> cart</a>
									</p>
									<p class="arrival-review pull-right">
										<span class="lnr lnr-heart"></span>
										<span class="lnr lnr-frame-expand"></span>
									</p>
								</div>
							</div>
							<h4><a href="#">iphone xs</a></h4>
							<p class="arrival-product-price">€640.00</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
							<div class="single-new-arrival-bg">
								<img src="{{ asset('/uploads/images/collection/arrivals7.png') }}" alt="new-arrivals images">
								<div class="single-new-arrival-bg-overlay"></div>
								<div class="sale bg-2">
									<p>sale</p>
								</div>
								<div class="new-arrival-cart">
									<p>
										<span class="lnr lnr-cart"></span>
										<a href="#">add <span>to </span> cart</a>
									</p>
									<p class="arrival-review pull-right">
										<span class="lnr lnr-heart"></span>
										<span class="lnr lnr-frame-expand"></span>
									</p>
								</div>
							</div>
							<h4><a href="#">iphone 11 pro</a></h4>
							<p class="arrival-product-price">€790.00</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="single-new-arrival">
							<div class="single-new-arrival-bg">
								<img src="{{ asset('/uploads/images/collection/arrivals8.png') }}" alt="new-arrivals images">
								<div class="single-new-arrival-bg-overlay"></div>
								<div class="new-arrival-cart">
									<p>
										<span class="lnr lnr-cart"></span>
										<a href="#">add <span>to </span> cart</a>
									</p>
									<p class="arrival-review pull-right">
										<span class="lnr lnr-heart"></span>
										<span class="lnr lnr-frame-expand"></span>
									</p>
								</div>
							</div>
							<h4><a href="#">iphone 12 pro max</a></h4>
							<p class="arrival-product-price">€1140.00</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section id="sofa-collection">
		<div class="owl-carousel owl-theme" id="collection-carousel">
			<div class="sofa-collection collectionbg1" style="background:url({{ asset('/uploads/images/collection/banner1.jpg') }})">
				<div class="container">
					<div class="sofa-collection-txt">
						<h2>unlimited apple products</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
						</p>
						<div class="sofa-collection-price">
							<h4>strting from <span>€ 499</span></h4>
						</div>
						<button class="btn-cart welcome-add-cart sofa-collection-btn" onclick="window.location.href='#'">
							view more
						</button>
					</div>
				</div>	
			</div>
			<div class="sofa-collection collectionbg2" style="background-image:url({{ asset('/uploads/images/collection/banner2.jpg') }})">
				<div class="container">
					<div class="sofa-collection-txt">
						<h2>samsung 5g collection</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
						</p>
						<div class="sofa-collection-price">
							<h4>strting from <span>€ 699</span></h4>
						</div>
						<button class="btn-cart welcome-add-cart sofa-collection-btn" onclick="window.location.href='#'">
							view more
						</button>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section id="feature" class="feature">
		<div class="container">
			<div class="section-header">
				<h2>featured products</h2>
			</div>
			<div class="feature-content">
				<div class="row">
					<div class="col-sm-3">
						<div class="single-feature">
							<img src="{{ asset('/uploads/images/features/f1.png') }}" alt="feature image">
							<div class="single-feature-txt text-center">
								<p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
									<span class="feature-review">(45 review)</span>
								</p>
								<h3><a href="#">ipad pro</a></h3>
								<h5>€760.00</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-feature">
							<img src="{{ asset('/uploads/images/features/f2.png') }}" alt="feature image">
							<div class="single-feature-txt text-center">
								<p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
									<span class="feature-review">(45 review)</span>
								</p>
								<h3><a href="#">ipad air </a></h3>
								<h5>€600.00</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-feature">
							<img src="{{ asset('/uploads/images/features/f3.png') }}" alt="feature image">
							<div class="single-feature-txt text-center">
								<p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
									<span class="feature-review">(45 review)</span>
								</p>
								<h3><a href="#">apple watch 6 serie</a></h3>
								<h5>€499.00</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-feature">
							<img src="{{ asset('/uploads/images/features/f4.png') }}" alt="feature image">
							<div class="single-feature-txt text-center">
								<p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
									<span class="feature-review">(45 review)</span>
								</p>
								<h3><a href="#">imac 2021</a></h3>
								<h5>€4299.00</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection