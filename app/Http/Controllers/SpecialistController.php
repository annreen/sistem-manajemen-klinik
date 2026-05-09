<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Specialist;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    public function index()
    {
        return Specialist::all();
    }

    public function store(Request $request)
    {
        return Specialist::create($request->all());
    }

    public function show($id)
    {
        return Specialist::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $data = Specialist::findOrFail($id);
        $data->update($request->all());
        return $data;
    }

    public function destroy($id)
    {
        return Specialist::destroy($id);
    }
}