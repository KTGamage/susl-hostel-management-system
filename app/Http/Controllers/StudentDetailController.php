<?php

namespace App\Http\Controllers;

use App\Models\StudentDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentDetailController extends Controller
{
    public function create()
    {
        // Check if admin is logged in
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login first.');
        }
        
        return view('student_details.create');
    }

    public function store(Request $request)
    {
        // Check if admin is logged in
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login first.');
        }

        try {
            $validated = $request->validate([
                'title' => 'required|in:Mr.,Mrs.,Rev.',
                'full_name' => 'required|string|max:255',
                'student_id' => 'required|string|unique:student_details,student_id',
                'faculty' => 'required|string|max:255',
                'telephone_number' => 'required|string|size:10',
                'first_year_hostel' => 'nullable|string|max:255',
                'first_year_payment_date' => 'nullable|date',
                'second_year_hostel' => 'nullable|string|max:255',
                'second_year_payment_date' => 'nullable|date',
                'third_year_hostel' => 'nullable|string|max:255',
                'third_year_payment_date' => 'nullable|date',
                'fourth_year_hostel' => 'nullable|string|max:255',
                'fourth_year_payment_date' => 'nullable|date',
                'guardian_name' => 'required|string|max:255',
                'guardian_telephone' => 'required|string|size:10',
                'residential_address' => 'required|string'
            ]);

            // Format payment dates
            $paymentDateFields = [
                'first_year_payment_date',
                'second_year_payment_date',
                'third_year_payment_date',
                'fourth_year_payment_date'
            ];

            foreach ($paymentDateFields as $field) {
                if (!empty($validated[$field])) {
                    $validated[$field] = date('Y-m-d', strtotime($validated[$field]));
                }
            }

            StudentDetail::create($validated);

            return redirect()->route('admin.dashboard')
                ->with('success', 'Student details added successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'An error occurred: ' . $e->getMessage())
                ->withInput();
        }
    }


    public function edit($id)
    {
    $student = StudentDetail::findOrFail($id);
    return view('student_details.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = StudentDetail::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|in:Mr.,Mrs.,Miss,Rev.',
            'full_name' => 'required|string|max:255',
            'student_id' => 'required|string|unique:student_details,student_id,' . $id,
            'faculty' => 'required|string|max:255',
            'telephone_number' => 'required|string|size:10',
            'first_year_hostel' => 'nullable|string|max:255',
            'first_year_payment_date' => 'nullable|date',
            'second_year_hostel' => 'nullable|string|max:255',
            'second_year_payment_date' => 'nullable|date',
            'third_year_hostel' => 'nullable|string|max:255',
            'third_year_payment_date' => 'nullable|date',
            'fourth_year_hostel' => 'nullable|string|max:255',
            'fourth_year_payment_date' => 'nullable|date',
            'guardian_name' => 'required|string|max:255',
            'guardian_telephone' => 'required|string|size:10',
            'residential_address' => 'required|string'
        ]);

        // Format payment dates
        $paymentDateFields = [
            'first_year_payment_date',
            'second_year_payment_date',
            'third_year_payment_date',
            'fourth_year_payment_date'
        ];

        foreach ($paymentDateFields as $field) {
            if (!empty($validated[$field])) {
                $validated[$field] = date('Y-m-d', strtotime($validated[$field]));
            } else {
                $validated[$field] = null;
            }
        }

        $student->update($validated);

        return redirect()->route('student.details.edit', $student->id)
            ->with('success', 'Student details updated successfully!');
    }


    public function search()
{
    // This method will display the search form
    return view('student_details.search');
}

    public function searchByID(Request $request)
    {
    $request->validate([
        'student_id' => 'required|string'
    ]);

    $student = StudentDetail::where('student_id', $request->student_id)->first();

    if ($student) {
        return view('student_details.search', compact('student'));
    }

    return back()->with('error', 'Student not found with ID: ' . $request->student_id);
    }
}
