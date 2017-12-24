@extends('template.default')

@section('title', 'Cart')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">

			<table class="table table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Size</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($cartItems as $row)
						<tr class="text-justify">
							<td>{{ $row->name }}</td>
							<td>{{ $row->price }}</td>
							<td>{{ $row->qty }}</td>
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