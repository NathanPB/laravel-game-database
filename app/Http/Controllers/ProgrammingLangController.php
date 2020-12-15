<?php

namespace App\Http\Controllers;

use App\Models\GameGenre;
use App\Models\ProgrammingLang;
use Illuminate\Http\Request;

class ProgrammingLangController extends Controller
{
    public function index() {
        return view('ProgrammingLang/index', ['langs' => ProgrammingLang::orderBy('name')->paginate(5)]);
    }

    public function create() {
        return view('ProgrammingLang/create');
    }

    public function store(Request $request) {
        ProgrammingLang::create($request->all());
        return redirect('lang');
    }

    public function destroy(Request $request) {
        ProgrammingLang::find($request->get('id'))->delete();
        return redirect('lang');
    }
}
