@extends('layouts.layout')
@section('content')

<form action="/masterArtist">
    <input type="text" name="artist_name" placeholder="アーティスト名">
    <input type="number" name="genre_id" placeholder="ジャンルID">
    <input type="submit" name="">
</form>

@endsection
