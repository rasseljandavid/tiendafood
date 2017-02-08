@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.admin-menu')
        </div>

        <div class="col-md-9" style="background: #fff">
            <h1>Add New Company</h1>
            <form action="/companies" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h2>Company General Information</h2>
                <table class="table">
                    <tr>
                        <th>Name: </th>
                        <td><input type="text" class="form-control" name="title" id="title" placeholder="Company Name" required /></td>
                    </tr>
                    <tr>
                        <th>URL: </th>
                        <td><input type="text" class="form-control" name="url" id="url" placeholder="URL" required /></td>
                    </tr>
                     <tr>
                        <th>Logo: </th>
                        <td><input type="file" name="image" id="image" /></td>
                    </tr>
                </table>
 
                <h2>
                    Branches 
                        <a class="add_branch_button" href="javascript:;">
                            <i class="fa fa-plus-circle" aria-hidden="true"> </i>
                        </a> <br />
                        <span style="font-size: 0.5em">If no branch, Add "Main"</span>
                </h2>

                <div class="branches_fields_wrap">
                    
                    <div><input type="text" name="branches[]"></div>
                    
                </div>

                <h2>
                    Schedules 
                        <a class="add_schedule_button" href="javascript:;">
                            <i class="fa fa-plus-circle" aria-hidden="true"> </i>
                        </a>
                </h2>

                <div class="schedules_fields_wrap">
                    
                    <div><input type="text" class="time" name="schedules[]"></div>
                    
                </div>
                
                <br />

                <p>
                    <button type="submit" class="btn btn-primary">Save</button> or 
                    <a href="/companies" style="color: red">Cancel</a>
                </p>
            </form>

        </div>
    </div>
</div>
@endsection
