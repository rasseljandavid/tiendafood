@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.admin-menu')
        </div>

        <div class="col-md-9" style="background: #fff">
            <h1>Site Configuration</h1>
            <form method="POST" action="/siteconfig">
                {{ csrf_field() }}
                <table class="table">
                    @foreach($siteconfig as $config)
                        <tr>
                            <th>{{$config->key}}:</th>
                        <td>
                            <input type="text" class="form-control" name="config[{{$config->key}}]" value="{{$config->value}}" />
                        </td>
                    </tr>
                    @endforeach
                  
                </table>
                <p>
                    <button type="submit" class="btn btn-primary">Save</button> or 
                    <a href="/admin" style="color: red">Cancel</a>
                </p>
            </form>

        </div>
    </div>
</div>
@endsection
