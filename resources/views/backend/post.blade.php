@extends('layouts.backendapp')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">
                <h1>Add post <a href="{{ route('deshboard.all.post') }}" class="btn btn-primary">All post</a></h1>
            </div>
            <div class="card-body">


                @if(session('success'))
                <div class="alert alert-success">
                   <h1>{{ session('success') }}</h1> 
                </div>
            @endif


                <form action="{{ route('deshboard.store.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="text" name="title" class="form-control" placeholder="title">
                    <br/>

                    <textarea name="description" id="" class="form-control" style="height: 100px"></textarea>
                    <br/>

                    @foreach ($categories as $category)
                        
                        <input type="checkbox" name="categories[]" value="{{ $category->id }}" id="cat_{{ $category->id }}">
                        <label for="cat_{{ $category->id }}">{{ $category->name }}</label>
                    @endforeach


                    <br/>
                    <button type="submit" class="btn btn-primary" placeholder="description">submit</button>
                   
                  </form>

            </div>
        </div>
    </div>
</div>

@endsection