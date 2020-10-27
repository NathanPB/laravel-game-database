<?php

namespace App\Http\Controllers;

use App\Models\ProjectState;
use Illuminate\Http\Request;

class ProjectStateController extends Controller
{
    public function index() {
        return view('ProjectState/index', ['states' => ProjectState::all()]);
    }

    public function create() {
        return view('ProjectState/create');
    }

    public function store(Request $request) {
        ProjectState::create($request->all());
        return redirect('state');
    }
}
