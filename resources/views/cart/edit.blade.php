@extends('admin.layout.admin')

@section('title', 'Cart')

@section('content')

<h3>Cart Items</h3>

<ol>

</ol>

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
				<td>{{ $item->qty }}</td>
				<td>{{ $row->sizeArray->has('size') ? $row->sizeArray->size : '' }}</td>
			</tr>
		@empty
			<h3>No items were added to Cart!</h3>
		@endforelse

	</tbody>
</table>

@endsection