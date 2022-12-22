<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $data['patients'] = \App\Patient::with('person')->get();
        return view('pages.patient.index',$data);
    }

    public function create()
    {
        return view('pages.patient.form');
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
