@extends('admin.layout.admin')

@section('title', 'Orders')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-1">
            <div class="panel panel-primary" style="margin-top: 30px;">
			<div class="panel-heading text-left"><h3>Orders</h3></div>
				<div class="panel-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Ordered By</th>
								<th>Total Price</th>

								<th>Quantity</th>
								<th>Price</th>


								<th>Delivered Status</th>
							</tr>
						</thead>
						<tbody>
							@forelse($orders as $order)
								<tr class="text-justify">
							        <td>{{ $order->user->name }}</td>
							        <td>{{ $order->total_price}}</td>

							        {!! Form::open([]) !!}

									{!! Form::label('delivered', 'Delivered', []) !!}
									<input type="checkbox" name="delivered" class="form-control pull-right">

								{!! Form::close() !!}

							        @forelse ($order->products as $item)
							    	<td>{{ $item->pivot->qty }}</td>
							        <td>{{ $item->pivot->total_amount }}</td>
							        <td>Status</td>
							        @empty
							        	<h3>No Information Found</h3>
							        @endforelse
							    </tr>
							@empty
								<h3>No Order Found</h3>
							@endforelse

						</tbody>
					</table>
				</div>
			</div>
        </div>
    </div>
</div>

@endsection
