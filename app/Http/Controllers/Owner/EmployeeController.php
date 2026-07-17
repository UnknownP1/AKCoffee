<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\User; // Gunakan Model User
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index()
    {
        // Hanya ambil user dengan role 'admin'
        $employees = User::where('role', 'admin')->orderBy('id', 'desc')->get();
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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users', // Ubah unique ke users
            'password' => 'required|string|min:8',
        ]);

        $validated['role'] = 'admin'; // Paksa role admin
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('owner.employees.index')->with('success', 'Karyawan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $employee = User::where('role', 'admin')->findOrFail($id);
        return Inertia::render('Owner/Employees/Edit', [
            'employee' => $employee
        ]);
    }

    public function update(Request $request, $id)
    {
        $employee = User::where('role', 'admin')->findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $validated['role'] = 'admin';

        $employee->update($validated);

        return redirect()->route('owner.employees.index')->with('success', 'Karyawan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $employee = User::where('role', 'admin')->findOrFail($id);
        $employee->delete();
        return redirect()->route('owner.employees.index')->with('success', 'Karyawan berhasil dihapus!');
    }
}