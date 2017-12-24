@extends('admin.layout.admin')

@section('title', 'Category Home')

@section('content')

	<a class="btn btn-lg btn-primary" data-toggle="modal" href='#modal-id'>Add Category</a>

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
						<button type="submit" class="btn btn-primary submitBtn">Save changes</button>
					</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div>



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


<script type="text/javascript">
function submitContactForm()
{
    var name = $('#inputName').val();
    if(name.trim() == '' ){
        alert('Please enter your name.');
        $('#inputName').focus();
        return false;
    }else{
        $.ajax({
            type:'POST',
            url: {{ url('categories.store') }}
            data: name
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                if(msg == 'ok'){
                    $('#inputName').val('');
                    $('.statusMsg').html('<span style="color:green;">Successfully Submitted</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}

</script>

@endsection