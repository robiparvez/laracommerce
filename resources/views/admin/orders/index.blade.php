@extends('admin.layout.admin')

@section('title', 'Orders')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Orders
                </div>
                <div class="panel-body">
                    <!-- Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    User ID
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    Total Price
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    Delivered Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
							@forelse($orders as $order)
								<tr>
	                                <td>
	                                    Content 1
	                                </td>
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
