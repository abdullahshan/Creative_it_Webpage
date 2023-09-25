<?php

namespace App\Http\Controllers\backend;

use App\Models\registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\contactMail;
use Illuminate\Support\Facades\Mail;

class registrationController extends Controller
{
    public function registration(Request $request){

        $contactMail = registration::create([

            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,

        ]);

        Mail::to("mdabdullah559987@gmail.com")->queue(new contactMail($contactMail));

        return back()->with("success","Categories insert successfully Done!");

    }
}
