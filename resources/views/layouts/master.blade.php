<!DOCTYPE html>
<html>

<head>
    <title>mungjar</title>

    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}?ver={{ config('app.cssVersion') }}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}?ver={{ config('app.cssVersion') }}" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @if(Request::is('/'))
        <style>
            html, body, header {
                height: 100%;
                width: 100%;
                font-family: 'Roboto', sans-serif;
                color: #333;
                background-color: #f2f2f2;
            }
        </style>
    @else
        <style>
            html, body, header {
                height: 80%;
                width: 100%;
                font-family: 'Roboto', sans-serif;
                color: #333;
                background-color: #f2f2f2;
            }

            main {
                margin-top: 2%;
            }
        </style>
    @endif
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</head>

<body>
    <header>
        <nav class="z-depth-0">
            <div class="nav-wrapper">
                @if (!Request::is('/')) <a href="{{ route('home') }}" class="brand-logo">{{ config('app.name') }}</a> @endif
                <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav" class="right hide-on-med-and-down">
                    <li><a href="{{ route('commissions.create') }}" class="waves-effect waves-light btn">Hire Me</a></li>
                </ul>
                <ul id="nav" class="right text-nav hide-on-med-and-down">
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('tos') }}">TOS</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
                <ul class="side-nav" id="mobile">
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('tos') }}">TOS</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </nav>
        @if(Request::is('/'))
            <div class="banner">
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
                        <a class="waves-effect waves-light btn hide-on-large-only">@yield('pageTitle')</a>
                        <div class="container"></div>
                    </div>
                </div>
                <div class="container"></div>
            </div>
            <a href="#latest" class="btn-floating btn waves-effect waves-light red down-btn center-align"><i class="fa fa-long-arrow-down"></i></a>
        @else
            <div class="content-banner">
                <div class="banner-text">
                    <h1>@yield('pageTitle')</h1>
                    <div class="separator"></div>
                    <p class="center smallText">@yield('pageDesc')</p>
                </div>
            </div>
        @endif

    </header>
    <main>
        @yield('content')

    </main>
    <footer class="page-footer grey darken-4">
        <div class="footer-copyright">
            <div class="container white-text center">
                &copy; 2017 mungjar. All Rights Reserved. Website created with <i class="fa fa-heart"></i> by <a href="https://github.com/ddolpali">ddolpali.</a>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.1/SmoothScroll.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}?ver={{ config('app.cssVersion') }}"></script>
    @if (Request::is('contact') && $success)
        <script>
            $(document).ready(function() {
                Materialize.toast('Message has been sent!', 4000);
            });
        </script>
    @elseif (Request::is('/'))
        <script>
            $(document).ready(function() {
                $("a").on('click', function(event) {
                    if (this.hash !== "") {
                        event.preventDefault();
                        var hash = this.hash;

                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function() {

                            window.location.hash = hash;
                        });
                    }
                });
            });
       </script>
    @endif
</body>

</html>
