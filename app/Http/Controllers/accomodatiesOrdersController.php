<?php

namespace App\Http\Controllers;

use App\Models\accombestellijn;
use App\Models\accomodatiesOrders;
use App\Models\bestellijn;
use App\Models\bestellingen;
use Illuminate\Http\Request;
use App\Models\accombestellijnController;

class accomodatiesOrdersController extends Controller
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
        $bestelling = new accomodatiesOrders();
        $bestelling->Naam = $request->input('Naam');
        $bestelling->Telefoonnummer = $request->input('Telefoonnummer');
        $bestelling->Email = $request->input('Email');
        $bestelling->Datum = $request->input('Datum');
        $bestelling->save();

        // Door de ticket lopen
                $accBestel = new accombestellijn();
                $accBestel->BestelId = $bestelling->id;
                $accBestel->AccomodatieId =  $request->input('AccomodatiesId');
                $accBestel->save();
            
        return redirect()->route('accomodaties');
    }

    /**
     * Display the specified resource.
     */
    public function show(AccomodatiesOrders $accomodatiesOrders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AccomodatiesOrders $accomodatiesOrders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AccomodatiesOrders $accomodatiesOrders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AccomodatiesOrders $accomodatiesOrders)
    {
        //
    }
}
