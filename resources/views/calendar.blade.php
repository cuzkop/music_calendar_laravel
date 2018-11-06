@extends('layouts.layout')
@section('headContent')
<div class="row" style="margin-top: 15px;">
    <div class="col s4">
        <a href="#"><i class="close material-icons" style="color: white;">menu</i></a>
    </div>
    <div style="font-size: 25px; color: white" class="col s8">
        カレンダー
    </div>
</div>
@endsection
@section('content')

@foreach ($data as $key => $value)
@if ($value->todayFlg === 1)
    <div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="mrchildren.jpeg">
            </div>
            <div class="card-content" style="padding-right: 5px; padding-left: 5px; padding-bottom: 10px; padding-top: 10px;">
                <table style="border-collapse: separate;">
                    <thead class="card-panel z-depth2" style="background-color: yellow; padding-right: 5px;">
                        <tr>
                            <th>
                                <p>{{$value->date}}</p>
                            </th>
                            <th>
                                <p style="color: red">today!!</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>{{$value->artist_name}}/&nbsp;{{$value->event_name}}<br>
                                    {{$value->time}}~/{{$value->place}}</p>
                            </td>
                            <td style="text-align: right;">
                                <a href="/calendarUpdate?id={{$value->id}}}}"><i class="close material-icons">delete</i></a>
                            </td>
                        </tr>
                    </tbody>
                 </table>
            </div>
            <div class="card-action" style="height: 30px; padding-top: 3px;">
              <a href="http://tour.mrchildren.jp/" target="_blank">オフィシャルサイトはこちら</a>
            </div>
          </div>
        </div>
    </div>
@else
    <table style="height: 80px;">
        <thead>
            <tr style="height: 30px; background-color: #e0e0e0;">
                <th style="font-size: 12px;">{{$value->date}}</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="card-panel z-depth2">
            <tr>
                <td style="font-size: 12px;">{{$value->artist_name}}&nbsp;/&nbsp;{{$value->event_name}}<br>{{$value->time}}~/{{$value->place}}</td>
                <td style="text-align: right; font-size: 12px;"><a href="/calendarUpdate?id={{$value->id}}}}"><i class="close material-icons">delete</i></a></td>
            </tr>
        </tbody>
    </table>
@endif
@endforeach



@endsection
