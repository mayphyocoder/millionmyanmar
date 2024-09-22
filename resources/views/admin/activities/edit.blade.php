@extends('layouts.backend.main')
@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4>Update New Activities</h4>
                <div class="card" style="background-color: #fafafa;">
                    <div class="card-body">
                        <form method="POST" action="{{ route('adminactivities.update',$activities->id) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row mb-3">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Title</label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" class="form-control form-control-sm" placeholder="Enter Title" value="{{$activities->title}}">

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="formFileSm" class="col-sm-2 col-form-label col-form-label-sm">Photo</label>
                                <div class="col-sm-6">
                                
                                <input class="form-control form-control-sm" type="file" name="photo">
                                <img src="{{Storage::url($activities->photo)}}" alt="" style="width:25%;">

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Submit Date</label>
                                <div class="col-sm-6">
                                    <input type="date" name="date" class="form-control form-control-sm" placeholder="Enter Date" {{$activities->date}}>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2">Admin Name:</div>
                                <div class="col-sm-6">
                                    <select name="user_id" class="form-select form-select-sm">
                                        <option value="{{$activities->user_id}}">choose an admin name...</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}
                                            </option>
                                        @endforeach
                                        
                                    </select>
                                    @error('user_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            
                            
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                            
                        </form>

                    </div>


                </div>

            </div>

        </div>

    </div>
@endsection
