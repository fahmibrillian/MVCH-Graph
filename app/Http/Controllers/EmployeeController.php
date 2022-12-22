<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $data['employee'] = \App\Employee::with('staff.workUnit','nurse.careCenter.workUnit','technician.workUnit','person')->get();
        return view('pages.employee.index', $data);
    }

    public function create()
    {
        return view('pages.employee.form');
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
