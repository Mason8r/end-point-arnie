<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Test online webhooks with my request bin">
    <meta name="author" content="Stu Mason">
    <title>End Point Arnie</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        .request {
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 10px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="row">
            <h1>End Point Arnie</h1>
        </header>
        <div id="main" class="row">
            @yield('content')
        </div>
        <footer class="row">
           <div class="text-center"><small>Thrown together by <a href="https://twitter.com/masonator/" target="_blank">@masonator</a></small></div>
        </footer>
    </div>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>