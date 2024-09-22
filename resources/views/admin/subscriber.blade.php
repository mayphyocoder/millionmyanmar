@extends('layouts.backend.main')
@section('content')
<div class="container my-5">
    <h3>Subscribers List</h3>
    <table class="table " >
        <thead>
            <tr style="text-align: center;">
                <td style="background-color: #fafafa">No.</td>
                <th style="background-color: #fafafa">Email</th>
                <th style="background-color: #fafafa">Subscribed</th>
                <th style="background-color: #fafafa"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($subscribers as $subscriber)
                <tr style="text-align: center">
                    <td>
                        {{$loop->iteration}}
                    </td>
                    <td style="font-size:14px;">{{ $subscriber->email }}</td>
                    <td style="font-size:14px;">{{ $subscriber->created_at }}</td>
                    <td>
                        <form action="{{route('adminsubscriber.destroy', $subscriber->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            {{-- <a href="" class="btn btn-success btn-sm"> View</a> --}}
                        {{-- <a href="" class="btn btn-info btn-sm"> Edit</a> --}}
                        <button type="submit" class="btn btn-danger btn-sm"> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



    
@endsection