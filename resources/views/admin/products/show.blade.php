@extends('admin.layout.admin')

@section('content')

	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">

	        	{{-- <p>{{ $products->category()->name }}</p> --}}

	            <table class="table table-striped table-hover">
	            	<thead>
	            		<tr>
	            			<th>Name</th>
	            			<th>Description</th>
	            			<th>Size</th>
	            			{{-- <th>Categories</th> --}}
	            			<th>Image</th>
	            			<th>Action</th>
	            		</tr>
	            	</thead>
	            	<tbody>
	            		@foreach ($products as $p)
	            		<tr>
	            			<td>{{ $p->name }}</td>
	            			<td>{{ $p->description }}</td>
	            			<td>{{ $p->size }}</td>

	            			{{-- <td>{{ $p->category->name }}</td> --}}

	            			<td><img height="100" src="{{ asset('images/'. $p->image) }}" width="100"/></td>
	            			<td>

	                         {{--    {!! Form::open(['route' => ['tours.destroy', $p->id], 'method' => 'DELETE']) !!}
	                            place hte 'form open' at the beginning of <td> for placing delete button on this cell
	                                {{ Html::linkRoute('tours.show', 'View', array($p->id), array('class' => 'btn btn-xs btn-info')) }}
	                                |
	                                {{ Html::linkRoute('tours.edit', 'Edit', array($p->id), array('class' => 'btn btn-xs btn-primary')) }}
	                                |
	                                {!! Form::submit('Delete', ['class' => 'btn btn-xs btn-danger']) !!}
	                            {!! Form::close() !!} --}}
	                        </td>
	            		</tr>
	            		@endforeach
	            	</tbody>
	            </table>
	        </div>
	    </div>
	</div>
@endsection
