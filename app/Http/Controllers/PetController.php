<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePetRequest;
use App\Models\Categorie;
use App\Models\Gender;
use App\Models\Race;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets = Pet::all();
        return view('admin/dashboard', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $races = Race::all();
        $genders = Gender::all();
        $categories = Categorie::all();
        // dd($genders);
        return view('admin/add', compact('races', 'genders', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetRequest $data)
    {
        // dd($data['name']);
        $data = [
            'name' => $data['name'],
            'race_id' => $data['raza'],
            'categorie_id' => $data['categoria'],
            'photo' => 'images-frontEnd/ivana.png',
            'gender_id' => $data['genero'],
        ];
        // dd($Pet = Pet::create($data));
        $Pet = Pet::create($data);
        return redirect()->route('dashboard')->with('success', 'Mascota agregada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pet = Pet::findOrFail($id);

        // Pasar la mascota a la vista "show"
        return view('admin/show', compact('pet'));
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
    public function destroy($id)
    {
        // Buscar la mascota por su ID
        $pet = Pet::findOrFail($id);

        // Eliminar la mascota
        $pet->delete();

        return redirect()->route('dashboard')->with('success', 'Mascota eliminada exitosamente');
        
    }
}
