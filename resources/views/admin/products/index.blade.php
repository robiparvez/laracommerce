@extends('admin.layout.admin')

@section('content')

	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">

	            <table class="table table-striped table-hover">
	            	<thead>
	            		<tr>
	            			<th>Name</th>
	            			<th>Description</th>
	            			<th>Size</th>
	            			<th>Image</th>
	            			<th>Action</th>
	            		</tr>
	            	</thead>
	            	<tbody>

	            		@forelse ($products as $p)
	            			<tr>
		            			<td>{{ $p->name }}</td>
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
@endsection
