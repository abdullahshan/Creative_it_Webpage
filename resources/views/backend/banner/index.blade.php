
@extends('layouts.backendapp')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1>All banner <a href="{{ route('deshboard.banner.create') }}" class="btn btn-primary">Add banner</a></h1>
              
                @if(session('successinsert'))
                <div class="badge badge-success">
                    <h3>{{ session('successinsert') }}</h3>
                </div>
            @endif
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
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                 
                    @forelse ($data as $single_data)
                        <tr>
                            <td>{{ $single_data->id }}</td>
                            <td>{{ $single_data->name }}</td>
                            <td>{{ $single_data->email }}</td>
                            <td><img height="50" src="{{ asset('storage/banner/' . $single_data->image) }}" alt="{{ $single_data->name }}"></td>
                            <td>{{ $single_data->stutas }}</td>
                            <td>
                                <a href="{{ route('deshboard.banner.edit',$single_data->id) }}" class="btn btn-primary">edit</a>
                                <a href="{{ route('deshboard.banner.show',$single_data->id) }}" class="btn btn-info">view</a>
                                <form action="{{ route('deshboard.banner.destroy',$single_data->id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">delete</button>
                                    
                                </form>
                            </td>
                            

                        </tr>
                    @empty
                        <tr>
                            <div class="alert alert-danger">
                            <h2>Banner Not Found!</h2>
                            </div>
                        </tr>
                    @endforelse

                </tbody>
              </table>
           </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h1>Recycle Bin</h1>
            </div>
           <div class="card-body table-responsive">

        


            @if(session('success'))
            <div class="badge badge-success">
                <h3>{{ session('success') }}</h3>
            </div>
        @endif

            <table class="table">
                <thead class="table table-dark">
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Stutas</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                 
                    @forelse ($data_trash as $single_data)
                        <tr>
                            <td>{{ $single_data->id }}</td>
                            <td>{{ $single_data->name }}</td>
                            <td>{{ $single_data->email }}</td>
                            <td><img height="50" src="{{ asset('storage/banner/' . $single_data->image) }}" alt="{{ $single_data->name }}"></td>
                            <td>{{ $single_data->stutas }}</td>
                            <td>
                               <a class="btn btn-primary" href="{{ route('deshboard.banner.restore', $single_data->id) }}">Restore</a>
                              
                              
                               <button type="submit" class="btn btn-danger permanentdelete" value="{{ route('deshboard.banner.PermanentDelete', $single_data->id) }}">PermanentDelete</button>
                            </td>
                            

                        </tr>
                    @empty
                        <tr>
                            <div class="alert alert-danger">
                            <h2>Banner Not Found!</h2>
                            </div>
                        </tr>
                    @endforelse

                </tbody>
              </table>
           </div>
        </div>

    </div>
</div>

@endsection


   
@section('alertscript')

<script>

    $(document).ready(function(){

       $('.permanentdelete').on('click', function(){


       var delete_link = $(this).val();

                    Swal.fire({
            title: 'Are you sure?',
            text: delete_link,
            icon: 'error',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ok'
            }).then((result) => {
            if (result.isConfirmed) {

                window.location.href = delete_link
            }
            })

       });

           
        
            
    });
</script>

@endsection

