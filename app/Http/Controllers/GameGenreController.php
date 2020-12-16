<?php

namespace App\Http\Controllers;

use App\Models\GameEngine;
use App\Models\GameGenre;
use Illuminate\Http\Request;

class GameGenreController extends Controller
{
    public function index(Request $request) {
        $filtro = $request->get('filtro');
        if ($filtro) {
            $genres = GameEngine::where('name', 'like', "%$filtro%")
                ->orderBy('name')
                ->paginate(5);
        } else {
            $genres = GameGenre::orderBy('name')->paginate(5);
        }
        return view('GameGenre/index', ['genres' => $genres]);
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
