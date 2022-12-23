<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function index()
    {
        // $data['visits'] = \App\Visit::with('patient')->get();
        $visits = \App\Visit::get();
        $patient = \App\Patient::get();
        $care = \App\CareCenter::get();
        $physician = \App\Physician::get();
        // dd($patient);
        return view('pages.visitation.index', compact(
            'visits',
            'patient',
            'care',
            'physician'
        ));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'MRN' => 'required',
            'CareCenterId' => 'required',
            'PhisicianID' => 'required',
            'VisitDate' => 'required',
            'VisitTime' => 'required'
        ], [
            'MRN.required' => 'Patient must be fill',
            'CareCenterId.required' => 'Care center must be fill',
            'PhisicianID.required' => 'Physician must be fill',
            'VisitDate.required' => 'Visit date must be fill',
            'VisitTime.required' => 'Visit time must be fill'
        ]);

        $visit = \App\Visit::create([
            'VisitDate' => $request->VisitDate,
            'VisitTime' => $request->VisitTime
        ]);

        $patient = \App\Patient::find($request->MRN);
        $patient->visit()->save($visit);

        $care = \App\CareCenter::find($request->CareCenterId);
        $visit->careCenter()->save($care);

        $physician = \App\Physician::find($request->PhisicianID);
        $physician->visit()->save($visit);

        // dd($patient);

        return redirect('/visit')->with('success', 'Data has been added.');
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
            'MRN' => 'required',
            'CareCenterId' => 'required',
            'PhisicianID' => 'required',
            'VisitDate' => 'required',
            'VisitTime' => 'required'
        ], [
            'MRN.required' => 'Patient must be fill',
            'CareCenterId.required' => 'Care center must be fill',
            'PhisicianID.required' => 'Physician must be fill',
            'VisitDate.required' => 'Visit date must be fill',
            'VisitTime.required' => 'Visit time must be fill'
        ]);

        $visit = \App\Visit::find($id);

        $visit->update([
            'VisitDate' => $request->VisitDate,
            'VisitTime' => $request->VisitTime
        ]);

        $patient = \App\Patient::find($request->MRN);
        $patient->visit()->save($visit);

        $care = \App\CareCenter::find($request->CareCenterId);
        $visit->careCenter()->save($care);

        $physician = \App\Physician::find($request->PhisicianID);
        $physician->visit()->save($visit);

        // dd($patient);

        return redirect('/visit')->with('success', 'Data has been added.');
    }

    public function destroy($id)
    {
    }
}
