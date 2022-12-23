<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnoseController extends Controller
{
    // SHOW LIST DIAGNOSIS
    public function index()
    {
        $data['diagnosis'] = \App\Diagnosis::get();
        // dd($data);
        return view('pages.diagnose.index', $data);
    }

    // SHOW LIST DIAGNOSE PATIENT
    public function diagnose()
    {
        $diagnose = \App\Diagnose::get();
        $patient = \App\Patient::get();
        $physician = \App\Physician::get();
        $diagnosis = \App\Diagnosis::get();
        // dd($diagnose);
        return view('pages.diagnose.diagnose', compact(
            'diagnose',
            'patient',
            'physician',
            'diagnosis'
        ));
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
            'DiagnosisCode' => 'required|string',
            'DiagnosisName' => 'required|string'
        ], [
            'DiagnosisCode.required' => 'Diagnosis code must be fill',
            'DiagnosisCode.string' => 'Diagnosis code must be string',
            'DiagnosisName.required' => 'Diagnosis name must fill',
            'DiagnosisName.string' => 'Diagnosis name must be string'
        ]);

        //Add Diagnosis to Database
        $diagnosis = \App\Diagnosis::create([
            'DiagnosisCode' => $request->DiagnosisCode,
            'DiagnosisName' => $request->DiagnosisName
        ]);

        // dd($diagnosis);

        return redirect('/diagnosis')->with('success', 'Data has been added.');
    }

    public function addDiagnose(Request $request){
        $request->validate([
            'PhisicianID' => 'required',
            'MRN' => 'required',
            'DiagnosisId' => 'required',
            'Time' => 'required',
            'Description' => 'required|string'
        ], [
            'PhisicianID.required' => 'Physician must be fill',
            'MRN.required' => 'Patient must be fill',
            'DiagnosisId.required' => 'Diagnosis must be fill',
            'Time.required' => 'Time must be fill',
            'Description.required' => 'Description must be fill',
            'Description.string' => 'Description must be string'
        ]);

        $diagnose = \App\Diagnose::create([
            'Time' => $request->Time,
            'Description' => $request->Description
        ]);

        $physician = \App\Physician::find($request->PhisicianID);
        $physician->diagnose()->save($diagnose);

        $patient = \App\Patient::find($request->MRN);

        $diagnosis = \App\Diagnosis::find($request->DiagnosisId);
        $diagnose->diagnosis()->save($diagnosis);

        // dd($diagnosis);

        return redirect('/diagnose')->with('success', 'Data has been added.');
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
            'DiagnosisCode' => 'required|string',
            'DiagnosisName' => 'required|string'
        ], [
            'DiagnosisCode.required' => 'Diagnosis code must be fill',
            'DiagnosisCode.string' => 'Diagnosis code must be string',
            'DiagnosisName.required' => 'Diagnosis name must fill',
            'DiagnosisName.string' => 'Diagnosis name must be string'
        ]);

        // Find Data by Id
        $diagnosis = \App\Diagnosis::find($id);

        // Update Data
        $diagnosis->update([
            'DiagnosisCode' => $request->DiagnosisCode,
            'DiagnosisName' => $request->DiagnosisName
        ]);

        // dd($diagnosis);

        return redirect('/diagnosis')->with('success', 'Data has been added.');
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
        $diagnosis = \App\Diagnosis::find($id);

        // Delete Data
        $diagnosis->delete();

        // dd($diagnosis);

        return redirect('/diagnosis');
    }
}
