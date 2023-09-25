<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\imgseminar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class imgseminarController extends Controller
{
    public function index(){

        $imgdata = imgseminar::first();

        return view('backend.seminar.seminarimg',compact('imgdata'));
    }


    public function edit(Request $request ,$id){

        $data = imgseminar::find($id);
        $file = $request->file('image');
        
        if($file){

            $fileName = 'imgseminar_' . uniqid() . '.' . $file->getClientOriginalExtension();

            if(Storage::disk('public')->exists('imgseminar/', $data->image)){
                unlink(public_path('storage/imgseminar/') .$data->image);
            }

            $file->move(public_path('storage/imgseminar/'), $fileName);
            $data->image = $fileName;
            $data->save();
        }else{
            $data->image = $data->image;
        }

        return back()->with("success", "seminar_image successfuly done!");
       
    }
}
