<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\banner;
use App\Models\course;
use App\Models\imgseminar;
use App\Models\logo;
use App\Models\seminar;
use Illuminate\Http\Request;

class frontendController extends Controller{
 
    public function index(){

        $data = banner::where("stutas", 1)->select("image")->get();
        $logo_data = logo::where("id", 1)->select("image")->first();
        $courser_data = course::all();
        $seminar_data = seminar::all();
        $imgseminar_data = imgseminar::where("id", 3)->select("image")->first();

        

       
        return view('frontend.index',compact('data','logo_data','courser_data','seminar_data','imgseminar_data'));
    }

}
