<?php

namespace App\Http\Controllers\backend;

use App\Events\postcreated;
use App\Events\postdeleted;
use App\Events\postupdeted;
use App\Models\post;
use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Exists;

class postController extends Controller
{
    public function create(){

        $categories = category::all();

      
        return view('backend.post', compact('categories'));

    }

    public function store(Request $request){

        
        $data = new post();

       $data->user_id	= Auth::user()->id;
       $data->title   = $request->title;
       $data->slug  = Str::slug($request->title);
       $data->description = $request->description;
       $data->save();


       
       $data->post_categories()->attach($request->categories);

       return back()->with("success","Categories insert successfully Done!");

    }


    //------------postCreated--------------//

    public function allpost(){

        $postdata = Cache('postdata', function () {
            return post::with('post_categories','user')->orderBy('created_at', 'desc')->take(5)->get();
        });

        return view('backend.allpost',compact('postdata'));
    }

     /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => postcreated::class,
        'updated' => postupdeted::class,
        'deleted' => postdeleted::class,
    ];
}
