<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="panel panel-default">
        <div class="panel-heading">

            @if(Auth::guest())
                <a style="margin:10px 0 10px 15px" href="{!! url('auth/login') !!}" class="btn btn-primary pull-right">LOGIN</a>
                <a style="margin:10px 0 10px 15px" href="{!! url('auth/register') !!}" class="btn btn-primary pull-right">REGISTER</a>
            @endif
            @if(Auth::check())
                Welcome, <b> {{Auth::user()->username}}</b>
                <a style="margin:10px 0 10px 15px" href="{!! url('auth/logout') !!}" class="btn btn-primary pull-right">LOGOUT</a>
                <a style="margin-top:10px " href="{{route('question.create')}}" class="btn btn-success pull-right">ASK QUESTION</a>
            @endif
        </div>


        <div class="container">

    @yield('content')

</div>

</div>
    <style>
        .container{margin-top:20px;}
        .panel-heading{min-height: 70px !important;}
        .list-group-item-text{padding:5px 5px !important; }

    </style>
</body>
</html>