@extends('template.default')

@section('title', 'Cart')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">

			<div class="panel panel-primary" style="margin-top: 20px;">
				{{-- flash --}}
				@if( Session::has('cart_add'))
					<div class="alert alert-info">
						<strong>{{  Session::get('cart_add') }}</strong>
					</div>
				@elseif(Session::has('cart_update'))
					<div class="alert alert-success">
						<strong>{{ Session::get('cart_update') }}</strong>
					</div>
				@elseif(Session::has('cart_delete'))
					<div class="alert alert-danger">
						<strong>{{ Session::get('cart_delete') }}</strong>
					</div>
				@endif

				<div class="panel-heading text-center">All Cart Items</div>
				<div class="panel-body">
					<table class="table table-hover">
					<thead>
						<tr class="text-muted">
							<th>Name</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Size</th>
							<th colspan="2" class="text-center">Action</th>
						</tr>
					</thead>
					<tbody class="input-sm">
						@forelse ($cartItems as $cart)

							<tr class="text-justify">

								<td>{{ $cart->name }}</td>

								<td>{{ $cart->price }}</td>

								{!! Form::open(['route' => ['cart.update', $cart->rowId], 'method' => 'PUT']) !!}
								<td>
									{!! Form::text('qty', $cart->qty, ['class' => 'form-control']) !!}
								</td>
								<td>
									{!! Form::select('size',['1' => 'small','2' => 'medium','3' => 'large'], $cart->options->has('size') ? $cart->options->size : '' , [] ) !!}
								</td>
								<td>
									{!! Form::submit('Change', ['class' => 'btn btn-sm btn-primary']) !!}
								{!! Form::close() !!}
								</td>
								<td colspan="2">
									{{-- delete --}}
									{!! Form::open( ['route' => ['cart.destroy',$cart->rowId], 'method' => 'DELETE']) !!}

										{!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}

									{!! Form::close() !!}
								</td>
							</tr>
						@empty
							<h3 class="text-center alert-danger">No items were added to Cart!</h3>
						@endforelse
					</tbody>



					<tfoot>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td>Sub-Total</td>
							<td>{{ Cart::subtotal() }}</td>
						</tr>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td>Tax</td>
							<td>{{ Cart::tax() }}</td>
						</tr>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td>Total</td>
							<td>{{ Cart::total() }}</td>
						</tr>
						<tr>
							<td><a href="{{ route('home') }}" class="btn btn-primary btn-block">Go to Home</a></td>
							<td colspan="1">&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td colspan="2"><a href="{{ route('shipping') }}" class="btn btn-success btn-block">Checkout</a></td>

						</tr>
					</tfoot>

                        {{--<div class="col-md-6 col-md-offset-2">--}}
							{{--testing--}}
							{{--{!!  !!}--}}
						{{--</div>--}}

					</table>
				</div>
				<!-- Table -->
			</div>
		</div>
	</div>
</div>

@endsection


{{-- <tr>
	<td colspan="2">&nbsp;</td>
	<td>Sub-Total</td>
	<td>{{ Cart::subtotal() }}</td>
</tr>
<tr>
	<td>Tax</td>
</tr> --}}