

@extends('layouts.backendapp')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">
              <h1>Add seminar <a href="{{ route('deshboard.seminar.index') }}" class="btn btn-primary">All seminar</a></h1>
            </div>
            <div class="card-body">

                @if(session('success'))
                    <div class="badge badge-success">
                        <h3>{{ session('success') }}</h3>
                    </div>
                @endif
                <form action="{{ route('deshboard.imgseminar.edit',$imgdata->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="mb-3">
                    <label for="seminarimage" class="form-label">Seminar image</label>
                    <input type="file" class="form-control" name="image">
                    <img height="50" src="{{ asset('storage/imgseminar/'. $imgdata->image) }}" alt="">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection


