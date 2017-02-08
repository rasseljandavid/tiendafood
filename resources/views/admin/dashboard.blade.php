@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.admin-menu')
        </div>

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th colspan=2>
                                Site Progress
                            </th>
                        </tr>
                    </thead>

                        <tbody>

                            <tr>
                                <th>Total New Orders:</th>
                                <td> {{$totalNewOrders}}</td>
                            </tr>

                             <tr>
                                <th>Total Completed Orders:</th>
                                <td> {{$totalCompeletedOrders}}</td>
                            </tr>

                            <tr>
                                <th>Total Companies:</th>
                                <td> {{$totalCompany}}</td>
                            </tr>

                             <tr>
                                <th>Total Active Menu:</th>
                                <td> {{$totalActiveMenu}}</td>
                            </tr>

                            <tr>
                                <th>Total Non-Active Menu:</th>
                                <td> {{$totalNonActiveMenu}}</td>
                            </tr>

                            
                        </tbody>

                    </table>

                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2">Site Config</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($config as $cg)
                            <tr>
                                <th>{{ $cg['key'] }}</th>
                                <td>{{ $cg['value'] }}</td>
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
