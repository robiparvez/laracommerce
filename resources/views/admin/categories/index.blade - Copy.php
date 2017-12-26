@extends('admin.layout.admin')

@section('title', 'Category Home')

@section('content')

	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading">Categories</div>
			<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
			@if (!empty($categories))
				@forelse($categories as $category)
					<tr style="text-align: left;">
						<td><a href="{{ route('categories.show', $category->id) }}"></a>{{ $category->name }}</a></td>
					</tr>
				@empty
					No Category Found.
				@endforelse
			@endif
		</tbody>
	</table>
	<!-- Table -->
	</div>

@endsection