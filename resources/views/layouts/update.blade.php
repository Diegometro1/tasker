@extends('master')


@section('content')


    <div class="row">


        <div class="col-lg-12 col-lg-offset-3">


            <form action= "{{ route('chore.save', ['id' => $chore->id]) }}" method="post">


                {{ csrf_field() }}

                <input type="text" class="form-control input-lg" name="chore" value="{{ $chore -> chore }}" placeholder="Update the information">



            </form>



        </div>


    </div>



      {{--@foreach($chores as $chore)--}}

    {{--{{ $chore -> chore }} <a href="{{ route('chore.delete', ['id' => $chore->id]) }}" class="btn btn-danger"> x </a>--}}

    {{--<a href="{{ route('chore.update', ['id' => $chore->id]) }}" class="btn btn-info btn-xs"> update </a>--}}



    {{--<hr>--}}

    {{--@endforeach--}}





@stop