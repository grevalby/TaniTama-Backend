<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function index()
    {
        $diseases = Disease::all();
       return response()->json(['data' => $diseases]);
       //return DiseaseResource::collection($disease);
    }

    public function show($id)
    {
        $disease = Disease::findOrFail($id);
        return response()->json($disease);
    }

    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }
 
    public function edit(Disease $disease)
    {
        //
    }

 
    public function update(Request $request, Disease $disease)
    {
        //
    }


    public function destroy(Disease $disease)
    {
        //
    }
}

