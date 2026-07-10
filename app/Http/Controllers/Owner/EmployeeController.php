<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return Inertia::render('Owner/Employees/Index', [
            'employees' => $employees
        ]);
    }

    public function create()
    {
        return Inertia::render('Owner/Employees/Create');
    }

    public function store(Request $request)
    {
        Employee::create($request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees',
            'role' => 'required',
            'password' => 'required'
        ]));
        return redirect()->route('owner.employees.index');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return Inertia::render('Owner/Employees/Edit', [
            'employee' => $employee
        ]);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        return redirect()->route('owner.employees.index');
    }

    public function destroy($id)
    {
        Employee::destroy($id);
        return redirect()->route('owner.employees.index');
    }
}