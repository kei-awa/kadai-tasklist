@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Let's manage your tasks！</h1>
                {!! link_to_route('signup.get', 'sign up now', [], ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection