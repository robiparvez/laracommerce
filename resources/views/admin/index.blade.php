@extends('admin.layout.admin')


@section('content')

	{{-- {{ dd('in admin index') }} --}}
	@if (Session::has('admin_not'))
	    <div class="alert alert-danger">
	        <strong>{{ Session::get('admin_not') }}</strong>
	    </div>
	@endif

    <h3>Welcome to the Admin Dashboard!</h3>

@endsection