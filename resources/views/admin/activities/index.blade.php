@extends('layouts.backend.main')
@section('content')

<div class="container my-3 ">
    
    <center>
        <a class="btn btn-primary" href="{{route('adminactivities.create')}}" role="button">
            Add New Activities </a>
    </center>
    <br>
    <table class="table table-bordered"  style="width:100%">
        <thead>
            <tr style="text-align: center;">
                <td style="background-color: #fafafa">No.</td>
                <th style="background-color: #fafafa">Name</th>
                <th style="background-color: #fafafa">Photo</th>
                <th style="background-color: #fafafa">Submit Date</th>
                <th style="background-color: #fafafa">Upload User</th>

                <th style="background-color: #fafafa"> Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($activities as $activity)
                    
                
                <tr style="text-align: center">
                    <td>
                        {{$loop->iteration}}
                    </td>
                    <td style="font-size:14px;">{{$activity->title}}</td>
                    <td style="font-size:14px; width:20%;">
                        <img src="{{Storage::url($activity->photo)}}" alt="" style="width:25%;">
                    </td>
                    <td style="font-size:14px;">{{$activity->date}}</td>
                    <td style="font-size:14px;">{{$activity->users_table->name}}</td>
                    <td>
                        <form action="{{route('adminactivities.destroy', $activity->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <a href="" class="btn btn-success btn-sm"> View</a>
                        <a href="{{route('adminactivities.edit', $activity->id)}}" class="btn btn-warning btn-sm"> Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm"> Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>

@endsection