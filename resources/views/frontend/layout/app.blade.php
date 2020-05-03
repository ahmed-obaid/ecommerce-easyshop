<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
	@yield('style')
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
<!--header-->
	@include('frontend.layout.header')
	<!--/header-->

	<!--slider-->
	@include('frontend.layout.slider')
	<!--/slider-->
	<section>
		<div class="container">
			<div class="row">
				 <div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<!--category-productsr-->
						
						<div class="panel-group category-products" id="accordian">
						
								@foreach($categories as $category)
								
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordian" href="#{{$category->name}}">
													<span class="badge pull-right"><i class="fa fa-plus"></i></span>
													{{$category->name}}
												 
												</a>
											</h4>
										</div>
										<div id="{{$category->name}}" class="panel-collapse collapse">
											<div class="panel-body">
												<ul>
											
												@foreach($category->types as $type )
												        
													<li><a href="{{route($category->name.'-'.$type->name)}} ">{{$type->name}}</a></li>											 							 
												@endforeach
												</ul>
											</div>
										</div>
									</div>
								
								@endforeach
						</div>

                						
						<!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->					
					</div>	        	        
			</div>
			<!--============here your colmun===================-->
			@yield('column')
		</div>
	</section>
	<!--Footer-->
	@include('frontend.layout.footer')
	<!--/Footer-->

  
    <script src="{{('frontend/js/jquery.js')}}"></script>
	<script src="{{('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{('frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{('frontend/js/price-range.js')}}"></script>
    <script src="{{('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{('frontend/js/main.js')}}"></script>
	@yield('script')
</body>
</html>