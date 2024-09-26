<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        $students = DB::table('students')->get();

        return view('student.index', ['students' => $students]);
    }
}
