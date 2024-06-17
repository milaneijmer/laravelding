<?php

namespace App\Http\Controllers;

use App\Models\Attracties;
use Illuminate\Http\Request;

class AttractiesController extends Controller
{
    public function manage()
    {
        $attracties = Attracties::all();
        return view('attractieManage', compact('attracties'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attracties = Attracties::all();
        return view('attracties', ['attracties' => $attracties]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'naam' => 'required',
            'beschrijving' => 'required',
            'fotopad' => 'required|image',
            'lengte' => 'required|numeric',
            'snelheid' => 'required|numeric',
            'gkracht' => 'required|numeric',
        ]);

        $fotopad = $request->file('fotopad')->store('images');

        Attracties::create([
            'naam' => $request->naam,
            'beschrijving' => $request->beschrijving,
            'fotopad' => $fotopad,
            'lengte' => $request->lengte,
            'snelheid' => $request->snelheid,
            'gkracht' => $request->gkracht,
        ]);

        return redirect()->route('attractieManage');
    }


    /**
     * Display the specified resource.
     */
    public function show(Attracties $attracties)
    {
        return view('attractieDetail', ['attractie' => $attracties]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attracties $attracties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attracties $attracties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attracties $attractie)
    {
        $attractie->delete();
        return redirect()->route('attractieManage');
    }
}
