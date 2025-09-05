<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// class CreateStudentDetailsTable extends Migration
return new class extends Migration
{
    
    // public function up()
    // {
    //     Schema::create('student_details', function (Blueprint $table) {
    //         $table->id();
    //         $table->timestamps();
    //     });
    // }
    
     public function up()
    {
        Schema::create('student_details', function (Blueprint $table) {
            $table->id();
            $table->enum('title', ['Mr.', 'Mrs.', 'Rev.']);
            $table->string('full_name');
            $table->string('student_id')->unique();
            $table->string('faculty');
            $table->string('telephone_number', 10);
            $table->string('first_year_hostel')->nullable();
            $table->date('first_year_payment_date')->nullable();
            $table->string('second_year_hostel')->nullable();
            $table->date('second_year_payment_date')->nullable();
            $table->string('third_year_hostel')->nullable();
            $table->date('third_year_payment_date')->nullable();
            $table->string('fourth_year_hostel')->nullable();
            $table->date('fourth_year_payment_date')->nullable();
            $table->string('guardian_name');
            $table->string('guardian_telephone', 10);
            $table->text('residential_address');
            $table->timestamps();
        });
    }



   
    public function down()
    {
        Schema::dropIfExists('student_details');
    }
};
