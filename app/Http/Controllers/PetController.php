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
        $pets = Pet::paginate();
        // $pets = Pet::with('race')->get();
        // dd($pets);
        // $petId = 1;
        // $pet = Pet::with('name')->find($petId);
        // dd($pet);
        // $pet = Pet::with('race')->find($pets);
        // dd($pet->race->name);
        // foreach ($pets as $pet) {
        
            // echo $raceName, '<br>';
        // }
        return view('admin/dashboard', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $races = Race::all(); // Obtén todos los registros necesarios!!
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
        dd('hola');
        $data = [
            'name' => $data['name'],
            'race_id' => $data['raza'],
            'category_id' => $data['categoria'],
            'photo' => null,
            'gender_id' => $data['genero'],
        ];
        $Pet = Pet::create($data);
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
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
