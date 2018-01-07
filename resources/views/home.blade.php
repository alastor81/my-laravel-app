@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        status :
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-success">
                            You are logged in!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        create a new student :
                    </div>
                    <div class="panel-body">
                        <form class="form-group" action="{{ route('create-student') }}" method="post">
                            {{ csrf_field() }}
                            <p>name :   <input class="form-control-static" title="name of the student" name="name"></p>
                            <p>class name : <input class="form-control-static" name="class"
                                                      title="the class of the student"></p>
                            <hr>
                            <input type="submit" class="btn btn-primary" value="submit it !">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        current students :
                    </div>
                    <div class="panel-body">
                        @foreach($student as $st)
                            <a href="/student/{{ $st->id }}">{{ $st->name }}</a>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
