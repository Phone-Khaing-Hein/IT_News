@extends('layouts.app')

@section("title") Edit Profile @endsection

@section('content')
    <x-bread-crumb>
        <li class="breadcrumb-item"><a href="{{ route('profile') }}">Profile</a></li>
        <li class="breadcrumb-item active" aria-current="page">Update Photo</li>
    </x-bread-crumb>

    <div class="row">
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ isset(Auth::user()->photo) ? asset('storage/profile/'.Auth::user()->photo) : asset('dashboard/img/user-default-photo.jpg') }}" class="d-block w-50 mx-auto rounded-circle my-3" alt="">

                    <form action="{{ route('profile.changePhoto') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="d-flex justify-content-between align-items-end">
                            <div class="form-group mb-0 mr-2">
                                <label class="text-center">
                                    <i class="mr-1 feather-image"></i>
                                    Select New Photo
                                </label>
                                <input type="file" name="photo" class="form-control p-1 mr-2 overflow-hidden" required>

                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="mr-1 feather-upload"></i>
                            </button>
                        </div>
                        @error("photo")
                        <small class="font-weight-bold text-danger text-center">{{ $message }}</small>
                        @enderror
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
