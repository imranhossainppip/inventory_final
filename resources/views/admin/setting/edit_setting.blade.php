@extends('admin.master')
@section('title')
    Edit Setting
@endsection
@section('content')
    <div class="container col-sm-8 col-sm-offset-2">
        <h1 class="text-center text-success">{{Session::get('message')}}</h1>
        <div class="well">
            <form action="{{url('/update_setting/'.$edit_setting->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" name="company_name" value="{{$edit_setting->company_name}}" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Company Address</label>
                    <textarea name="company_address" class="form-control" rows="5" id="exampleInputEmail2">{{$edit_setting->company_address}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Company Email</label>
                    <input type="email" name="company_email" value="{{$edit_setting->company_email}}" class="form-control" id="exampleInputEmail3">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Company Phone</label>
                    <input type="number" name="company_phone" value="{{$edit_setting->company_phone}}" class="form-control" id="exampleInputEmail3">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail4">Company Logo</label>
                    <img src="{{url($edit_setting->company_logo)}}" height="50" width="50">
                    <input type="file" name="company_logo" class="form-control" id="exampleInputEmail4">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail5">Company Mobile</label>
                    <input type="number" name="company_mobile" value="{{$edit_setting->company_mobile}}" class="form-control" id="exampleInputEmail5">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail6">Company City</label>
                    <input type="text" name="company_city" value="{{$edit_setting->company_city}}" class="form-control" id="exampleInputEmail6">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail7">Company Country</label>
                    <input type="text" name="company_country" value="{{$edit_setting->company_country}}" class="form-control" id="exampleInputEmail7">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail8">Company Zipcode</label>
                    <input type="text" name="company_zipcode" value="{{$edit_setting->company_zipcode}}" class="form-control" id="exampleInputEmail8">
                </div>
                <button type="submit" name="submit" class="btn btn-success form-control">Update</button>
            </form>
        </div>
    </div>
@endsection
