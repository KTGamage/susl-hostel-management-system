<?php

namespace App\Http\Controllers;

use App\Models\StudentDetail;
use Illuminate\Http\Request;

class StudentDetailController extends Controller
{
    public function create()
    {
        return view('student_details.create');
    }

    public function store(Request $request)
    {
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
    }
}