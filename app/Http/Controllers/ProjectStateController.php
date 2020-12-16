<?php

namespace App\Http\Controllers;

use App\Models\ProjectState;
use Illuminate\Http\Request;

class ProjectStateController extends Controller
{
    public function index(Request $request) {
        $filtro = $request->get('filtro');
        if ($filtro) {
            $states = ProjectState::where('name', 'like', "%$filtro%")
                ->orderBy('name')
                ->paginate(5);
        } else {
            $states = ProjectState::orderBy('name')->paginate(5);
        }
        return view('ProjectState/index', ['states' => $states]);
    }

    public function create() {
        return view('ProjectState/create');
    }

    public function store(Request $request) {
        ProjectState::create($request->all());
        return redirect('state');
    }

    public function destroy(Request $request) {
        ProjectState::find($request->get('id'))->delete();
        return redirect('state');
    }
}
