@extends('layout.app')

@section('content')
    @include('layout.navigation')
    <section id="new-arrivals" class="new-arrivals">
		<div class="container">
			<div class="section-header">
				<h2>Products</h2>
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
							<h4><a href="{{ route('showDetailProducts') }}">samsung a20</a></h4>
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
@endsection