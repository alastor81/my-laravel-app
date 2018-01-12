@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $student->name }} :
                    </div>
                    <div class="panel-body">
                        @foreach($student->scores as $sc)
                            <div class="alert alert-@if($sc->score > 15.75){{ 'success' }}@elseif($sc->score > 10.75 && $sc->score <= 16.00){{ 'warning' }}@elseif($sc->score <= 11.00){{ 'danger' }}
                            @endif">
                                {{ $sc->lesson }} score : <b class="pull-right">{{ $sc->score }}</b>
                            </div>
                            <hr>
                        @endforeach
                        <div class="alert alert-@if($score_average > 15.75){{ 'success' }}@elseif($score_average > 10.75 && $score_average <= 16.00){{ 'warning' }}@elseif($score_average <= 11.00){{ 'danger' }}
                        @endif">
                            <a href="/students"
                               class="btn btn-@if($score_average > 15.75){{ 'success' }}@elseif($score_average > 10.75 && $score_average <= 16.00){{ 'warning' }}@elseif($score_average <= 11.00){{ 'danger' }}@endif">
                                average of your score : </a> <b class="pull-right">{{ $score_average }}</b>
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
                        add a new lesson score for this student :
                    </div>
                    <div class="panel-body">
                        <form class="form-group" action="{{ route('add-score') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="st_id" value="{{ $student->id }}">
                            <p>lesson : <select class="form-control-static" title="name of the lesson" name="name">
                                    @foreach($lesson as $ls)
                                        <option value="{{ $ls->id }}">{{ $ls->name }}</option>
                                    @endforeach

                                </select>
                            </p>
                            <p>score : <input class="form-control-static" name="score"
                                              title="the class of the student" type="number" min="0" max="20"></p>
                            <p><input type="radio" name="turn" value="1">first turn </p>
                            <p><input type="radio" name="turn" value="2">second turn </p>
                            <hr>
                            <input type="submit" class="btn btn-primary" value="submit it !">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection