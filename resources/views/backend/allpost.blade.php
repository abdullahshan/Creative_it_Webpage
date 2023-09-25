@extends('layouts.backendapp')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">
                <h1>All post <a href="{{ route('deshboard.create.post') }}" class="btn btn-primary">Add post</a></h1>
            </div>
            <div class="card-body">

              @forelse ($postdata as $singledata)

              <div class="mt-8 nv-boxplot shadow-lg">
                <div style="padding: 10px 30px; margin:10px;">
                <p> 
                    <span style="font-size: 20px;font-weght:bold;">Categories:</span>
                    @foreach ($singledata->post_categories as $singlcategory)
                    <span style="background: #000; color:white paddin:10px" >{{ $singlcategory->name }}</span>
                @endforeach</p>
                <p>{{ $singledata->created_at->diffForHumans() }}</p>
                <h2>{{ $singledata->title }} | by {{ $singledata->user->name }} </h2>
                <p>{{ $singledata->description }}</p>
                <p><a href="#" style="color:greenyellow"><h2>Read more</h2></a></p>
                </div>
              </div>

              @empty
                 <div class="alert alert-danger">
                    <h1>No more data!</h1>
                 </div>
              @endforelse

            </div>
        </div>
    </div>
</div>

@endsection





