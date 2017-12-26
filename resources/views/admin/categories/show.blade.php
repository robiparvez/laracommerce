@extends('admin.layout.admin')

@section('title', 'Category Home')

@section('content')

<div class="panel panel-default" style="margin-top: 30px;">
	<div class="panel-heading text-left"><h3>Products</h3></div>
	<div class="panel-body">
		<table class="table table-striped table-hover" id="table-product">
			<thead>
				<tr>
					<th>Name</th>
        			<th>Price</th>
        			<th>Description</th>
        			<th>Size</th>
        			<th>Image</th>
				</tr>
			</thead>
			<tbody>
				{{-- Product Display on Category show page here, need relationnship --}}

				@if(!empty($products_rel))

					@forelse ($products_rel as $product)

						<tr class="text-justify">
							<td>{{ $product->name }}</td>
							<td>{{ $product->price }}</td>
							<td>{{ $product->description }}</td>
							<td>{{ $product->size }}</td>
							<td><img src="{{ asset('images/' . $product->image) }}" height="200" width="200"></td>
						</tr>

					@empty
						<h3>No Product is Available.</h3>
						<script type="text/javascript">
							$(document).ready(function() {
								$('#table-product').hide();
							});
						</script>
					@endforelse
				@endif
			</tbody>
		</table>
	</div>
</div>

@endsection