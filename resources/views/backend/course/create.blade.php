

@extends('layouts.backendapp')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">
              <h1>Add course <a href="{{ route('deshboard.course.index') }}" class="btn btn-primary">All course</a></h1>
            </div>
            <div class="card-body">

                @if(session('success'))
                    <div class="badge badge-success">
                        <h3>{{ session('success') }}</h3>
                    </div>
                @endif

                <form action="{{ route('deshboard.course.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="mb-3">
                    <label for="title" class="form-label"> <h4>title</h4> </label>
                    <input type="text" class="form-control" name="title">
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="text" class="form-control" name="name">
                  </div>
                  <div class="mb-3">
                    <label for="class" class="form-label">class</label>
                    <input type="text" class="form-control" name="class">
                  </div>
                  <div class="mb-3">
                    <label for="time" class="form-label">time</label>
                    <input type="text" class="form-control" name="time">
                  </div>
                  <div class="mb-3">
                    <label for="image" class="form-label">image</label>
                    <input type="file" class="form-control" name="image">
                  </div>
                  <div class="div"><h4>Add 2nd course</h4></div>
                  <div class="mb-3">
                    <label for="name_s" class="form-label">name</label>
                    <input type="text" class="form-control" name="name_s">
                  </div>
                  <div class="mb-3">
                    <label for="class_s" class="form-label">class</label>
                    <input type="text" class="form-control" name="class_s">
                  </div>
                  <div class="mb-3">
                    <label for="time_s" class="form-label">time</label>
                    <input type="text" class="form-control" name="time_s">
                  </div>
                  <div class="mb-3">
                    <label for="image_s" class="form-label">image</label>
                    <input type="file" class="form-control" name="image_s">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection


