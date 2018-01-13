<?php

namespace myapp\Http\Controllers;

use myapp\Classroom;
use myapp\Lesson;
use myapp\Score;
use myapp\Student;
use Illuminate\Http\Request;
use myapp\User;
use \Illuminate\Support\Facades\Auth;
use PDF;

class SchoolController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth','IsManager']);
    }

    public function index(User $user)
    {
        $userId = Auth::id();
//        $student = $user::with('students.scores')->get();
//        $student = $student->students;
        $student = $user::find($userId)->students;
        $classrooms = $user::find($userId)->classrooms;
        return view('home', compact(['student','classrooms']));
//        return $classrooms;
    }

    public function create(Request $request, User $user, Student $student)
    {
        $id = Auth::id();
        $user = $user::find($id);
        $student->name = $request->name;
        $student->class_id = $request->class;
        $user->students()->save($student);
        return back();
    }




    public function show(User $user, Student $student)
    {
        $userId = Auth::id();
        $student = $user::find($userId);
        $student = $student->students;
//        return $student;
        return view('all-students', compact('student'));
    }

    public function delete($id, Student $student)
    {
        $student::find($id)->delete();
        return back();
    }

    public function create_pdf($id, Student $student, PDF $pdf)
    {
        $student = $student::with('scores')->find($id);
        $score = $student->scores->toArray();
//        return view('layouts.pdf',compact(['student','score']));
//        return $student->scores;
        $pdf = PDF::loadView('layouts.pdf', compact(['student', 'score']));
        return $pdf->download('karname.pdf');
    }



    public function test(User $user)
    {
        return view('layouts.pdf');
    }
}
