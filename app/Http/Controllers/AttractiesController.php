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

    public function index()
    {
        $attracties = Attracties::all();
        return view('attracties', ['attracties' => $attracties]);
    }

    public function create()
    {
        //
    }

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
        $fotopad = 'storage/app/' . $fotopad;
        $dbFotopad = str_replace('/', '\\', $fotopad);

        Attracties::create([
            'naam' => $request->naam,
            'beschrijving' => $request->beschrijving,
            'fotopad' => $dbFotopad,
            'lengte' => $request->lengte,
            'snelheid' => $request->snelheid,
            'gkracht' => $request->gkracht,
        ]);

        return redirect()->route('attracties.manage');
    }

    public function show(Attracties $attracties)
    {
        return view('attractieDetail', ['attractie' => $attracties]);
    }

    public function edit(Attracties $attracties)
    {
        //
    }

    public function update(Request $request, Attracties $attracties)
    {
        //
    }

    public function destroy(Attracties $attractie)
    {
        $attractie->delete();
        return redirect()->route('attracties.manage');
    }
}
