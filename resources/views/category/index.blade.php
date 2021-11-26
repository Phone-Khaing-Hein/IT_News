@extends('layouts.app')

@section("title") Category Manager @endsection

@section('content')
    <x-bread-crumb>
        <li class="breadcrumb-item active" aria-current="page">Category Manager</li>
    </x-bread-crumb>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-0">
                        <i class="feather-layers"></i>
                        Category List
                    </h4>
                    <hr>
                    <form action="{{route("category.store")}}" class="mb-3" method="post">
                        @csrf
                        <div class="form-inline">
                            <input type="text" name="title" class="form-control form-control-lg mr-2 @error('title') is-invalid @enderror" value="{{old('title')}}" placeholder="New Category" required>
                            <button class="btn btn-primary btn-lg">Add Category</button>
                        </div>
                        @error("title")
                        <small class="text-danger font-weight-bold">{{$message}}</small>
                        @enderror
                        @if(session('message'))
                            <small class="text-success font-weight-bold">{{session('message')}}</small>
                        @endif
                    </form>

                    @include('category.list')
                </div>
            </div>
        </div>
    </div>
@endsection
