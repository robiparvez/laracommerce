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






							</tr>
						</thead>
						<tbody>
							@forelse($orders as $order)

								<tr class="text-justify">

							        <td>{{ $order->user->name }}</td>
							        <td>{{ $order->total_price}}</td>


									{{-- checkbox processing --}}
							        <div class="pull-right">
										{!! Form::open(['route' => ['checkbox.deliver', $order->id], 'method' => 'POST']) !!}

							        		<input type="checkbox" name="delivered" id="input_checkbox" value="1" {{ $order->delivered == 1 ? "checked" : "" }}>
											<input type="submit" value="Delivered" id="btn_deliver" style="color: blue;" onclick="setColor('btn_deliver', '#101010')";>
							        	{!! Form::close() !!}
									</div>

							        @forelse ($order->products as $item)

								    	<td>{{ $item->pivot->qty }}</td>
								        <td>{{ $item->pivot->total_amount }}</td>
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


<script>
	var count = $('#input_checkbox').val("1");
    function setColor(btn, color)
    {
        var property = document.getElementById(btn);
        if (count == 0) {
            property.style.backgroundColor = "#FFFFFF";
            count = 1;
        }
        else {
            property.style.backgroundColor = "#7FFF00";
            count = 0;
        }
    }
</script>