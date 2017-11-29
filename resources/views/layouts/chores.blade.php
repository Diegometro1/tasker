@extends('master')


@section('content')


    <div class="row">


        <div class="col-lg-6 col-lg-offset-3">


            <form action="create/chore" method="post">

                {{ csrf_field() }}

                <input type="text" class="form-control input-lg" name="chore" placeholder="Create a new chore">



            </form>
        </div>


    </div>


    @foreach($chores as $chore)

        {{ $chore -> chore }} <a href="{{ route('chore.delete', ['id' => $chore->id]) }}" class="btn btn-danger"> x </a>

        <a href="{{ route('chore.update', ['id' => $chore->id]) }}" class="btn btn-info btn-xs"> update </a>


        @if(!$chore -> completed)

            <a href="{{ route('chore.completed',[ 'id' => $chore->id]) }}" class="btn btn-xs btn-success">Mark as Completed</a>
        @else


            <span class="text-success">Completed!!</span>


        @endif




        <hr>

    @endforeach


@stop