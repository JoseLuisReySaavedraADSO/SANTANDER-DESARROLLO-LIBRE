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

    public function indexdogs()
    {
        $dogs = Pet::where('categorie_id', 1)->get();

        // VIEW HOME DOGS
        return view('home.dogs', compact('dogs'));
    }

    public function indexcats()
    {
        $pets = Pet::where('categorie_id', 2)->get();

        // VIEW HOME CATS
        return view('home.cats', compact('pets'));
    }

    public function indexdetails($id)
    {
        $pet = Pet::findOrFail($id);
        return view('home.details.detailsView', compact('pet'));
    }
}
