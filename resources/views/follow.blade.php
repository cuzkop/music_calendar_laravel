@extends('layouts.layout')
@section('headContent')
<div class="row" style="margin-top: 15px;">
    <div class="col s4">
        <a href="#" ><i class="close material-icons" style="color: white;">menu</i></a>
    </div>
    <div style="font-size: 25px; color: white;" class="col s8">
        フォロー
    </div>
</div>
@endsection
@section('content')

@if (isset($data) === true && $data !== 'hello')
    <p style="text-align: center;">{{$data}}!</p>
@endif

<div class="row" style="margin-bottom: 0px; padding-top: 10px;">
    <form class="col s12" action="/followArtist" method="GET">
        <div class="row">
            <div class="input-field col s10 offset-s1">
                <input id="artist_name" type="text" name="artist_name" class="validate" style="border-radius: 10px;" placeholder="search for Artist">
                <label for="artist_name">Artist Name</label>
            </div>
        </div>
    </form>
</div>
<div class="collection">
    <a href="#!" class="collection-item">J-POP</a>
    <a href="#!" class="collection-item">アイドル</a>
    <a href="#!" class="collection-item">ロック</a>
    <a href="#!" class="collection-item">メタル</a>
    <a href="#!" class="collection-item">EDM</a>
    <a href="#!" class="collection-item">レゲエ</a>
    <a href="#!" class="collection-item">ソウル</a>
    <a href="#!" class="collection-item">ラップ</a>
    <a href="#!" class="collection-item">R&B</a>
    <a href="#!" class="collection-item">その他</a>
</div>

@endsection
