<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $values = Event::all();
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
        $Event = new Event();
        if($request->hasFile('image')) {
            $images = $request->file('image');
            $path = $images->getClientOriginalName();
            $name = time() . '-' . $path;
            $images->storeAs('/public/images', $name);
            $Event->image = $name;
          }
        $Event->name = $request;
        $Event->start_date = $request;
        $Event->Location = $request;
        $Event->Status = 2;
        $Event->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Event = Event::find($id);
        return $Event;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Event = Event::find($id);
        return $Event;
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
        $Event = Event::find($id);
        if($request->hasFile('image')) {
            $images = $request->file('image');
            $path = $images->getClientOriginalName();
            $name = time() . '-' . $path;
            $images->storeAs('/public/images', $name);
            $Event->image = $name;
          }
        $Event->name = $request;
        $Event->start_date = $request;
        $Event->Location = $request;
        $Event->Status = 2;
        $Event->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $values = Event::find($id);
        $values->delete();
    }
}
