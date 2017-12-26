@extends('admin.layout.admin')

@section('title', 'Category Home')

@section('content')

	@if (Session::has('create_cat'))
		<div class="alert alert-success">
				{{ Session::get('create_cat') }}
		</div>
	@endif

	<div class="panel panel-default" style="margin-top: 30px;">
		<div class="panel-heading text-left"><h3>Categories</h3></div>
		<div class="panel-body">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Product Name</th>
					</tr>
				</thead>
				<tbody>

					@if (!empty($categories))
						@forelse($categories as $category)

							<tr style="text-align: left;">


								<td><a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a></td>

								<td>{{ $category->products }}</a></td>{{-- No relationship here !! --}}
							</tr>
						@empty
							No Category Found.
						@endforelse
					@endif

				</tbody>
			</table>
		</div>
	</div>
@endsection
