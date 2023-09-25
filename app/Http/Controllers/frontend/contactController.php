<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\banner;
use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{

    public function store(Request $request)
    {
       
        $data = new contact();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->save();

        return redirect('http://127.0.0.1:8000/')->with('successinsert','Banner insert succesfully done!');
    }
}
