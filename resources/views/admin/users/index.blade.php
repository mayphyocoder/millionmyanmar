@extends('layouts.backend.main')
@section('content')
<div class="container my-3 ">
    
    <center>
        <a class="btn btn-primary" href="{{route('users.create')}}" role="button">
            Add New User </a>
    </center>
    <br>
    <table class="table table-bordered"  style="width:100%">
        <thead>
            <tr style="text-align: center;">
                <td style="background-color: #fafafa">No.</td>
                <th style="background-color: #fafafa">Email</th>
                <th style="background-color: #fafafa">Subscribed</th>
                <th style="background-color: #fafafa"> Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr style="text-align: center">
                    <td>
                        {{$loop->iteration}}
                    </td>
                    <td style="font-size:14px;">{{ $user->name }}</td>
                    <td style="font-size:14px;">{{ $user->email }}</td>
                    <td>
                        <form action="{{route('users.destroy', $user->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <a href="" class="btn btn-success btn-sm"> View</a>
                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning btn-sm"> Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm"> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



    
@endsection