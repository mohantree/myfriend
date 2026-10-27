<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'course' => 'required',
            'phone' => 'required',
        ]);

        Student::create($validated);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student saved successfully!');
    }

    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    public function edit($id)
{
    $student = Student::findOrFail($id);

    return view('students.edit', compact('student'));
}


public function update(Request $request, $id)
{
    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'course' => 'required',
        'phone' => 'required',
    ]);

    $student = Student::findOrFail($id);

    $student->update($validated);

    return redirect()
        ->route('students.index')
        ->with('success', 'Student updated successfully!');
}


public function destroy($id)
{
    $student = Student::findOrFail($id);

    $student->delete();

    return redirect()
        ->route('students.index')
        ->with('success', 'Student deleted successfully!');
}

}