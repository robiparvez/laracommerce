@extends('admin.layout.admin')

@section('content')

	<div class="container">
	    <div class="row">
	        <div class="col-md-6 col-md-offset-2">

				@if (Session::has('created'))
					<div class="alert alert-info">
							{{ Session::get('created') }}
					</div>
				@endif

				<div class="panel panel-info">
					<div class="panel-heading text-left"><h4>Products List</h4></div>
					<div class="panel-body">
			            <table class="table table-striped table-hover">
			            	<thead>
			            		<tr>
			            			<th>Name</th>

			            			<th class="text-info">Category</th>

			            			<th>Description</th>

			            			<th>Size</th>

			            			<th>Image</th>

			            		</tr>
			            	</thead>
			            	<tbody>

			            		@forelse ($products as $p)

			            			<tr class="text-justify">
				            			<td>{{ $p->name }}</td>

										{{-- Many(products) to One(category) Relationhsip (possible in index without category_id) --}}
				            			<td>{{ count($p->category->name) > 0  ? $p->category->name : "Not Added"  }}</td>

				            			<td>{{ $p->description }}</td>

				            			<td>{{ $p->size }}</td>

				            			<td><img height="100" src="{{ asset('images/'. $p->image) }}" width="100"/></td>
				            		</tr>

			            		@empty
			            			<h3>No Products Found!</h3>
			            		@endforelse
			            	</tbody>
			            </table>
					</div>
				</div>
	        </div>
	    </div>
	</div>
@endsection
