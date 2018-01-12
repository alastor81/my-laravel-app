@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        add a new lesson to DB :
                    </div>
                    <div class="panel-body">
                        <form class="form-group" action="{{ route('add_lesson') }}" method="post">
                            {{ csrf_field() }}
                            <p>lesson name : <input class="form-control-static" name="name"
                                                   title="the lesson's name"></p>
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
                        current lessons's :
                    </div>
                    <div class="panel-body">
                        @foreach($lesson as $ls)
                            <b> {{ $ls->name }} </b>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection