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

class ScoreController extends Controller
{

    function __construct()
    {
        $this->middleware(['auth','IsManager']);
    }

    public function index($id, Student $student, Score $score, User $user)
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
        return view('student-edition', compact(['student', 'score_average', 'lesson']));
    }


    public function api($id, Student $student, Score $score)
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


    public function show(User $user)
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

    public function add(Request $request, Student $student, Score $score)
    {
        $student = $student::find($request->st_id);
        $score->lesson_id = $request->name;
        $score->score = $request->score;
        $score->turn = $request->turn;
        $student->scores()->save($score);
        return back();

    }
}
