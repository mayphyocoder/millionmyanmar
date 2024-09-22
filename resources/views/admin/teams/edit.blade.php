@extends('layouts.backend.main')
@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4>Edit New Teams</h4>
                <div class="card" style="background-color: #fafafa;">
                    <div class="card-body">
                        <form method="POST" action="{{ route('adminteams.update', $team->id) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row mb-3">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Name</label>
                                <div class="col-sm-6">
                                    <input type="name" name="name" class="form-control form-control-sm" placeholder="Enter Name" value="{{$team->name}}">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="formFileSm" class="col-sm-2 col-form-label col-form-label-sm">Photo</label>
                                <div class="col-sm-6">
                                
                                <input class="form-control form-control-sm" type="file" name="photo" >
                                <img src="{{Storage::url($team->photo)}}" alt="" style="width:25%;">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Position</label>
                                <div class="col-sm-6">
                                    <input type="text" name="position" class="form-control form-control-sm" placeholder="Enter Position" value="{{$team->position}}">
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
