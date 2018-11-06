<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>music clendar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <header style="background-color: #4fc3f7; top: 0px; position: fixed; width: 100%; height: 60px; z-index: 1">
        @yield('headContent')
    </header>
    <div id="content-div" style="margin-top: 68px; margin-bottom: 63px;">
        @yield('content')
    </div>

    <footer style="bottom: 0px; position: fixed; width: 100%; height: 55px;">
        <nav>
            <div class="nav-wrapper  light-blue lighten-2">
                <ul>
                    <div class="row">
                        <li class="active col s3"><a href="/follow"><i class="material-icons center" style="font-size: 35px;">search</i></a></li>
                        <li class="active col s3"><a href="/nortification"><i class="material-icons center" style="font-size: 35px;">notifications</i></a></li>
                        <li class="active col s3"><a href="/getCalendar"><i class="material-icons center" style="font-size: 35px;">event</i></a></li>
                        <li class="active col s3"><a href="/userInfo"><i class="material-icons center" style="font-size: 35px;">account_circle</i></a></li>
                    </div>
                </ul>
            </div>
        </nav>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
