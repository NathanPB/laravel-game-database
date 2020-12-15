<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    public function index() {
        return view('Organization/index', ['orgs' => Organization::orderBy('name')->paginate(5)]);
    }

    public function create() {
        return view('Organization/create');
    }

    public function store(Request $request) {
        Organization::create($request->all());
        return redirect('organization');
    }



    public function destroy(Request $request) {
        Organization::find($request->get('id'))->delete();
        return redirect('organization');
    }
}
