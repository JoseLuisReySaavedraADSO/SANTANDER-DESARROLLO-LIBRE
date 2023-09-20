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

        // VIEW ADMIN DASHBOARD
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

        // VIEW ADMIN ADD
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
        // VIEW ADMIN SHOW
        return view('admin/show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Buscar la mascota por su ID
        $pet = Pet::findOrFail($id);

        // Obtener datos adicionales si es necesario
        $races = Race::all();
        $genders = Gender::all();
        $categories = Categorie::all();

        return view('admin/edit', compact('pet', 'races', 'genders', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePetRequest $data, $id)
    {
        // Buscar la mascota por su ID
        $pet = Pet::findOrFail($id);

        // Actualizar los campos de la mascota utilizando los valores del formulario
        $pet->name = $data->input('name');
        $pet->race_id = $data->input('raza');
        $pet->categorie_id = $data->input('categoria');
        $pet->gender_id = $data->input('genero');
        // Puedes actualizar otros campos aquí si es necesario

        // Guardar los cambios en la base de datos
        $pet->save();

        return redirect()->route('dashboard')->with('success', 'Mascota actualizada exitosamente');
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
