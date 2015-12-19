<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Test online webhooks with my request bin">
    <meta name="author" content="Stu Mason">
    <title>End Point Arnie</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        html {
            height: 100%;
        }
        body {
            height: 100%;
            background: white url(assets/img/background.jpg) bottom right no-repeat;
            background-size: 20%;
            background-attachment: fixed;
        }
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
            <div class="col-md-6">
                <h1>End Point Arnie</h1>
            </div>
        </header>
        <div id="main" class="row">
            @yield('content')
        </div>
    </div>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>