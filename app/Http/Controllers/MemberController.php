<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Company;

class MemberController extends Controller
{
    public function index(){
        $members = Member::orderBy('last_name')
            ->with('company')
            ->get();
        $companies = Company::orderBy('name')->get();

        return inertia('member/Index', [
            'members' => $members,
            'companies' =>$companies
        ]);
    }

    public function create() {
        return inertia('member/Create', [
            'members' =>Member::orderBy('last_name')->with('company')->get(),
            'companies' =>Company::orderBy('name')->get()
        ]);
    }

    public function store(Request $request){
        $fields = $request->validate([
            'last_name'=>'string|required',
            'first_name'=>'string|required',
            'designation'=>'string|required',
            'company_id'=>'numeric|required',
        ]);

        Member::create($fields);

        return redirect('/members');
    }

    public function edit(Member $member) {
        return inertia('member/Edit', [
            'member' => $member,
            'companies' => Company::orderBy('name')->get()
        ]);
    }

    public function update(Request $request, Member $member) {
        $fields = $request->validate([
            'last_name'=>'required',
            'first_name'=>'required',
            'designation'=>'required',
            'company_id'=>'numeric|required',
        ]);

        $member->update($fields);

        return redirect('/members');
    }

}
