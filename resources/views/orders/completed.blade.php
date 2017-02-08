@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.admin-menu')
        </div>

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Completed Orders</div>

                <div class="panel-body">
                        
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Company</th>
                                <th>Branch</th>
                                <th>Orders</th>
                                <th>Total</th>
                                <th>Delivery Date</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($orders as $order)
                            <tr>
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
