@extends('layouts.backend.main')
@section('content')

<div class="container my-3 ">
    
    <center>
        <a class="btn btn-primary" href="{{route('admincsr.create')}}" role="button">
            Add New CSR </a>
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
                @foreach ($csr as $csr)
                    
                
                <tr style="text-align: center">
                    <td>
                        {{$loop->iteration}}
                    </td>
                    <td style="font-size:14px;">{{$csr->title}}</td>
                    <td style="font-size:14px; width:20%;">
                        <img src="{{Storage::url($csr->photo)}}" alt="" style="width:25%;">
                    </td>
                    <td style="font-size:14px;">{{$csr->date}}</td>
                    <td style="font-size:14px;">{{$csr->users_table->name}}</td>
                    <td>
                        <form action="{{route('admincsr.destroy', $csr->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <a href="" class="btn btn-success btn-sm"> View</a>
                        <a href="{{route('admincsr.edit', $csr->id)}}" class="btn btn-warning btn-sm"> Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm"> Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>

@endsection