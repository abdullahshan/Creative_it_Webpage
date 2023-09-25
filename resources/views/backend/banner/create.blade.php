@extends('layouts.backendapp')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">
                <h1>Add banner <a href="{{ route('deshboard.banner.index') }}" class="btn btn-primary">All banner</a></h1>
            </div>
            <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                    
                @endif

                <form action="{{ route('deshboard.banner.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                      <label for="name" class="form-label">name</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" class="form-control" name="email">
                      </div>
                      <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input type="file" class="form-control" name="image">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
        </div>
    </div>
</div>

@endsection