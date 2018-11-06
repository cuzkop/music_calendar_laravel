@extends('layouts.layout')
@section('headContent')
<div style="text-align: center; font-size: 25px; color: white; margin-top: 15px;">
    通知
</div>
@endsection
@section('content')

@foreach ($data as $key => $value)
<div class="row col s12" style="margin-bottom: 0px;">
    <div class="col s12">
        <div class="container card-panel center col s12" style="padding-top: 10px; margin-bottom: 0px;">
            <table style="border-collapse: separate;">
                <thead class="card-panel z-depth2" style="background-color: #b2ebf2;">
                    <tr>
                        <th style="color: #616161; font-size: 16px;">
                            &nbsp;{{$value->date}}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="col s9">
                                {{$value->artist_name}}/{{$value->event_name}}<br>
                                {{$value->time}}~/{{$value->place}}
                            </div>
                            <div style="text-align: right" class="col s3">
                                <a href="/update?id={{$value->id}}}}&add=add"><i class="close material-icons">add</i></a>
                                <a href="/update?id={{$value->id}}}}&reject=reject"><i class="close material-icons">delete</i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endforeach

@endsection
