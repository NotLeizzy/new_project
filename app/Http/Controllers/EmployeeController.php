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
    
    //update
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        
        $employee->FirstName = $request->FirstName;
        $employee->LastName = $request->LastName;
        $employee->Job = $request->Job;
        $employee->Salary = $request->Salary;
        $employee->save();  
    }

    //delete
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();    
    }

}