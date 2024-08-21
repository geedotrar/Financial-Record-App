<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index',[
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Handle the logic to store a new user
        $this->validate($request,[
            'username'=>'required'
        ]);

        $user = User::create([
            'username' => $request->username,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('user.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Handle the logic to show the edit form
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Handle the logic to update the user
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Handle the logic to delete the user
    }
}
