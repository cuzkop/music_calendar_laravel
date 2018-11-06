@extends('layouts.layout')
@section('content')

@if (isset($result) == true)
    {{$result}}
@endif

<form action="/insertArtist">
    <input type="text" name="artist_name" placeholder="アーティスト名">
    <input type="number" name="genre_id" placeholder="ジャンルID">
    <input type="submit" name="">
</form>

<br>
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<form action="/insertEvent">
    <input type="text" name="event_name" placeholder="イベント名" required="required">
    <input type="text" name="artist_id" placeholder="アーティストID" required="required">
    <input type="text" name="place" placeholder="場所" required="required">
    <input type="text" name="start_date_time" placeholder="yyyy-mm-dd hh:ii:ss" required="required">
    <input type="text" name="end_date_time" placeholder="yyyy-mm-dd hh:ii:ss" required="required">
    <input type="submit" name="">
</form>


@if (isset($data) == true)
    @foreach ($data as $value)
        {{$value->artist_id}}:{{$value->artist_name}}
    @endforeach
@endif



@endsection
