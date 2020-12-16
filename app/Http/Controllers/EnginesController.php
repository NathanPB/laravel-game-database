<?php

namespace App\Http\Controllers;

use App\Models\GameEngine;
use App\Models\GameEngineLang;
use Illuminate\Http\Request;

class EnginesController extends Controller
{

    public function index(Request $request) {
        $filtro = $request->get('filtro');
        if ($filtro) {
            $engines = GameEngine::where('name', 'like', "%$filtro%")
                    ->orderBy('name')
                    ->paginate(5)
                    ->setPath("atores?filtro=$filtro");
        } else {
            $engines = GameEngine::orderBy('name')->paginate(5);
        }
        return view('GameEngine/index', ['engines' => $engines]);
    }

    public function create() {
        return view('GameEngine/create');
    }

    public function store(Request $request) {
        $engine = GameEngine::create([
            'name' => $request->get('name'),
            'release_year' => $request->get('release_year'),
            'license' => $request->get('license'),
        ]);

        $langs = $request->langs;
        var_dump($langs);
        foreach ($langs as $key) {
            GameEngineLang::create([ 'engine_id' => $engine->id, 'lang_id' => $key ]);
        }

        return redirect()->route('engines');
    }

    public function destroy(Request $request) {
        GameEngine::find($request->get('id'))->delete();
        return redirect()->route('engine');
    }
}
