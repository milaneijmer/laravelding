<?php

namespace App\Http\Controllers;

use App\Models\accomodaties;
use Illuminate\Http\Request;

class accomodatiesController extends Controller
{
    public function manage()
    {
        $accomodaties = accomodaties::all();
        return view('accomodatieManage', compact('accomodaties'));
    }
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accomodaties = accomodaties::all();
        return view('accomodaties', ['accomodaties' => $accomodaties]);
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
            'soort_kamer' => 'required',
            'beschrijving' => 'required',
            'fotopad' => 'required|image',
            'prijs' => 'required|numeric',
        ]);

        $fotopad = $request->file('fotopad')->store('images');
        $fotopad = 'storage/app/' . $fotopad;
        $dbFotopad = str_replace('/', '\\', $fotopad);

        accomodaties::create([
            'soort_kamer' => $request->soort_kamer,
            'beschrijving' => $request->beschrijving,
            'fotopad' => $dbFotopad,
            'prijs' => $request->prijs,
        ]);

        return redirect()->route('accomodaties.manage');
    }

    /**
     * Display the specified resource.
     */
    public function show(Accomodaties $accomodaties)
    {
        return view('acchuur', ['accomodaties' => $accomodaties]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accomodaties $accomodaties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accomodaties $accomodaties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(accomodaties $accomodatie)
    {
        $accomodatie->delete();
        return redirect()->route('accomodaties.manage');
    }

}
