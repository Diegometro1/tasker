@extends('master')


@section('content')

    @foreach($chores as $chore)

        {{ $chore -> chore }}

    <hr>

    @endforeach


    @stop