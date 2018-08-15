<!DOCTYPE html>
<html>
<head>
    <title>Simple Login System in Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <style type="text/css">
        
        * {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
        }
        *:before,
        *:after {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
        }

        body, button, html, input, select, textarea {
            color: #333;
            font-family: Helvetica Neue,Arial,Helvetica,sans-serif;
            font-size: 14px;
            line-height: 20px;
            font-weight: 400;
        }

        .home-container {
            min-height: calc(100vh - 40px);
        }

        .home-container .home-sticky-container {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: center;
        }

        body:not(.body-pinned-drawer) .home-container .content-all-boards {
            padding-left: 64px;
        }

        .home-container .all-boards {
            width: 790px;
            margin-right: 10px;
            overflow: hidden;
        }

        .home-container .all-boards .boards-page-board-section {
            padding: 0 0 20px;
        }

        .boards-page-board-section {
            margin: 0 auto;
            max-width: 1250px;
            padding: 20px 16px 0;
        }

        .boards-page-board-section-list {
            display: flex;
            flex-wrap: wrap;
        }

        .home-container .all-boards .boards-page-board-section-list-item .board-tile, .home-container .all-boards .boards-page-board-section-list-item:nth-of-type(4n) {
            margin-right: 0;
        }

        .home-container .all-boards .boards-page-board-section-list-item  {
            width: 23%;
            padding: 0;
            margin: 0 2% 8px 0;
            transform: translate(0);
        }

        .boards-page-board-section-list-item {
            box-sizing: border-box !important;
            position: relative;
        }

        .board-tile {
            color: #fff;
            background-color: #0079bf;
            line-height: 20px;
            margin:0 8px 8px 0;
            padding: 8px;
            position: relative;
            text-decoration: none;
            outline:none;
        }

        .board-tile-fade {
            background-color: rgba(0,0,0,.15);
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
        }

        .board-tile, .board-tile-fade {
            border-radius: 3px;
            display: block;
        }

        .board-tile-details {
            display: flex;
            height: 80px;
            position: relative;
            flex-direction: column;
            justify-content: space-between;
        }

        .board-tile-details-name {
            flex: 0 0 auto;
            font-size: 16px;
            font-weight: 700;
            display: inline-block;
            overflow: hidden;
            max-height: 40px;
            width: 100%;
            text-decoration:none;
            word-wrap: break-word;
        }

        .board-tile.mod-add {
            background-color: #e2e4e6;
            color: #8c8c8c;
            display: table-cell;
            height: 80px;
            font-weight: 500;
            text-align: center;
            vertical-align: middle;
            width: inherit;
        }

    </style>

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