@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Let's manage your tasks！</h1>
            {!! link_to_route('signup.get', 'sign up now', [], ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
@endsection