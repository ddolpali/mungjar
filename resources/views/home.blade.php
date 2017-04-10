<!DOCTYPE html>
<html>

<head>
    <title>mungjar</title>

    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <header>
        <div class="banner">
            <nav class="z-depth-0">
                <div class="nav-wrapper">
                    <ul id="nav" class="right hide-on-med-and-down">
                        <li><a class="waves-effect waves-light btn">Hire Me</a></li>
                    </ul>
                    <ul id="nav" class="right text-nav">
                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ route('tos') }}">TOS</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </nav>

            <div class="banner-text">
                <h1>mungjar</h1>
                <div class="separator"></div>
                <p class="center">Freelancer &amp; Streamer</p>

                <div class="social center">
                    <a href="https://twitch.tv/mungjar"><span class="social-group"><i class="fa fa-twitch" aria-hidden="true"></i> mungjar</span></a>
                    <a href="https://twitter.com/mungasaur"><span class="social-group"><i class="fa fa-twitter" aria-hidden="true"></i> mungasaur</span></a>
                    <a href="https://instagram.com/mungasaur"><span class="social-group"><i class="fa fa-instagram" aria-hidden="true"></i> mungasaur</span></a>
                </div>
                <div class="center">
                    <a class="waves-effect waves-light btn hide-on-large-only">Hire Me</a>
                </div>

            </div>

            <div class="container"></div>
        </div>

    </header>
    <main>

    </main>
    <footer>

    </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <script>
        $( document ).ready(function(){
            $(".button-collapse").sideNav();
        });
    </script>
</body>

</html>
