<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Race;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pets = Pet::paginate(4);
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
        return view('home', compact('pets'));
    }
}
