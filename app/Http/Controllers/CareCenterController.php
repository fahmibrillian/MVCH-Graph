<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareCenterController extends Controller
{
    public function index()
    {
        $care = \App\CareCenter::get();
        $workUnit = \App\WorkUnit::get();
        // dd($data);
        return view('pages.care-center.index', compact(
            'care',
            'workUnit'
        ));
        // $data['care'] = \App\CareCenter::with('workUnit')->get();
        // return view('pages.care-center.index', $data);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'CareCenterName' => 'required|string',
            'WorkUnitId' => 'required'
        ], [
            'CareCenterName.required' => 'Care center name must be fill',
            'CareCenterName.string' => 'Care center name must be string',
            'WorkUnitId.required' => 'Work unit must fill'
        ]);

        $careCenter = \App\CareCenter::create([
            'CareCenterName' => $request->CareCenterName
        ]);

        $workUnit = \App\WorkUnit::find($request->WorkUnitId);
        $careCenter->workUnit()->save($workUnit);


        return redirect('/carecenter')->with('success', 'Data has been added.');
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
            'CareCenterName' => 'required|string',
            'WorkUnitId' => 'required'
        ], [
            'CareCenterName.required' => 'Care center name must be fill',
            'CareCenterName.string' => 'Care center name must be string',
            'WorkUnitId.required' => 'Work unit must fill'
        ]);

        $careCenter = \App\CareCenter::find($id);

        $careCenter->update([
            'CareCenterName' => $request->CareCenterName
        ]);

        $workUnit = \App\WorkUnit::find($request->WorkUnitId);
        $careCenter->workUnit()->save($workUnit);


        return redirect('/carecenter')->with('success', 'Data has been added.');
    }

    public function destroy($id)
    {
        $careCenter = \App\CareCenter::find($id);

        $careCenter->delete();


        return redirect('/carecenter');
    }
}
