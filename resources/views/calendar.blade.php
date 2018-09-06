<!DOCTYPE html>
<html>
<head lang="ja">
    <title></title>
    <meta charset="utf-8">
</head>
<body>
    @foreach ($data as $key => $value)
        <table>
            <thead>
                <th>
                    {{$value['start_date_time']['year']}}/{{$value['start_date_time']['month']}}/{{$value['start_date_time']['day']}}&nbsp;{{$value['start_date_time']['hour']}}:{{$value['start_date_time']['minute']}}&nbsp; ~ &nbsp;{{$value['end_date_time']['hour']}}:{{$value['end_date_time']['minute']}}
                </th>
            </thead>
            <tbody>
                <td>
                    {{$value['artist_name']}}<br>
                    {{$value['event_name']}}<br>
                    {{$value['place']}}
                </td>
            </tbody>
        </table>
    @endforeach

</body>
</html>
