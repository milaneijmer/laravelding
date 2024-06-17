<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\Ticket;

class UsersController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = users::all();
        return view('inloggen', ['users' => $users]);
    }

    public function check(Request $request)
    {
        $users = users::all();
        $email = $request->input('Email');
        $wachtwoord = $request->input('Wachtwoord');
        foreach($users as $user){
            if($user->email == $email && $user->password == $wachtwoord){
                return view('index');
            }
            else
            {
                return view('inloggen');
            }
        }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(users $users)
    {
        //
    }
}
