@extends('frontend.layout.app')

@section('column')
<div class=col-sm-9>
   <section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{route('home')}}">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
            @if($carts)
            @php $i=1;    @endphp
                      @foreach($carts as $cart)
				<table class="table table-condensed" >
					<thead>
						<tr class="cart_menu">
                        
                            <td class="name">order {{$i}} / items </td>
                            
							<td class="image">id</td>
                            <td class="image">date/id</td>
							<td class="description">description</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
						 
						</tr>
					</thead>
					<tbody>
                    @foreach($cart->items as $item)
                     
						<tr>
                            

							<td class="cart_product">
								<a href=""><img src="../uploads/{{$item['image']}}" width='100px'height='100px' alt=""></a>
							</td>

							<td class="cart_description">
								<h4><a href=""> </a></h4>
								<p>Web ID:{{$item['id']}}  </p>
							</td>

                            <td class="cart_description">
								<h4><a href=""> </a></h4>
								<p> {{$item['date']}}  </p>
							</td>

                            <td class="cart_description">
								<h4><a href=""> </a></h4>
								<p>{{$item['desc']}}   </p>
							</td>

							<td class="cart_price">
								<p>${{$item['price']}}</p>
							</td>

							<td class="cart_quantity">
								<div class="cart_quantity_button">
									 
									<input class="cart_quantity_input" type="text" name="quantity" value="{{$item['qty']}}" autocomplete="off" size="2">
									 
								</div>
							</td>

							<td class="cart_total">
								<p class="cart_total_price">${{$item['qty']*$item['price']}}</p>
							</td>
							 
						</tr>
                        
                     @endforeach 
                     <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td class="cart_total" >
                          <p class="cart_total_price">totalprice = $ {{$cart->totalprice}} </p>
                          </td>
                        
                        
                        </tr>					 												 
					</tbody>
				</table>
                   @endforeach
               @endif
			</div>
		</div>
	</section> 
 
 
</div>
 
 @endsection