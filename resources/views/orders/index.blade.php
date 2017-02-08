@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.admin-menu')
        </div>

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Orders</div>

                <div class="panel-body">
                        
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Date Ordered</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Company</th>
                                <th>Branch</th>
                                <th>Orders</th>
                                <th>Total</th>
                                <th>Delivery Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>
                                    {{ $order->created_at->format('M d, Y h:i A') }}
                                </td>
                                <td>
                                    {{ $order->name}}
                                </td>
                                <td>
                                     {{ $order->mobile }}
                                </td>
                                <td> 
                                    {{ $order->company }}
                                </td>
                                <td> 
                                     {{ $order->branch }}
                                </td>
                                <td> 
                                    {{ $order->orders }}
                                </td>

                                <td> 
                                    {{ $order->total }}
                                </td>

                                <td> 
                                    {{ $order->deliverydate }}
                                </td>

                                <td>
                                    <a href="/orders/markCompleted/{{$order->id}}">Mark as Compeleted</a> - 
                                    {{ Form::open(array('url' => 'orders/' . $order->id)) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete', array('class' => 'btn btn-danger areyousure')) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
