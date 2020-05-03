 @extends('frontend.layout.app')

 @section('column')
 
@php
$products=null;
    if(isset($mens_shirts)){$products=$mens_shirts;}
    if(isset($mens_trousers)){$products=$mens_trousers;}
    if(isset($mens_shoes)){$products=$mens_shoes;}

    if(isset($womens_shirts)){$products=$womens_shirts;}
    if(isset($womens_trousers)){$products=$womens_trousers;}
    if(isset($womens_shoes)){$products=$womens_shoes;}

    if(isset($kids_shirts)){$products=$kids_shirts;}
    if(isset($kids_trousers)){$products=$kids_trousers;}
    if(isset($kids_shoes)){$products=$kids_shoes;}
@endphp
  
<div class='row'id='products'>

 @foreach($products as  $product)
 
                      <div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="uploads/{{$product->image}}" width='200px'height='300px' alt="" />
											<h2>${{$product->price}}</h2>
											<p>{{$product->desc}}</p>
											<a href="{{route('addtocart',$product->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>${{$product->price}}</h2>
												<p>{{$product->desc}} </p>
												<a href="{{route('addtocart',$product->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>


         @endforeach
 



 













   </div>
 @endsection