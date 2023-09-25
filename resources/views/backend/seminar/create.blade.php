

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

                <form action="{{ route('deshboard.seminar.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="mb-3">
                    <label for="date" class="form-label">date</label>
                    <input type="text" class="form-control" name="date">
                  </div>
                  <div class="mb-3">
                    <label for="year" class="form-label">year</label>
                    <input type="text" class="form-control" name="year">
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="text" class="form-control" name="name">
                  </div>
                  <div class="mb-3">
                    <label for="time" class="form-label">time</label>
                    <input type="text" class="form-control" name="time">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection


