<?php

namespace App\Http\Controllers;

use App\Models\bestellijn;
use App\Models\bestellingen;
use Illuminate\Http\Request;

class bestellingenController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // gegevens van het formulier
        $request->validate([
            'Naam' => 'required',
            'Email' => 'required|email',
            'Telefoonnummer' => 'required',
            'tickets' => 'required|array',
            'tickets.*' => 'nullable|integer|min:0'
        ]);
    
        if (collect($request->tickets)->sum() < 1) {
            return back()->withErrors(['tickets' => 'Selecteer minimaal 1 ticket.']);
        }
    
        $bestelling = new Bestellingen();
        $bestelling->Naam = $request->Naam;
        $bestelling->Telefoonnummer = $request->Telefoonnummer;
        $bestelling->Email = $request->Email;
        $bestelling->save();

        // Door de ticket lopen
        foreach ($request->input('tickets') as $ticketId => $aantal) {
            if ($aantal !== null) {
                $bestellijn = new bestellijn();
                $bestellijn->BestelId = $bestelling->id;
                $bestellijn->TicketId = $ticketId;
                $bestellijn->Aantal = $aantal;
                $bestellijn->save();
            }
        }
        return redirect()->route('tickets')->with('success', 'Bestelling succesvol.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bestellingen $bestellingen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bestellingen $bestellingen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bestellingen $bestellingen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bestellingen $bestellingen)
    {
        //
    }
}
