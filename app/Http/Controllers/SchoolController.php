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
        $this->middleware('auth');
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

    public function show($id, Student $student, Score $score,User $user)
    {
        $student = $student::find($id);
        $score_average = 0;
        $count_of_lesson = 0;
        foreach ($student->scores as $score) {
            $score_average += $score->score;
            $count_of_lesson += 1;
        }
        if (!$count_of_lesson < 1) {
            $score_average = $score_average / $count_of_lesson;
        }
        $lesson = $user::find(Auth::id())->lessons;
        return view('student-edition', compact(['student', 'score_average','lesson']));
    }


    public function show_api($id, Student $student, Score $score)
    {
        $student = $student::find($id);
        $score_average = 0;
        $count_of_lesson = 0;
        foreach ($student->scores as $score) {
            $score_average += $score->score;
            $count_of_lesson += 1;
        }
        if (!$count_of_lesson < 1) {
            $score_average = $score_average / $count_of_lesson;
        }

//        return view('student-edition', compact(['student', 'score_average']));
        return $score_average;
    }

    public function add(Request $request, Student $student, Score $score)
    {
        $student = $student::find($request->st_id);
        $score->lesson_id = $request->name;
        $score->score = $request->score;
        $score->turn = $request->turn;
        $student->scores()->save($score);
        return back();

    }

    public function average(Student $students, User $user)
    {
        $all_average = [];
        $names = [];
        $userId = Auth::id();
        $student = $user::find($userId);
        $student = $student->students;
        foreach ($student as $people) {
            $score_average = 0;
            $count_of_lesson = 0;
            foreach ($people->scores as $score) {
                $score_average += $score->score;
                $count_of_lesson += 1;
            }
            if (!$count_of_lesson < 1) {
                $score_average = $score_average / $count_of_lesson;
                $all_average["$people->name"] = "$score_average";
//                $final_average = array_add($all_average,"$people->id","$score_average");
            }
        }
//        $all_average = ksort($all_average);
        return view('status', compact(['all_average', 'student']));
//        return $all_average;
    }

    public function show_all(User $user, Student $student)
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

    public function create_class_shown(User $user)
    {
        $user = $user::find(Auth::id());
        $class = $user->classrooms;
        return view('create-class', compact('class'));
    }

    public function create_class(Request $request,User $user,Classroom $classroom)
    {
        $id = Auth::id();
        $user = $user::find($id);
        $classroom->name = $request->name;
        $user->classrooms()->save($classroom);
        return back();
    }

    public function show_lessons(User $user)
    {
        $user = $user::find(Auth::id());
        $lesson = $user->lessons;
//        return $lesson;
        return view('add-lesson', compact('lesson'));
    }

    public function add_lesson(Request $request,User $user,Lesson $lesson)
    {
        $id = Auth::id();
        $user = $user::find($id);
        $lesson->name = $request->name;
        $user->lessons()->save($lesson);
        return back();
    }

    public function test(User $user)
    {
        return view('layouts.pdf');
    }
}
