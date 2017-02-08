@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.admin-menu')
        </div>

        <div class="col-md-9" style="background: #fff">
            {{ Form::model($company, array('route' => array('companies.update', $company->id), 'method' => 'PUT', 'enctype'=>"multipart/form-data")) }}

                <h1>Update {{ $company->title }}</h1>
                <h2>General Information</h2>
                <table class="table">
                    <tr>
                        <th>Company Name: </th>
                        <td><input type="text" class="form-control" id="title" name="title" placeholder="Company Name" value="{{ $company->title }}"></td>
                    </tr>
                    <tr>
                        <th>URL: </th>
                        <td><input type="text" class="form-control" id="url" name="url" placeholder="URL" value="{{ $company->slug }}"></td>
                    </tr>
                     <tr>
                        <th>Logo: </th>

                        <td>
                        @if(!empty($company->image))
                            <img style="width: 100px;" src="/images/companies/{{$company->image}}" />
                        @endif
                        <input type="file" name="image" id="image">
                        </td>
                    </tr>
                </table>
 
                <h2>
                    Branches 
                        <a class="add_branch_button" href="javascript:;">
                            <i class="fa fa-plus-circle" aria-hidden="true"> </i>
                            <br />
                       
                        </a>
                        <span style="font-size: 0.5em">If no branch, Add "Main"</span>
                </h2>

                <div class="branches_fields_wrap">
                    
                    @if(count($company->branches) > 0)
                        @foreach($company->branches as $branch)
                         <div><input type="text" name="branches[]" value="{{$branch}}"><a href="#" class="remove_field">Remove</a></div>
                        @endforeach
                    @else

                        <div><input type="text" name="branches[]"></div>
                    @endif
                    
                </div>

                <h2>
                    Schedules 
                        <a class="add_schedule_button" href="javascript:;">
                            <i class="fa fa-plus-circle" aria-hidden="true"> </i>
                        </a>
                </h2>

                <div class="schedules_fields_wrap">
                    @if(count($company->schedules) > 0)
                        @foreach($company->schedules as $schedule)
                         <div><input type="text" class="time" name="schedules[]" value="{{$schedule}}"><a href="#" class="remove_field">Remove</a></div>
                        @endforeach
                    @else

                        <div><input type="text" class="time" name="schedules[]"></div>
                    @endif
                    
                </div>

                <br />

                <p>
                    <button type="submit" class="btn btn-primary">Save</button> or 
                    <a href="/companies" style="color: red">Cancel</a>
                </p>
            {{ Form::close() }}


        </div>
    </div>
</div>
@endsection
