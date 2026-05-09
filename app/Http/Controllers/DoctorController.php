<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return Doctor::with('specialist')->get();
    }

    public function store(Request $request)
    {
        return Doctor::create($request->all());
    }

    public function show($id)
    {
        return Doctor::with('specialist')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $data = Doctor::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id)
    {
        return Doctor::destroy($id);
    }
}