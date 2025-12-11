<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skin;

class SkinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skins = Skin::all();

        // esto es para verificar si la solicitud viene del panel admin
        if (request()->is('skins') || request()->is('skins/*')) {
            return view('skins.index', compact('skins'));
        }

        return view('wiki.index', compact('skins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'rareza' => 'required|in:Común,Raro,Épico,Legendaria',
            'temporada' => 'required|string|max:255',
            'fecha_lanzamiento' => 'required|date',
            'imagen' => 'required|string|max:255',
            'tipo' => 'required|in:skin,los_siete'
        ]);

        Skin::create($request->all());

        return redirect()->route('skins.index')->with('success', 'Skin creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $skin = Skin::findOrFail($id);
        return view('skins.show', compact('skin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $skin = Skin::findOrFail($id);
        return view('skins.edit', compact('skin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $skin = Skin::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'rareza' => 'required|in:Común,Raro,Épico,Legendaria',
            'temporada' => 'required|string|max:255',
            'fecha_lanzamiento' => 'required|date',
            'imagen' => 'required|string|max:255',
            'tipo' => 'required|in:skin,los_siete'
        ]);

        $skin->update($request->all());

        return redirect()->route('skins.index')->with('success', 'Skin actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skin = Skin::findOrFail($id);
        $skin->delete();

        return redirect()->route('skins.index')->with('success', 'Skin eliminada exitosamente.');
    }
}
