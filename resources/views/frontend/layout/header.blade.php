<header id="header"  >
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="{{route('home')}}"><img src="{{asset('frontend/images/home/logo.png')}}" alt="" /></a>
						</div>
						<div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="{{route('showcart')}}"><i class="fa fa-shopping-cart"></i>
								{{__('main.cart')}} {{session()->has('cart')?session()->get('cart')->totalqty:''}}
								 </a></li>
								
                                      @if (Route::has('login'))
                                              @auth
                                                    
												<li> <a href="{{ url('/home') }}">{{__('main.home')}}</a></li>
												<li class="nav-item dropdown">
														<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
															{{ Auth::user()->name }} <span class="caret"></span>
														</a>

													<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
													       
                                                       <div>
														<a class="dropdown-item" href="{{ route('logout') }}"
																		onclick="event.preventDefault();
																		document.getElementById('logout-form').submit();">
																{{ __('Logout') }}
														</a>
														
			
														<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
															@csrf
														</form>
														</div>
														<div>
														<a class="dropdown-item" href="{{ route('user.orders') }}">
													          orders
													    </a>
														</div>
													</div>												 														    												 													 																										 
												</li>
									  		
                                                @else
                                                
                                                <li> <a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
                                                   
                                                    @if (Route::has('register'))
                                                    
                                                    <li> <a href="{{ route('register') }}"> <i class="fa fa-lock"></i> Register</a></li>
                                                    @endif
                                                @endauth
                                       @endif
                                 
                                          
                                
                                
                              
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">{{__('main.home')}}</a></li>
								<li class="dropdown"><a href="#">{{__('main.shop')}}<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{route('all-products')}}">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
                                        <li> <a href="cart.html">login</a>  </li>
                                           
                                        

                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="{{route('contact-show')}}">{{__('main.contact')}}</a></li>
								<li class="dropdown"><a href="#">{{__('main.language')}}<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{route('lang',['lang'=>'ar'])}}"> {{__('main.arabic')}}</a></li>
										<li><a href="{{route('lang',['lang'=>'en'])}} ">{{__('main.english')}}</a></li>
                                    </ul>
                                </li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
					   <form action='{{route("all-products")}}'>   
						   <div class="search_box pull-right">
							   <input type="text" name='search' placeholder="Search"/>
						   </div>
					   </form>
					</div>
				</div>
			</div> 
        
	</header>