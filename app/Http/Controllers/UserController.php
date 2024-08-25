<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = User::where('role','admin')->get();
        $clients = User::where('role','peserta')->get();
        return view('./pages/users') ->with([
            'admins' => $admins,
            'clients' => $clients,
        ]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = User::findOrFail($id);
        return response()->json($client);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = User::findOrFail($id);
        $client->update($request->all());

        return redirect()->back()->with('success', 'Client updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::where('id', $id)->get();
        // if ($user->profile_image) {
        //     Storage::delete($user->profile_image);
        // }
        if($user->delete()){
            return redirect()->back()->with('success', 'Sukses delete akun.');
        }
    }
}