<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareCenterController extends Controller
{
    // SHOW LIST CARE CENTER
    public function index()
    {
        $care = \App\CareCenter::get();
        $workUnit = \App\WorkUnit::get();
        // dd($data);
        return view('pages.care-center.index', compact(
            'care',
            'workUnit'
        ));
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
        //Form Validation
        $request->validate([
            'CareCenterName' => 'required|string',
            'WorkUnitId' => 'required'
        ], [
            'CareCenterName.required' => 'Care center name must be fill',
            'CareCenterName.string' => 'Care center name must be string',
            'WorkUnitId.required' => 'Work unit must fill'
        ]);

        //Add Care to Database
        $careCenter = \App\CareCenter::create([
            'CareCenterName' => $request->CareCenterName
        ]);

        $workUnit = \App\WorkUnit::find($request->WorkUnitId);
        $careCenter->workUnit()->save($workUnit);

        // dd($workUnit);

        return redirect('/carecenter')->with('sukses', 'Data has been added.');
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
        //Form Validation
        $request->validate([
            'CareCenterName' => 'required|string',
            'WorkUnitId' => 'required'
        ], [
            'CareCenterName.required' => 'Care center name must be fill',
            'CareCenterName.string' => 'Care center name must be string',
            'WorkUnitId.required' => 'Work unit must fill'
        ]);

        // Find Data by Id
        $careCenter = \App\CareCenter::find($id);

        //Update Data
        $careCenter->update([
            'CareCenterName' => $request->CareCenterName
        ]);

        $workUnit = \App\WorkUnit::find($request->WorkUnitId);
        $careCenter->workUnit()->save($workUnit);

        // dd($workUnit);

        return redirect('/carecenter')->with('sukses', 'Data has been added.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find Data by Id
        $careCenter = \App\CareCenter::find($id);

        // Delete Data
        $careCenter->delete();

        // dd($workUnit);

        return redirect('/carecenter');
    }
}
