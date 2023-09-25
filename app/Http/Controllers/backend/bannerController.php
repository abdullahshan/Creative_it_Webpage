<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\banner;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\FuncCall;

class bannerController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
       
        $data = banner::all();

        $data_trash = banner::onlyTrashed()->get();
        return view('backend.banner.index',compact('data', 'data_trash'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $file = $request->file('image');

        if($file){

            $fileName = 'banner_' . uniqid() . '.' . $file->getClientOriginalExtension();
            
            $file->move(public_path('storage/banner/'), $fileName);

            $data = new banner();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->image = $fileName;
            $data->save();


            return redirect('http://127.0.0.1:8000/deshboard/banner')->with('successinsert','Banner insert succesfully done!');
        }
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $data = banner::find($id);

        return view('backend.banner.view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {
        $data = banner::find($id);
       return view('backend.banner.edit',compact('data'));
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
        
        $data = banner::find($id);

        $file = $request->file('image');
        if($file){

            $fileName = 'banner_' . uniqid() . '.' . $file->getClientOriginalExtension();
            
           if(Storage::disk('public')->exists('banner/',$data->image)){
            unlink(public_path('storage/banner/') . $data->image);
           }

            $file->move(public_path('storage/banner/'), $fileName);

            $data->image = $fileName;
            $data->save();
            
        }else{
            $data->image = $data->image;
        }
            $data->name = $request->name;
            $data->email = $request->email;
            $data->save();
            return back()->with('success','Banner update succesfully done!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = banner::find($id);
        $data->delete();
        return back()->with('success','');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bannerRestore($id)
    {
        
        banner::withTrashed()
        ->where('id', $id)
        ->restore();
        return back()->with('success','Banner restore succesfully done!');
    }

 /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function PermanetDelete($id)
    {

        $data_delete = banner::withTrashed()->find($id);
          
        if(Storage::disk('public')->exists('banner/',$data_delete->image)){
            unlink(public_path('storage/banner/') . $data_delete->image);
           }

        banner::withTrashed()
        ->where('id', $id)
        ->forceDelete();
        return back()->with('success','Banner PermanentyDelete succesfully done!');
    }

    
}
