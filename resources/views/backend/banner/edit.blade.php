@extends('layouts.backendapp')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">
                <h1>Edit banner <a class="btn btn-primary" href="{{ route('deshboard.banner.index') }}">All banner</a></h1>
            </div>
            <div class="card-body">

                @if(session('success'))
                <div class="badge badge-success">
                    <h3>{{ session('success') }}</h3>
                </div>
            @endif

            
                <form action="{{ route('deshboard.banner.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="name" class="form-label">name</label>
                      <input type="text" class="form-control" value="{{ $data->name }}" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" class="form-control" value="{{ $data->email }}" name="email">
                      </div>
                      <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input type="file" class="form-control" name="image">
                        <img height="50" src="{{ asset('storage/banner/' . $data->image) }}" alt="">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
        </div>
    </div>
</div>

@endsection