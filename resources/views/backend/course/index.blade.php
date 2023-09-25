

@extends('layouts.backendapp')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">
              <h1>All course <a href="{{ route('deshboard.course.create') }}" class="btn btn-primary"> Add course </a> </h1>
            </div>
            <div class="card-body">

                @if(session('success'))
                    <div class="badge badge-success">
                        <h3>{{ session('success') }}</h3>
                    </div>
                @endif

              

            </div>
        </div>
    </div>
</div>

@endsection


