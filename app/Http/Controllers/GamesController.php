<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\GameToLang;
use App\Models\GameToOrg;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index() {
        $games = Game::all();
        return view('Game/index', ['games' => $games]);
    }

    public function create() {
        return view('Game/create');
    }

    public function store(Request $request) {
        $game = Game::create([
            'name' => $request->get('name'),
            'release_year' => $request->get('release_year'),
            'project_state_id' => $request->get('project_state'),
            'engine_id' => $request->get('engine'),
            'genre_id' => $request->get('genre'),
            'license' => $request->get('license')
        ]);

        $orgs = $request->orgs;
        if ($orgs) {
            foreach ($orgs as $key) {
                GameToOrg::create(['game_id' => $game->id, 'organization_id' => $key]);
            }
        }

        $langs = $request->langs;
        if ($langs) {
            foreach ($langs as $key) {
                GameToLang::create(['game_id' => $game->id, 'programming_lang_id' => $key]);
            }
        }

        return redirect()->route('games');
    }



    public function destroy(Request $request) {
        Game::find($request->get('id'))->delete();
        return redirect()->route('games');
    }
}
