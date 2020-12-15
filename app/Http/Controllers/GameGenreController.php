<?php

namespace App\Http\Controllers;

use App\Models\GameGenre;
use Illuminate\Http\Request;

class GameGenreController extends Controller
{
    public function index() {
        return view('GameGenre/index', ['genres' => GameGenre::orderBy('name')->paginate(5)]);
    }

    public function create() {
        return view('GameGenre/create');
    }

    public function store(Request $request) {
        GameGenre::create($request->all());
        return redirect('genre');
    }

    public function destroy(Request $request) {
        GameGenre::find($request->get('id'))->delete();
        return redirect('genre');
    }
}
