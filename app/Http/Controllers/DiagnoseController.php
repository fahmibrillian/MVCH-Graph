<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnoseController extends Controller
{
    // SHOW LIST PATIENT'S DIAGNOSE
    public function index()
    {
        $data['diagnosis'] = \App\Diagnosis::get();
        // dd($data);
        return view('pages.diagnose.index', $data);
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
