<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkUnitController extends Controller
{
    public function index()
    {
        $data['work'] = \App\WorkUnit::get();
        return view('pages.work-unit.index', $data);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
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

        $workUnit = \App\WorkUnit::create([
            'WorkUnitName' => $request->WorkUnitName,
            'LocationFacility' => $request->LocationFacility,
            'LocationFloor' => $request->LocationFloor
        ]);

        return redirect('/workunit')->with('success', 'Data has been added.');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
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

        $workUnit = \App\WorkUnit::find($id);

        $workUnit->update([
            'WorkUnitName' => $request->WorkUnitName,
            'LocationFacility' => $request->LocationFacility,
            'LocationFloor' => $request->LocationFloor
        ]);


        return redirect('/workunit')->with('success', 'Data has been added.');
    }

    public function destroy($id)
    {
        $workUnit = \App\WorkUnit::find($id);

        $workUnit->delete();


        return redirect('/workunit');
    }
}
