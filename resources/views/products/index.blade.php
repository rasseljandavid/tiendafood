@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.admin-menu')
        </div>

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
                        
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Menu</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Rank</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>
                                    <a href="/products/{{ $product->id }}/edit">{{ $product->title }}</a>
                                    <br />
                                    @if(!empty($product->image))
                                        <img style="width: 100px;" src="/images/products/{{$product->image}}" />
                                    @endif
                                </td>
                                <td>
                                    {{ $product->body }}
                                </td>
                                <td> 
                                    P{{ number_format($product->price, 2) }}
                                </td>
                                <td> 
                                    @if(!empty($product->active))
                                       Active
                                    @endif
                                </td>
                                <td> 
                                    {{ $product->rank }}
                                </td>
                                <td>
                                     {{ Form::open(array('url' => 'products/' . $product->id)) }}
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
