@extends('layouts.backendapp')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">
                <h1>Add post <a href="" class="btn btn-primary">All post</a></h1>
            </div>
            <div class="card-body">

                @php
                   // dd($id);
                @endphp
                
                   <form action="{{ route('deshboard.store.assign', $id) }}" method="POST">
                    @csrf
                    @foreach ($permitions as $permition)
                        
                    <input type="checkbox" name="permition[]" value="{{ $permition->id }}" id="{{ $permition->id }}">
                    <label for="{{ $permition->id }}">{{ $permition->name }}</label>
                    @endforeach
          <br/>
                    <button type="submit" class="btn btn-primary" placeholder="description">submit</button>
                   </form>
                 

            </div>
        </div>
    </div>
</div>

@endsection