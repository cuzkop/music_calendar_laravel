@extends('layouts.layout')
@section('headContent')
<div style="text-align: center; font-size: 25px; color: white; margin-top: 10px;">
    フォロー
</div>
@endsection
@section('content')

@if ($request->all()['artist_name'] == 'AKB48')
    <ul class="collection">
        <li class="collection-item avatar">
            <img src="akb48.jpg" alt="" class="circle" style="margin-top: 7px;">
            <p style="font-size: 20px; margin-top: 15px;">{{$request->all()['artist_name']}}</p>
            <a href="/followDone?artist_name={{$request->all()['artist_name']}}" class="secondary-content" style="margin-top: 10px;"><i class="material-icons">add</i></a>
        </li>
    </ul>
@else
    <ul class="collection">
        <li class="collection-item avatar">
            <img src="mr_children_icon.jpg" alt="" class="circle" style="margin-top: 7px;">
            <p style="font-size: 20px; margin-top: 15px;">{{$request->all()['artist_name']}}</p>
            <a href="/followDone?artist_name={{$request->all()['artist_name']}}" class="secondary-content" style="margin-top: 10px;"><i class="material-icons">add</i></a>
        </li>
    </ul>
@endif

@endsection


