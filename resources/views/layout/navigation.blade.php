
    <div class="top-area">
        <div class="header-area">
            <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>

                <div class="container">            
                    <div class="attr-nav">
                        <ul>
                            <li class="search">
                                <a href="#"><span class="lnr lnr-magnifier"></span></a>
                            </li>
                            <li class="nav-setting">
                                <a href="#"><span class="lnr lnr-user"></span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                    <span class="lnr lnr-cart"></span>
                                    <span class="badge badge-bg-1">2</span>
                                </a>
                                <ul class="dropdown-menu cart-list s-cate">
                                    <li class="single-cart-list">
                                        <a href="#" class="photo"><img src="{{ asset('/uploads/images/collection/arrivals1.png') }}" class="cart-thumb" alt="image" /></a>
                                        <div class="cart-list-txt">
                                            <h6><a href="#">Sansung <br> a20</a></h6>
                                            <p>1 x - <span class="price">€280.00</span></p>
                                        </div>
                                        <div class="cart-close">
                                            <span class="lnr lnr-cross"></span>
                                        </div>
                                    </li>
                                    <li class="single-cart-list">
                                        <a href="#" class="photo"><img src="{{ asset('/uploads/images/collection/arrivals2.png') }}" class="cart-thumb" alt="image" /></a>
                                        <div class="cart-list-txt">
                                            <h6><a href="#">samsung <br> a70</a></h6>
                                            <p>1 x - <span class="price">€380.00</span></p>
                                        </div>
                                        <div class="cart-close">
                                            <span class="lnr lnr-cross"></span>
                                        </div>
                                    </li>
                                    <li class="single-cart-list">
                                        <a href="#" class="photo"><img src="{{ asset('/uploads/images/collection/arrivals3.png') }}" class="cart-thumb" alt="image" /></a>
                                        <div class="cart-list-txt">
                                            <h6><a href="#">samsung<br> s20</a></h6>
                                            <p>1 x - <span class="price">€1180.00</span></p>
                                        </div>
                                        <div class="cart-close">
                                            <span class="lnr lnr-cross"></span>
                                        </div>
                                    </li>
                                    <li class="total">
                                        <span>Total: €0.00</span>
                                        <button class="btn-cart pull-right" onclick="window.location.href='#'">view cart</button>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="{{ route('showHome') }}"><img src="{{ asset('/uploads/logo/brand_logo.png') }}"></a>

                    </div>
                    <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class=" scroll active"><a href="">home</a></li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">assortiment</a>
                                <ul class="dropdown-menu s-cate">
                                    <li>
                                        <li class="menu-dropdown-item"><a href="">tablet</a></li>
                                        <li class="menu-dropdown-item">
                                            <li class="dropdown">
                                                <a href="" class="dropdown-toggle" data-toggle="dropdown">phone</a>
                                                <ul class="dropdown-menu s-cate">
                                                    <li class="">
                                                        <li class="menu-dropdown-item"><a href="{{ route('showProducts') }}">apple</a></li>
                                                        <li class="menu-dropdown-item"><a href="">samsung</a></li>
                                                        <li class="menu-dropdown-item"><a href="">huawei</a></li>
                                                        <li class="menu-dropdown-item"><a href="">lg</a></li>
                                                        <li class="menu-dropdown-item"><a href="">honor</a></li>
                                                    </li>				                                
                                                </ul>
                                            </li>
                                        </li>
                                        <li class="menu-dropdown-item"><a href="">laptop</a></li>
                                        <li class="menu-dropdown-item"><a href="">smartwatches</a></li>
                                        <li class="menu-dropdown-item"><a href="">beamers</a></li>
                                        <li class="menu-dropdown-item"><a href="">earphones</a></li>
                                        <li class="menu-dropdown-item"><a href="">desktops</a></li>
                                    </li>				                                
                                </ul>
                            </li>
                            <li class="scroll"><a href="">new arrival</a></li>
                            <li class="scroll"><a href="">features</a></li>
                            <li class="scroll"><a href="">contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        <div class="clearfix"></div>
        </div>
    </div>

