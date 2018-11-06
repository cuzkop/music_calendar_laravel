@extends('layouts.layout')
@section('headContent')
<div class="row" style="margin-top: 15px;">
    <div class="col s4">
        <a href="#"><i class="close material-icons" style="color: white;">settings</i></a>
    </div>
    <div style="font-size: 25px; color: white;" class="col s8">
        ユーザー
    </div>
</div>
@endsection
@section('content')


<h5 style="font-family: sans-serif;">あなたがフォロー中のアーティスト</h5>
@if (count($data) >= 1)
    @foreach ($data as $key => $value)
        <div class="chip col s10 center">
            {{$value->artist_name}}
            <a href="/followUpdate?artist_id={{$value->artist_id}}&user_id={{$value->user_id}}"><i class="close material-icons">close</i></a>
        </div>
    @endforeach
@else
    <p>フォロー中のアーティストはいません</p>
@endif
<h5>オススメのアーティスト</h5>
<ul class="collection">
    <li class="collection-item avatar">
        <img src="siina-ringo.jpeg" alt="" class="circle" style="margin-top: 10px;">
        <p style="font-size: 20px; margin-top: 20px;">椎名林檎</p>
        <a href="#!" class="secondary-content" style="margin-top: 14px;"><i class="material-icons">add</i></a>
    </li>
    <li class="collection-item avatar">
        <img src="david-guetta.jpg" alt="" class="circle" style="margin-top: 10px;">
        <p style="font-size: 20px; margin-top: 20px;">David Guetta</p>
        <a href="#!" class="secondary-content" style="margin-top: 14px;"><i class="material-icons">add</i></a>
    </li>
    <li class="collection-item avatar">
        <img src="kyaripamyupamyu.jpg" alt="" class="circle" style="margin-top: 10px;">
        <p style="font-size: 20px; margin-top: 20px;">きゃりーぱみゅぱみゅ</p>
        <a href="#!" class="secondary-content" style="margin-top: 14px;"><i class="material-icons">add</i></a>
    </li>
    <li class="collection-item avatar">
        <img src="zedd.jpeg" alt="" class="circle" style="margin-top: 10px;">
        <p style="font-size: 20px; margin-top: 20px;">ZEDD</p>
        <a href="#!" class="secondary-content" style="margin-top: 14px;"><i class="material-icons">add</i></a>
    </li>
    <li class="collection-item avatar">
        <img src="keyakizaka46.jpg" alt="" class="circle" style="margin-top: 10px;">
        <p style="font-size: 20px; margin-top: 20px;">欅坂46</p>
        <a href="#!" class="secondary-content" style="margin-top: 14px;"><i class="material-icons">add</i></a>
    </li>
    <li class="collection-item avatar">
        <img src="fukuyama.jpg" alt="" class="circle" style="margin-top: 10px;">
        <p style="font-size: 20px; margin-top: 20px;">福山雅治</p>
        <a href="#!" class="secondary-content" style="margin-top: 14px;"><i class="material-icons">add</i></a>
    </li>
</ul>
@endsection
