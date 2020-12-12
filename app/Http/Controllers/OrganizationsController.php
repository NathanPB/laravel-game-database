<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    public function index() {
        return view('Organization/index', ['orgs' => Organization::all()]);
    }

    public function create() {
        return view('Organization/create');
    }

    public function store(Request $request) {
        Organization::create($request->all());
        return redirect('organization');
    }
}
