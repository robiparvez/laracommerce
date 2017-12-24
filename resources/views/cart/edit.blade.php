@extends('template.default')

@section('title', 'Cart')

@section('content')

<div class="container">
	<div class="row">


		<div class="col-md-8 col-md-offset-2">

			@if( Session::has('cart_add'))
				<div class="alert alert-success">
					<strong>{{  Session::get('cart_add') }}</strong>
				</div>
			@elseif(Session::has('cart_update'))
				<div class="alert alert-info">
					<strong>{{ Session::get('cart_update') }}</strong>
				</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">All Cart Items</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Size</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($cartItems as $cart)

								<tr class="text-justify">
									<td>{{ $cart->name }}</td>
									<td>{{ $cart->price }}</td>
									<td>

										{!! Form::open(['route' => ['cart.update', $cart->rowId], 'method' => 'PUT']) !!}
											{!! Form::text('qty', $cart->qty, []) !!}
											{!! Form::submit('Change', ['class' => 'btn btn-xs btn-primary']) !!}
										{!! Form::close() !!}

									</td>
									<td>{{ $cart->options->has('size') ? $cart->options->size : '' }}</td>

									<td>

										{!! Form::open( ['route' => ['cart.destroy',$cart->rowId], 'method' => 'DELETE']) !!}
											{!! Form::submit('Delete', ['class' => 'btn btn-xs btn-danger']) !!}
										{!! Form::close() !!}

									</td>
								</tr>
							@empty
								<h3>No items were added to Cart!</h3>
							@endforelse

						</tbody>
					</table>
				</div>
				<!-- Table -->
			</div>
		</div>
	</div>
</div>

@endsection


{{-- {!! Form::model($editTour, ['route' => ['cart.update', $editTour->id], 'method' => 'PUT', 'files' => true]) !!}

		{!! Form::label('name', 'Name: ', []) !!}
		{!! Form::text('name', null, ['class' =>'form-control']) !!}

		{!! Form::label('price', 'price: ', []) !!}
		{!! Form::text('price', null, ['class' =>'form-control']) !!}

		{!! Form::label('qty', 'qty: ', []) !!}
		{!! Form::text('qty', null, ['class' => 'form-control']) !!}

		{!! Form::label('size', 'size: ', []) !!}
		{!! Form::text('size', null, ['class' => 'form-control']) !!}

		{!! Form::submit('Save Changes', ['class' => 'btn btn-success btn-block form-spacing-top']) !!}
	{!! Form::close() !!}
--}}