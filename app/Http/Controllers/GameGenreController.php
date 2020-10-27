<?php

namespace App\Http\Controllers;

use App\Models\GameGenre;
use Illuminate\Http\Request;

class GameGenreController extends Controller
{
    public function index() {
        return view('GameGenre/index', ['genres' => GameGenre::all()]);
    }

    public function create() {
        return view('GameGenre/create');
    }

    public function store(Request $request) {
        GameGenre::create($request->all());
        return redirect('genre');
    }
}
