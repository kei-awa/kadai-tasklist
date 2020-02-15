@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} の修正ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => "put"]) !!}
                
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('修正', ['class' => 'btn btn-primary']) !!}
            
            {!! Form::close() !!}
        </div>
    </div>
@endsection