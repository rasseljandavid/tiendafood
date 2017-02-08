@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.admin-menu')
        </div>

        <div class="col-md-9" style="background: #fff">
            <h1>Add New Menu</h1>
            <form action="/products" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <table class="table">
                    <tr>
                        <th>Title: </th>
                        <td><input type="text" class="form-control" name="title" id="title" placeholder="Menu Title" required /></td>
                    </tr>
                    <tr>
                        <th>Description: </th>
                        <td>
                        <textarea class="form-control" name="body" id="body" placeholder="Menu Description"></textarea>
                        </td>
                    </tr>
                     <tr>
                        <th>Image: </th>
                        <td><input type="file" name="image" id="image" /></td>
                    </tr>

                     <tr>
                        <th>Price: <br /> <span style="font-size: 0.8em; color: #666; font-style: italic">Enter the actual amount without the P symbol</span></th>
                        <td><input type="text" class="form-control" name="price" id="price" placeholder="E.g. 89.00" required /></td>
                    </tr>
                     <tr>
                        <th>Rank: <br /><span style="font-size: 0.8em; color: #666; font-style: italic">Enter number from 1-100 with 1 being the highest rank and will appear at the top.</span></th>
                        <td><input type="text" class="form-control" name="rank" id="rank" placeholder="E.g. 1" required /></td>
                    </tr>
                     <tr>
                        <th>Active?:</th>
                        <td><input value="1" type="checkbox" name="active" id="active" checked></td>
                    </tr>
                </table>
 

                <p>
                    <button type="submit" class="btn btn-primary">Save</button> or 
                    <a href="/products" style="color: red">Cancel</a>
                </p>
            </form>

        </div>
    </div>
</div>
@endsection
