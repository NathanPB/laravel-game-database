<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    public function index(Request $request) {
        $filtro = $request->get('filtro');
        if ($filtro) {
            $orgs = Organization::where('name', 'like', "%$filtro%")
                ->orderBy('name')
                ->paginate(5);
        } else {
            $orgs = Organization::orderBy('name')->paginate(5);
        }
        return view('Organization/index', ['orgs' => $orgs]);
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
