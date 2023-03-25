<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index() {
        $companies = Company::orderBy('name')->get();

        return inertia('company/Index', compact('companies'));
    }

    public function create() {
        return inertia('company/Create');
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'address'=>'required',
            'net_worth'=>'required',
        ]);

        Company::create([
            'name' => $request->name,
            'type' => $request->type,
            'address' => $request->address,
            'net_worth' => $request->net_worth,
        ]);

        return redirect('/companies')->with('messafe','A new company has been created.');
    }

    public function edit(Company $company) {
        return inertia('company/Edit', [
            'company' => $company
        ]);
    }

    public function update(Request $request, Company $company) {
        $fields = $request->validate([
            'name'=>'required',
            'type'=>'required',
            'address'=>'required',
            'net_worth'=>'required'
        ]);

        $company->update($fields);

        return redirect('/companies');
    }
}
