<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index(){
        return view('modal.departmentModal');
    }
    public function store(Request $request){

        Department::create([
            'name' => $request->department,
            ]);

            return back();

    }

}
