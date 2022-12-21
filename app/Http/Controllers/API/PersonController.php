<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Person;

class PersonController extends Controller
{
    public function index()
    {
        $data['persons'] = \App\Person::get();
        return response()->json($data);
    }

    public function show($ssn)
    {
        $data['person'] = \App\Person::where('SSN', $ssn)->first();
        return response()->json($data);
    }
}
