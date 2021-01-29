<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;


class MembersController extends Controller
{
    public function index(){
        $members = Member::latest()->paginate(2);
        return view('members.index', compact('members'));
    }
    public function create(){
        return view('members.create');
    }

    public function store(Request $request){
        $request->validate([
            'user_name'=> 'required',
            'first_name'=>'required',
            'email'=>'required',
            'fees'=>'required',
        ]);
        Member::create($request->all());

        return redirect()->route('members.index')->with('success', 'profile created succesfully!!');
    }

    public function show(Member $member){
        return view('members.show', compact('member'));
    }



    public function edit(Member $member){
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'user_name'=> 'required',
            'first_name'=>'required',
            'email'=>'required',
        ]);
        $members = $request -> all();
        Member::find($id) -> update($members);

        return redirect()->route('members.index')->with('success', 'profile Updated succesfully!!');


    }
    public function destroy($members){
        Member::destroy($members);
        return redirect()->route('members.index')->with('success', 'profile Deleted succesfully!!');
    }
}
