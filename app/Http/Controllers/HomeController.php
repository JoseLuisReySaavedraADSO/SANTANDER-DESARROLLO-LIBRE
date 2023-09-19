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
        $dogs = Pet::where('categorie_id', 1)->get();
        return view('home', compact('dogs'));
    }

    public function indexcats()
    {
        $pets = Pet::where('categorie_id', 2)->get();
        return view('homecats', compact('pets'));
    }
}
