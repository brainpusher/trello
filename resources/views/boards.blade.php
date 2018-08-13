<!DOCTYPE html>
<html>
<head>
    <title>Simple Login System in Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <style type="text/css">
        .items {
            display: flex;
            flex-wrap: wrap;
            margin-left: -10px;
            margin-top: -10px;
        }
        .items .item {
            flex: 1 0 200px;
            box-sizing: border-box;
            background: #e0ddd5;
            color: #171e42;
            padding: 10px;
            margin-left: 10px;
            margin-top: 10px;
        }
    </style>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="btn btn-primary" href="{{ url('/main/logout') }}" role="button">Logout</a>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <br />

    <div class="items">
        <div class="item">Heriberto Nickel</div>
        <div class="item">Brittaney Haliburton</div>
        <div class="item">Maritza Winkler</div>
        <div class="item">Carmon Rigg</div>
        <div class="item">Alice Marmon</div>
        <div class="item">Lyman Steakley</div>
        <div class="item">Zenia Correa1</div>
        <div class="item">Zenia Correa</div>
    </div>
{{--<div class="container">
    <h3 align="center"> Please log in </h3><br />

    @if(isset(Auth::user()->email))
        <script>window.location="/main/successlogin";</script>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ url('/main/checklogin') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Enter Email</label>
            <input type="email" name="email" class="form-control" />
        </div>
        <div class="form-group">
            <label>Enter Password</label>
            <input type="password" name="password" class="form-control" />
        </div>
        <div class="form-group">
            <input type="submit" name="login" class="btn btn-primary" value="Let me in" />
        </div>
    </form>

</div>--}}
</body>