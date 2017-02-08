@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.admin-menu')
        </div>

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Companies</div>

                <div class="panel-body">
                        
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Company</th>
                                <th>URL</th>
                                <th>Branches</th>
                                <th>Delivery Schedules</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($companies as $company)
                            <tr>
                                <td>
                                    <a href="/companies/{{ $company->id }}/edit">{{ $company->title }}</a>
                                    <br />
                                     @if(!empty($company->image))
                                        <img style="width: 100px;" src="/images/companies/{{$company->image}}" />
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url($company->slug) }}" target="_blank">
                                        http://food.tienda.ph/{{ $company->slug }}
                                    </a>
                                </td>
                                <td> 
                                    @if(count($company->branches) > 0)
                                        @foreach($company->branches as $branch)
                                            {{ $branch }} <br />
                                        @endforeach
                                    @endif
                                </td>
                                <td> 
                                    @if(count($company->schedules) > 0)
                                        @foreach($company->schedules as $schedule)
                                            {{ date("h:i A", strtotime($schedule)) }} <br />


                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                     {{ Form::open(array('url' => 'companies/' . $company->id)) }}
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
