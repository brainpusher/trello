<!DOCTYPE html>
<html>
<head>
    <title>Simple Login System in Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/boards.css') }}" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>


</head>
<body>

    <nav class="navbar navbar-dark bg-dark justify-content-between">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
        <a class="btn btn-primary" href="{{ url('/main/logout') }}" role="button">Logout</a>
    </nav>

    <br />

    <div class="home-container">
        <div class="home-sticky-container">
            <div class="all-boards">
                <div class="content-all-boards">
                <div class="boards-page-board-section">
                    <div id="app" class="boards-page-board-section-list">
                        <div  v-for="(board, index) in boards" class="boards-page-board-section-list-item">
                                <a class="board-tile">
                                    <span class="board-tile-fade"></span>
                                    <div class="board-tile-details">
                                        <div class="board-tile-details-name" title="dsdsdsdsddsdsdsdsdsdssdsdsdsdsdsdsdsdsdsddssasasasasasasasasasfdgfdhgdfhdfhdfh" dir="auto">
                                            <div> @{{ board.one }} </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            {{--  <button class="btn btn-primary" @click="removeBoard(index)">Delete</button>--}}
                        <div class="boards-page-board-section-list-item">
                            <a @click="createBoard" class="board-tile mod-add" href="#">
                                <span>Create new board…</span>
                            </a>
                        </div>
                    {{--<button class="btn btn-primary" @click="createBoard" class="bg-info">Create Board</button>--}}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const app = new Vue({
            el: '#app',
            data: {
                boards: []
            },
            methods: {
                createBoard() {
                    this.boards.push({
                        one: 'dsdsdsdsddsdsdsdsdsdssdsdsdsdsdsdsdsdsdsddssasasasasasasasasasfdgfdhgdfhdfhdfh',
                    })
                },
                removeBoard(index) {
                    this.boards.splice(index,1)
                }
            }
        })
    </script>
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