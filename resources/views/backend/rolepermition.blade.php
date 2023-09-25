@extends('layouts.backendapp')


@section('content');

<div class="row justify-content-center">
    <div class="col-lg-10">

    <div class="card">
           <div style="padding: 10px 40px"> <header><h2>Add permition</h2></header> </div>
        <div class="card-body">

            <!-----permition---Form----------->

           <form action="{{ route('deshboard.add.permition') }}" method="POST">
            @csrf
            <input type="text" name="permition" class="form-control" placeholder="ENTER YOUR PERMITION">
            <button name="addPermition" class="btn btn-primary mt-2">Add Permiton</button>
           </form>
        </div>
    </div>


    <div class="card mt-4">
        <div style="padding: 10px 40px"> <header><h2>All permition</h2></header> </div>
     <div class="card-body">

         <!-----All---permition------------>

         <table class="table mt-2">
            <tr>
                <th>Permition-Name</th>
                <th>Action</th>
            </tr>
                    @foreach ($permitions as $permition)
                        <tr>
                        <td>{{ $permition->name }}</td>
                         <td><a href="" class="btn btn-danger">delete</a></td>
                        </tr>
                    @endforeach
           </table>
     </div>
 </div>


</div>
</div>




<div class="row justify-content-center mt-4">
    <div class="col-lg-10">

    <!---===========assignRole------------>

    <div class="card">
        <div style="padding: 10px 40px"> <header><h2>Assign permition to Role</h2></header> </div>
     <div class="card-body">
         
        <table class="table">
            <tr>
                <th>Role</th>
                <th>Action</th>
            </tr>
                @foreach ($roles as $role)
                   <tr>
                    <td>{{ $role->name }}</td>
                    <td><a href="{{ route('deshboard.create.assign', $role->id) }}" class="btn btn-primary">assign_permition_to_role</a></td>
                   </tr>
                @endforeach
        </table>
      
     </div>
 </div>

    <!-------Role&Permition------Part------>

    <div class="card mt-2">
           <div style="padding: 10px 40px"> <header><h2>Role&Permition <br> <!--{{ Auth::user()->email }}---></h2></header> </div>
        <div class="card-body">
            
            <table class="table">
                <tr>
                    <th>Role</th>
                    <th>permition</th>
                </tr>
                   
            @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                     <td> @foreach ($role->getAllPermissions() as $permition)
                       <li> {{ $permition->name }}</li>
                        <br/>
                    @endforeach
                </td>
                </tr>    
               @endforeach
            </table>
         
        </div>
    </div>


</div>
</div>

@endsection