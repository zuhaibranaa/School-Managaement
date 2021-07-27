<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admission;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $values = Admission::all();
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
        $Admission = new Admission();
        $Admission->Name = $request;
        $Admission->Phone = $request;
        $Admission->Email = $request;
        $Admission->City = $request;
        $Admission->Education = $request;
        $Admission->Status = 2;
        $Admission->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Admission = Admission::find($id);
        return $Admission;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Admission = Admission::find($id);
        return $Admission;
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
        $Admission = Admission::find($id);
        $Admission->Name = $request;
        $Admission->Phone = $request;
        $Admission->Email = $request;
        $Admission->City = $request;
        $Admission->Education = $request;
        $Admission->Status = 2;
        $Admission->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $values = Admission::find($id);
        $values->delete();
    }
}
