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

class ClassRoomsController extends Controller
{

    function __construct()
    {
        $this->middleware(['auth','IsManager']);
    }

    public function index(User $user)
    {
        $user = $user::find(Auth::id());
        $class = $user->classrooms;
        return view('create-class', compact('class'));
    }
    public function create(Request $request,User $user,Classroom $classroom)
    {
        $id = Auth::id();
        $user = $user::find($id);
        $classroom->name = $request->name;
        $user->classrooms()->save($classroom);
        return back();
    }


}
