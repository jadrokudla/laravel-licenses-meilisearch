<?php

namespace App\Http\Controllers;

use App\Models\Kontakt;
use Illuminate\Http\Request;

class KontaktyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontakty = Kontakt::all();
        return view('zoznam_kontaktov', compact('kontakty'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // This method can be used to show a form for creating a new contact
        return view('create_kontakt');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'meno' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone_cislo' => 'required|string|max:20',
            'description' => 'nullable|string|max:500',
        ]);

        Kontakt::create($request->all());

        return redirect()->route('zoznam_kontaktov')->with('success', 'Kontakt bol úspešne pridaný.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
