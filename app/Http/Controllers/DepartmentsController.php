<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
class DepartmentsController extends Controller
{
    public function index(){
        $departments=Department::paginate(25);
        return view('admin.departments.index',compact('departments'));
    }

    public function create(){
        return view('admin.departments.create');
    }

    public function edit(Department $department){
        return view('admin.departments.edit',compact('department'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        Department::create($request->all());
        return redirect()->route('admin.departments');
    }

    public function update(Request $request,Department $department){
        $request->validate([
            'name'=>'required'
        ]);
        $department->update([
            'name'=>$request->name
        ]);
        return redirect()->route('admin.departments');
    }

    public function destroy(Department $department){
        $department->delete();
        return redirect()->route('admin.departments');
    }
}
