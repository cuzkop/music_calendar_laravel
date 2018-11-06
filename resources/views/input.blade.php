@extends('layouts.layout')
@section('content')



    <form action="/getCalendar" method="GET">
        <input type="text" name="user_id" id="" placeholder="ユーザーIDを入力">
        <input type="submit" name="">
    </form>
    <br>



@endsection
