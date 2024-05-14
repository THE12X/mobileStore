<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('Font awsome MRX/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('Font awsome MRX/css/font-awesome.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
    <style>
        * {
            font-family: comfortaa;
        }

        html {
            display: flex;
            justify-content: center;
        }

        body {
            width: 96%;
            height: 96vh;
            background: #e0e0e0;
            box-shadow: 15px 15px 30px #bebebe, -15px -15px 30px #ffffff;
            border-radius: 40px;
        }

        .navbar {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            background: #e0e0e0;
            padding-left: 15px;
            padding-right: 15px;
            box-shadow: 15px 15px 30px #bebebe, -15px -15px 30px #ffffff;
            border-radius: 60px;
        }

        .navbar .link {
            text-decoration: none;
            color: rgb(59, 59, 59);
            position: relative;
            display: inline-block;
            bottom: 7px;
        }
        .navbar .link:hover{
            color: #ff9900;
            font-size: 16px;
            transition: 0.4s ease-in-out;
        }

        .logo {
            margin-right: 50px;
            color: rgb(255, 217, 0);
            font-family: aldrich;
        }
        .list {
            list-style: none;
            display: flex;
            gap: 25px;
        }

        #toggler,
        .navbar label {
            display: none;
        }


        @media screen and (max-width:600px) {
            .menu {
                width: 100%;
                max-height: 0;
                overflow: hidden;
            }

            .list {
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }

            .navbar label {
                display: inline-flex;
                align-items: center;
                cursor: pointer;
            }

            #toggler:checked~.menu {
                max-height: 100%;
            }
        }
        .logout{
            border:0;
            background: transparent;
            color: #2b2b2b;
            font-size: 16px;

        }

    </style>
</head>

<body>
    <nav class='navbar'>
        <h1 class='logo'>XMM</h1> Welcome, {{ Auth::user()->name }}
        <input type="checkbox" id="toggler" />
        <label for="toggler"><i class="fa fa-list"></i></label>
        <div class='menu'><span style="color:transparent">.</span>
            <ul class='list'>
                <li><a class="link" href="{{ route('home.Products') }}">Products</a></li>
                <li><a class="link" href="{{ route('home.Games') }}">Games</a></li>
                <li><a class="link" href="{{ route('home.Contact') }}">Contact</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                        @csrf @method('DELETE')<button type="submit"  class="link logout">Logout <i class="fa-solid fa-right-from-bracket"></i></button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <div>
        @yield('content')

    </div>
</body>

</html>
