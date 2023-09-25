<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\course;
use Illuminate\Http\Request;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('backend.course.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.course.create');
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
        $file_s = $request->file('image_s');

      if($file . $file_s){

        $fileName = 'course_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file_sName = 'course_' . uniqid(). '.' . $file_s->getClientOriginalExtension();

       $file->move(public_path('storage/course/'), $fileName);
       $file_s->move(public_path('storage/course'),$file_sName);

       $data = new course();
       $data->title = $request->title;
       $data->name = $request->name;
       $data->class = $request->class;
       $data->time = $request->time;
       $data->image = $fileName;
       $data->name_s = $request->name_s;
       $data->class_s = $request->class_s;
       $data->time_s = $request->time_s;
       $data->image_s = $file_sName;
       $data->save();

       return back()->with('success','Course insert succesfully done!');
        
        
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
