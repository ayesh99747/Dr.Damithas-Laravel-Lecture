<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function index(){
        $students = Student::all();
        return view("student.list",compact('students'));
    }
}
