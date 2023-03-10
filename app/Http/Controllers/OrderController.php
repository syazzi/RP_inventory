<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $departments = Department::get();
        return view('AddEditForm.index',[
            'departments' => $departments,
        ]);
    }
}
