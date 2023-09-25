<?php

namespace App\Http\Controllers\backend;

use App\Models\logo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class logoController extends Controller
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

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function index(){

        
        $data = logo::first();
        
        return view('backend.logo.index',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
       
        $data = logo::find($id);

        $file = $request->file('image');
        if($file){

            $fileName = 'banner_' . uniqid() . '.' . $file->getClientOriginalExtension();
            
           if(Storage::disk('public')->exists('logo/',$data->image)){
            unlink(public_path('storage/logo/') . $data->image);
           }

            $file->move(public_path('storage/logo/'), $fileName);

            $data->image = $fileName;
            $data->save();
            
        }else{
            $data->image = $data->image;
        }

            return back()->with('success','Logo update succesfully done!');
    }



}
