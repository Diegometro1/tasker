@extends('master')


@section('content')


    <div class="row">


        <div class="col-lg-6 col-lg-offset-3">


            <form action="/create/chore" method="post">
                <input type="text" class="form-control input-lg" name="chore" placeholder="Create a new chore">
                    {{ csrf_field() }}


            </form>
        </div>


    </div>


    @foreach($chores as $chore)

        {{ $chore -> chore }} <a href="{{ route('chore.delete', ['id' => $chore->id]) }}" class="btn btn-danger"> x </a>

        <a href="{{ route('chore.update', ['id' => $chore->id]) }}" class="btn btn-info btn-xs"> update </a>



        <hr>

    @endforeach


    @stop