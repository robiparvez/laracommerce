@extends('admin.layout.admin')

@section('title', 'Category Home')

@section('content')

	{{-- for jquery --}}
	{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}

	{{-- Modal --}}
	{{-- <a class="btn btn-lg btn-primary" data-toggle="modal" href='#modal-id'>Add Category</a>
	<div class="modal fade" id="modal-id">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">New Category</h4>
				</div>

				{!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}

					<div class="modal-body">
						<p class="statusMsg"></p>
						<div class="form-group">

							{!! Form::label('name', 'Name', []) !!}
							{!! Form::text('name', null, ['class' => 'form-control' , 'id' => 'inputName' , 'placeholder' => 'Enter category name']) !!}

						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary submitBtn" onclick="submitForm()">Save changes</button>
					</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div> --}}
	{{-- Modal ends --}}

	@if (Session::has('create_cat'))
		<div class="alert alert-success">
				{{ Session::get('create_cat') }}
		</div>
	@endif

	{{-- Display Table --}}
	<div class="panel panel-default" style="margin-top: 30px;">
		<div class="panel-heading text-left"><h3>Categories</h3></div>
		<div class="panel-body">
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
								<td><a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a></td>
							</tr>

						@empty
							No Category Found.
						@endforelse

					@endif
				</tbody>
			</table>
		</div>
	</div>

	{{-- form processing script --}}
	{{-- <script type="text/javascript">
		function submitForm()
		{
		    var name = $('#inputName').val();

		    if(name.trim() == '' )
		    {
		        alert('Please enter your name.');
		        $('#inputName').focus();
		        return false;
		    }
		    else
		    {
		        $.ajax({
		        	headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    },
		            type:'POST',
		            url: 'categories.store',
		            data: name,
		            beforeSend: function ()
		            {
		                $('.submitBtn').attr("disabled","disabled");
		                $('.modal-body').css('opacity', '.5');
		            },
		            success:function(msg)
		            {
		                if(msg == 'ok')
		                {
		                    $('#inputName').val('');
		                    $('.statusMsg').html('<span style="color:green;">Successfully Submitted</p>');
		                }
		                else
		                {
		                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
		                }
		                $('.submitBtn').removeAttr("disabled");
		                $('.modal-body').css('opacity', '');
		            }
		        });
		    }
		}
	</script> --}}
@endsection

{{-- Product Display on Category Index page, need relationnship == confused --}}
{{-- @if(!empty($categories->products))

@forelse ($categories->products as $product)
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Product list</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $product->name }}</td>
				</tr>
			</tbody>
		</table>
@empty
	<h3>No Product is Available.</h3>
@endforelse
@endif --}}