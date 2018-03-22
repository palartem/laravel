@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit {{$task->id}}</div>
                    <div class="panel-body">
                        @include('error')
                        <div class="col-md-12">
                            {{--<form action="{{route('task.update', $task->id)}}" method="PUT">--}}
                                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                                {{--<div class="form-group">--}}
                                    {{--<input class="form-control" type="text" name="title" value="{{$task->title}}">--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<textarea class="form-control" name="description" id="" cols="30" rows="10">{{$task->description}}</textarea>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<button type="submit" class="btn btn-success">Submit</button>--}}
                                {{--</div>--}}

                            {{--</form>--}}
                            {!! Form::open(['route'=>['task.update', $task->id], 'method'=>'PUT']) !!}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="title" value="{{$task->title}}">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$task->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>

                            {!! Form::close() !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection