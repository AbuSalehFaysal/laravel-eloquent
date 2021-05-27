<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function fetchStudents() {
        $students = Student::whereBetween('id', [10,20])->orderBy('id','DEsc')->get();
        return $students;
    }
}
