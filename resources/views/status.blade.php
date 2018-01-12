@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        status of the students' average :
                    </div>
                    <div class="panel-body">
                        @foreach($all_average as $average => $sc)
                            <div class="progress">
                                @if($sc*5 > 75)
                                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                         style="width:{{ $sc*5 }}%">
                                        {{ $average }} : {{ $sc }}
                                    </div>

                                @elseif($sc*5 > 50)
                                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                         style="width:{{ $sc*5 }}%">
                                        {{ $average }} : {{ $sc }}
                                    </div>
                                @elseif($sc*5 < 50)
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                         style="width:{{ $sc*5 }}%">
                                        {{ $average }} : {{ $sc }}
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection