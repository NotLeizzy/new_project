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
        'FirstName' => $request->FirstName,
        'LastName' => $request->LastName,
        'Job' => $request->Job,
        'Salary' => $request->Salary,
       ]);

    return redirect('/employees');
    }
    
}
