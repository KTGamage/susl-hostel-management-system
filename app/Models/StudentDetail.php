<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'full_name',
        'student_id',
        'faculty',
        'telephone_number',
        'first_year_hostel',
        'first_year_payment_date',
        'second_year_hostel',
        'second_year_payment_date',
        'third_year_hostel',
        'third_year_payment_date',
        'fourth_year_hostel',
        'fourth_year_payment_date',
        'guardian_name',
        'guardian_telephone',
        'residential_address'
    ];

    protected $casts = [
        'first_year_payment_date' => 'date',
        'second_year_payment_date' => 'date',
        'third_year_payment_date' => 'date',
        'fourth_year_payment_date' => 'date',
    ];
}