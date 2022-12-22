<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkUnitController extends Controller
{
    // SHOW LIST WORK UNIT
    public function index()
    {
        $data['work'] = \App\WorkUnit::get();
        // dd($data);
        return view('pages.work-unit.index', $data);
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
            'WorkUnitName' => 'required|string',
            'LocationFacility' => 'required|string',
            'LocationFloor' => 'required|numeric'
        ], [
            'WorkUnitName.required' => 'Work unit name must be fill',
            'WorkUnitName.string' => 'Work unit name must be string',
            'LocationFacility.required' => 'Location facility must fill',
            'LocationFacility.string' => 'Location facility must be string',
            'LocationFloor.required' => 'Location floor must be fill',
            'LocationFloor.numeric' => 'Location floor must be numeric'
        ]);

        //Add Work Unit to Database
        $workUnit = \App\WorkUnit::create([
            'WorkUnitName' => $request->WorkUnitName,
            'LocationFacility' => $request->LocationFacility,
            'LocationFloor' => $request->LocationFloor
        ]);

        // dd($workUnit);

        return redirect('/workunit')->with('sukses', 'Data has been added.');
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
            'WorkUnitName' => 'required|string',
            'LocationFacility' => 'required|string',
            'LocationFloor' => 'required|numeric'
        ], [
            'WorkUnitName.required' => 'Work unit name must be fill',
            'WorkUnitName.string' => 'Work unit name must be string',
            'LocationFacility.required' => 'Location facility must fill',
            'LocationFacility.string' => 'Location facility must be string',
            'LocationFloor.required' => 'Location floor must be fill',
            'LocationFloor.numeric' => 'Location floor must be numeric'
        ]);

        // Find Data by Id
        $workUnit = \App\WorkUnit::find($id);

        // Update Data
        $workUnit->update([
            'WorkUnitName' => $request->WorkUnitName,
            'LocationFacility' => $request->LocationFacility,
            'LocationFloor' => $request->LocationFloor
        ]);

        // dd($workUnit);

        return redirect('/workunit')->with('sukses', 'Data has been added.');
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
        $workUnit = \App\WorkUnit::find($id);

        // Delete Data
        $workUnit->delete();

        // dd($workUnit);

        return redirect('/workunit');
    }
}
