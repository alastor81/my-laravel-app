@extends('layouts.app')

@section('header')
    <style>
        .user-row {
            margin-bottom: 14px;
        }

        .user-row:last-child {
            margin-bottom: 0;
        }

        .dropdown-user {
            margin: 13px 0;
            padding: 5px;
            height: 100%;
        }

        .dropdown-user:hover {
            cursor: pointer;
        }

        .table-user-information > tbody > tr {
            border-top: 1px solid rgb(221, 221, 221);
        }

        .table-user-information > tbody > tr:first-child {
            border-top: 0;
        }

        .table-user-information > tbody > tr > td {
            border-top: 0;
        }
    </style>
@endsection

@section('content')

    @foreach($student as $st)
        <div class="container">
            <div class="well col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                <div class="row user-row">
                    <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                        <img class="img-circle"
                             src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50"
                             alt="User Pic">
                    </div>
                    <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                        <strong>{{ $st->name }}</strong><br>
                        <span class="text-muted">class : {{ $st->class }}</span>
                    </div>
                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".{{ $st->id }}">
                        <i class="glyphicon glyphicon-chevron-down text-muted"></i>
                    </div>
                </div>
                <div class="row user-infos {{ $st->id }}">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">student information</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                                        <img class="img-circle"
                                             src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100"
                                             alt="User Pic">
                                    </div>
                                    <div class="col-xs-2 col-sm-2 hidden-md hidden-lg">
                                        <img class="img-circle"
                                             src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50"
                                             alt="User Pic">
                                    </div>

                                    <div class="col-xs-10 col-sm-10 hidden-md hidden-lg">
                                        <strong>{{ $st->name }}</strong><br>
                                        <dl>
                                            <dt>student's class :</dt>
                                            <dd>{{ $st->class }}</dd>
                                            <dt>Registered since:</dt>
                                            <dd>{{ $st->created_at }}</dd>
                                            <dt>scores :</dt>
                                            <?php
                                            $sc = json_decode(json_encode($st->scores), true);
                                            $sc = array_filter($sc);
                                            $average = count($sc) > 0 ? array_sum(array_column($sc,'score'))/count($sc) : 0;
                                            ?>
                                            <dd></dd>
                                            <dt>inserted lessons :</dt>
                                            <dd>{{ count($sc) }}</dd>
                                        </dl>
                                    </div>
                                    <div class=" col-md-9 col-lg-9 hidden-xs hidden-sm">
                                        <strong>{{ $st->name }}</strong><br>
                                        <table class="table table-user-information">
                                            <tbody>
                                            <tr>
                                                <td>student's class :</td>
                                                <td>{{ $st->class }}</td>
                                            </tr>
                                            <tr>
                                                <td>Registered since:</td>
                                                <td>{{ $st->created_at->format('F d, Y - H:i:s') }}</td>
                                            </tr>
                                            <tr>
                                                <td>scores' average :</td>
                                                <td>{{ $average }}</td>
                                            </tr>
                                            <tr>
                                                <td>inserted lessons :</td>
                                                <td>{{ count($sc) }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                    <button onclick="location.href='{{ route('pdf',["id" => $st->id]) }}'" class="btn btn-sm btn-primary" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="download the student's log"><i
                                    class="glyphicon glyphicon-download"></i></button>
                                <span class="pull-right">
                            <button onclick="location.href='{{ route('student',$st->id) }}'" class="btn btn-sm btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit this user"><i
                                        class="glyphicon glyphicon-edit"></i></button>
                            <button onclick="location.href='{{ route('delete',["id" => $st->id]) }}'" class="btn btn-sm btn-danger" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Remove this user"><i
                                        class="glyphicon glyphicon-remove"></i></button>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endforeach

        <script>
            $(document).ready(function () {
                var panels = $('.user-infos');
                var panelsButton = $('.dropdown-user');
                panels.hide();

                //Click dropdown
                panelsButton.click(function () {
                    //get data-for attribute
                    var dataFor = $(this).attr('data-for');
                    var idFor = $(dataFor);

                    //current button
                    var currentButton = $(this);
                    idFor.slideToggle(400, function () {
                        //Completed slidetoggle
                        if (idFor.is(':visible')) {
                            currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
                        }
                        else {
                            currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
                        }
                    })
                });


                $('[data-toggle="tooltip"]').tooltip();

                // $('button').click(function (e) {
                //     e.preventDefault();
                //     alert("This is a demo.\n :-)");
                // });
            });
        </script>

@endsection