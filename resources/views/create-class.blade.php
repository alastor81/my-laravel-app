@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        create a new class :
                    </div>
                    <div class="panel-body">
                        <form class="form-group" action="{{ route('c_class') }}" method="post">
                            {{ csrf_field() }}
                            <p>class name : <input class="form-control-static" name="name"
                                                   title="the class's name"></p>
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
                        current class's :
                    </div>
                    <div class="panel-body">
                        @foreach($class as $cl)
                            <b> {{ $cl->name }} </b>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection