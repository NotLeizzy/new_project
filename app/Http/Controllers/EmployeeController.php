<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    //display
    public function index()
    
    {
        $employee = Employee::all();
        return view ('employees.index', ['items' => $employee]);
    }
    //insert
    public function store(Request $request)
    {
       Employee::create([
        'FirstName' => $request->FirstName123,
        'LastName' => $request->LastName123,
        'Job' => $request->Job123,
        'Salary' => $request->Salary123,
       ]);

    return redirect('/employees');
    }
    
}
