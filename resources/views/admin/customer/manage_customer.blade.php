@extends('admin.master')
@section('title')
    Manage Customer
@endsection
@section('content')
    <div class="container">
        <h1 class="text-center text-success">{{Session::get('message')}}</h1>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"">
            <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
{{--                <th scope="col">Email</th>--}}
                <th scope="col">Phone</th>
                <th scope="col">Shop Name</th>
                <th scope="col">Account Holder</th>
                <th scope="col">Account Number</th>
                <th scope="col">Bank Name</th>
{{--                <th scope="col">NID No.</th>--}}
                <th scope="col">Photo</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            {{$i = 1}}
            @foreach($customers as $customer)
            <tr>
                <th>{{$i++}}</th>
                <td>{{$customer->name}}</td>
{{--                <td>{{$employee->email}}</td>--}}
                <td>{{$customer->phone}}</td>
                <td>{{$customer->shop_name}}</td>
                <td>{{$customer->account_holder}}</td>
                <td>{{$customer->account_number}}</td>
                <td>{{$customer->bank_name}}</td>
{{--                <td>{{$employee->nid_no}}</td>--}}
                <td><img src="{{$customer->photo}}" height="50" width="50px"></td>
                <td>
                    <a class="btn btn-success btn-sm" href="{{ url('/view_customer/'.$customer->id) }}">
                        <i class="fas fa-street-view" ></i>
                    </a>
                    <a class="btn btn-info btn-sm" href="{{ (url('/edit_customer/'.$customer->id)) }}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" id="delete" href="{{ url('/delete_customer/'.$customer->id) }}" onclick="return confirm('Are you sure delete this!')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
