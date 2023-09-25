@extends('layouts.backendapp')


@section('content');
<div class="row justify-content-center">
    <div class="col-lg-10">

    <div class="card">
           <div style="padding: 10px 40px"> <header><h2>{{ Auth::user()->email }}</h2></header> </div>
        <div class="card-body">
            

            @if (Auth::user()->hasRole('admin'))

            <div class="mt-8 nv-boxplot shadow-lg">
                <div style="padding: 20px 10px">
                 <h1>Admin part </h1>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                   Accusantium eos, omnis rem labore laboriosam, obcaecati es
                   t minima quo qui ut eaque ab, tempora veritatis assumenda 
                   dolorem dolore magni commodi. Magnam?</p>
                </div>
              </div>
                
            @endif
                
 
              @if (Auth::user()->hasRole(['admin','editor']))

              <div class="mt-8 nv-boxplot shadow-lg">
                <div style="padding: 20px 10px">
                 <h1>Editor part </h1>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                   Accusantium eos, omnis rem labore laboriosam, obcaecati es
                   t minima quo qui ut eaque ab, tempora veritatis assumenda 
                   dolorem dolore magni commodi. Magnam?</p>
                </div>
              </div>

                  
              @endif
              <div class="mt-8 nv-boxplot shadow-lg">
                <div style="padding: 20px 10px">
                 <h1>User part </h1>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                   Accusantium eos, omnis rem labore laboriosam, obcaecati es
                   t minima quo qui ut eaque ab, tempora veritatis assumenda 
                   dolorem dolore magni commodi. Magnam?</p>
                </div>

                @can('Important articles')
                <div class="mt-8 nv-boxplot shadow-lg">
                  <div style="padding: 20px 10px">
                   <h1>Important part </h1>
                   <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                     Accusantium eos, omnis rem labore laboriosam, obcaecati es
                     t minima quo qui ut eaque ab, tempora veritatis assumenda 
                     dolorem dolore magni commodi. Magnam?</p>
                  </div>
                @endcan
                
                @can('delete articles')
                <div><button class="btn btn-danger">Delete</button></div>
                @endcan
              </div>
        </div>
    </div>


</div>
</div>

@endsection