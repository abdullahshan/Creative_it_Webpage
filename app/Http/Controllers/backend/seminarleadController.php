<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\seminarlead;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class seminarleadController extends Controller
{ 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){

        $request->validate([
            'name' =>'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'seminar_id' => 'required|integer',
            'address' => 'max:500',
            
        ]);


        $data = new seminarlead();
        $data->seminar_id = $request->seminar_id;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->save();


        return back()->with('success','seminar_lead registration succesfully done!');

    }

   
}
