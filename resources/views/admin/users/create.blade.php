
@extends('layouts.backend.main')
@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4>Add New Users</h4>
                <div class="card" style="background-color: #fafafa;">
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.store') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Name</label>
                                <div class="col-sm-6">
                                    <input type="name" name="name" class="form-control form-control-sm" placeholder="Enter Name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" name="email" class="form-control form-control-sm" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="colFormLabelSm"
                                    class="col-sm-2 col-form-label col-form-label-sm">Password</label>
                                <div class="col-sm-6">
                                    <input type="password" name="password" class="form-control form-control-sm"
                                        placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Confirm
                                    Password</label>
                                <div class="col-sm-6">
                                    <input type="password" name="confirm_password" class="form-control form-control-sm"
                                        placeholder="Enter ConfirmPassword">
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
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
