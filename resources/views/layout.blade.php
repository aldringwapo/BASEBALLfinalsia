<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Players</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        #sidebar {
            width: 250px;
            height: 100%;
            position: fixed;
            background-color: #000000;
            padding-top: 20px;
            color: #fff;
        }
        #main {
            margin-left: 250px;
            padding: 20px;
        }
        #main-nav {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        #main-nav a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 10px;
        }
        #main-nav a:hover {
            background-color: #000000;
        }
        .active {
            background-color: #000000;
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <div id="title">
            <h1>BASEBALL PLAYERS</h1>
        </div>
        <nav id="main-nav">
            <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ url('/players') }}" class="{{ Request::is('players') ? 'active' : '' }}">Players</a>
            <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a>
        </nav>
    </div>
    <div id="main">
        <div id="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
