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
class LessonsController extends Controller
{

    function __construct()
    {
        $this->middleware(['auth','IsManager']);
    }

    public function index(User $user)
    {
        $user = $user::find(Auth::id());
        $lesson = $user->lessons;
//        return $lesson;
        return view('add-lesson', compact('lesson'));
    }

    public function add(Request $request,User $user,Lesson $lesson)
    {
        $id = Auth::id();
        $user = $user::find($id);
        $lesson->name = $request->name;
        $user->lessons()->save($lesson);
        return back();
    }

}
