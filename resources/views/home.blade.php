<!DOCTYPE html>
<html>

<head>
    <title>mungjar</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <header>
        <nav class="z-depth-0">
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('tos') }}">TOS</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>

    </main>
    <footer>

    </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
</body>

</html>
