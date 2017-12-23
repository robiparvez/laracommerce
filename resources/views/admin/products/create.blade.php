@extends('admin.layout.admin')

@section('content')
	<div class="row">
	    <div class="col-md-8 col-md-offset-2">

			@if (count($errors) > 0)
				<div class="alert alert danger">
					<strong>Damn!! </strong> There were input errors!
					<ul>
						@foreach ($errors as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

	        <div class="panel panel-default">
	            <div class="panel-heading">
	                <h3>
	                    Add Products
	                </h3>
	            </div>
	            <div class="panel-body">

	                {!! Form::open(['route' => 'products.store' , 'method' => 'POST', 'files' => 'true']) !!}

		                <div class="form-group">
		                    {!! Form::label('name', 'Name: ', []) !!}
							{!! Form::text('name', null, ['class' => 'form-control']) !!}
		                </div>

		                <div class="form-group">
		                    {!! Form::label('price', 'Price: ', []) !!}
							{!! Form::text('price', null, ['class' => 'form-control']) !!}

		                </div>

		                <div class="form-group">
		                    {!! Form::label('description', 'Description: ', []) !!}
							{!! Form::text('description', null, ['class' => 'form-control']) !!}
		                </div>
		                <div class="form-group">
		                    {!! Form::label('size', 'Size: ', []) !!}
							{{ Form::select('size', [ 'small' => 'Small', 'medium' => 'Medium', 'large' => 'Large'], null, ['class' => 'form-control']) }}
		                </div>
		                <div class="form-group">
		                    {!! Form::label('category_id', 'Categories: ', []) !!}
							{!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Select Category']) !!}
		                </div>
		                <div class="form-group">
		                    {!! Form::label('image', 'Upload Image: ', []) !!}
							{!! Form::file('image', ['class' => 'btn-spacing']) !!}
		                </div>

		                {!! Form::submit('Create Product', ['class' => 'btn btn-primary btn-block']) !!}

					{!! Form::close() !!}
	            </div>
	        </div>
	    </div>
	</div>
@endsection