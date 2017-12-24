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

			<table class="table table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>ID</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Size</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($cartItems as $row)
						<tr class="text-justify">
							<td>{{ $row->name }}</td>
							<td>{{ $row->id }}</td>
							<td>{{ $row->price }}</td>
							<td>

							{!! Form::open(['route' => ['cart.update', $row->id], 'method' => 'PUT']) !!}

								{!! Form::text('qty', $row->qty, ['class' => 'form-control']) !!}
								{!! Form::submit('Save', ['class' => 'btn btn-xs btn-primary']) !!}

							{!! Form::close() !!}

							</td>
							<td>{{ $row->options->has('size') ? $row->options->size : '' }}</td>
						</tr>
					@empty
						<h3>No items were added to Cart!</h3>
					@endforelse

				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection