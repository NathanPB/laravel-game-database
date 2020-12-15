<?php

namespace App\Http\Controllers;

use App\Models\ProjectState;
use Illuminate\Http\Request;

class ProjectStateController extends Controller
{
    public function index() {
        return view('ProjectState/index', ['states' => ProjectState::orderBy('name')->paginate(5)]);
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
