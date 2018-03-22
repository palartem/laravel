@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tasks</div>
                    <div class="panel-body">
                        <a href="{{route('task.create')}}" class="btn btn-success">Create</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>
                                        {{$task->id}}
                                    </td>
                                    <td>
                                        {{$task->title}}
                                    </td>
                                    <td>
                                        <a href="{{route('task.show', $task->id)}}">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </a>
                                        <a href="{{route('task.edit', $task->id)}}">
                                            <i class="glyphicon glyphicon-edit"></i>
                                        </a>
                                        <form action="{{route('task.destroy', $task->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="glyphicon glyphicon-remove" type="submit"></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
