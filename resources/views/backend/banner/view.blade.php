
@extends('layouts.backendapp')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1>All banner <a href="{{ route('deshboard.banner.index') }}" class="btn btn-primary">Add banner</a></h1>
            </div>
           <div class="card-body table-responsive">

            <table class="table">
                <thead class="table table-dark">
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Stutas</th>

                  </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td><img height="50" src="{{ asset('storage/banner/' . $data->image) }}" alt="{{ $data->name }}"></td>
                        <td>{{ $data->stutas }}</td>
                    </tr>

                </tbody>
              </table>
           </div>
        </div>
    </div>
</div>

@endsection