@extends('frontend.layout.app')

@section('column')

 
 
 
<div class="col-sm-9 padding-right">      
	<div class="features_items">
    
    @if (request()->has('search')&& request()->get('search') !=='')


       <h2> {{$result}}</h2>
       <h4>{{$yoursearch}}</h4>

     @endif
@foreach($allproducts as  $product)

                     <div class="col-sm-4">
                           <div class="product-image-wrapper">
                               <div class="single-products">
                                       <div class="productinfo text-center">
                                           <img src="uploads/{{$product->image}}" width='200px', height='200px' alt="" />
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
{{$allproducts->links()}}
</div>
 


 
















  </div>
@endsection