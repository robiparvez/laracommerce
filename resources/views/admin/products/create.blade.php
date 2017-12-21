@extends('admin.layout.admin')


@section('content')

	{{-- <h3>Add Products</h3> --}}

	<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<div class="panel panel-default">
					<!-- Default panel contents -->
					<div class="panel-heading"><h3>Add Products</h3></div>
					<div class="panel-body">
						{!! Form::open(['route' => 'products.store' , 'method' => 'POST', 'files' => 'true']) !!}

						<div class="form-group">
							{!! Form::label('name', 'Name: ', []) !!}
							{!! Form::text('name', null, ['class' => 'form-control']) !!}
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

@endsection