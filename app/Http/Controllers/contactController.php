<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class contactController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact');
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
        $contact = new Contact();
        $contact->Naam=$request->input('Naam');
        $contact->Email=$request->input('Email');
        $contact->Bericht=$request->input('Bericht');

        $contact->save();
        return redirect()->route('contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
