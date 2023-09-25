@extends('layouts.backendapp')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">
                <h1>Update logo <a href=""></a></h1>
            </div>
            <div class="card-body">

                @if(session('success'))
                    <div class="badge badge-success">
                        <h3>{{ session('success') }}</h3>
                    </div>
                @endif

                <form action="{{ route('deshboard.logo.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" value="{{ $data->title }}" name="title">
                      </div>
                      <div class="mb-3">
                        <label for="image" class="form-label">logo image</label>
                        <input type="file" class="form-control" name="image">
                        <img height="50" src="{{ asset('storage/logo/' . $data->image) }}" alt="">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
        </div>
    </div>
</div>

@endsection