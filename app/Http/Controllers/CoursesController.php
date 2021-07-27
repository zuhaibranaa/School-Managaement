<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $values = Course::all();
        return $values;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course();
        if($request->hasFile('image')) {
            $images = $request->file('image');
            $path = $images->getClientOriginalName();
            $name = time() . '-' . $path;
            $images->storeAs('/public/images', $name);
            $course->image = $name;
          }
        $course->Course_Name = $request;
        $course->Category = $request;
        $course->Duration = $request;
        $course->Start_Date = $request;
        $course->End_Date = $request;
        $course->Total_Seats = $request;
        $course->Status_ID = $request;
        $course->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $values = Course::find($id);
        return $values;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $values = Course::find($id);
        return $values;
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
        $course = Course::find($id);
        if($request->hasFile('image')) {
            $images = $request->file('image');
            $path = $images->getClientOriginalName();
            $name = time() . '-' . $path;
            $images->storeAs('/public/images', $name);
            $course->image = $name;
          }
        $course->Course_Name = $request;
        $course->Category = $request;
        $course->Duration = $request;
        $course->Start_Date = $request;
        $course->End_Date = $request;
        $course->Total_Seats = $request;
        $course->Status_ID = $request;
        $course->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $values = Course::find($id);
        $values->delete();
    }
}
