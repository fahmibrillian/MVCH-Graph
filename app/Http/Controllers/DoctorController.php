<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $data['physicians'] = \App\Physician::with('person')->get();
        return view('pages.doctor.index', $data);
    }

    public function create()
    {
        return view('pages.doctor.form');
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
