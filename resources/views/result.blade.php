@extends('layouts.layout')
@section('headContent')
<div style="text-align: center; font-size: 25px;">
    フォロー
</div>
@endsection
@section('content')

@if (isset($data['error_message']) == true)
    {{$data['error_message']}}
@else
    {{$data}}
@endif
<br>
<a href="/follow" class="waves-effect waves-light btn col s3"><i class="material-icons center"></i>戻る</a>

@endsection
