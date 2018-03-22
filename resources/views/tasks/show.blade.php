@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Show</div>
                    <div class="panel-body">
                        <h3>{{$task->title}}</h3>
                        <p>{{$task->description}}</p>
                        <div class="text-right">
                            <a class="btn btn-default" href="{{route('task.index')}}">Назад</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection