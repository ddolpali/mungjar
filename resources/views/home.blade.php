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
                    <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul id="nav" class="right hide-on-med-and-down">
                        <li><a class="waves-effect waves-light btn">Hire Me</a></li>
                    </ul>
                    <ul id="nav" class="right text-nav hide-on-med-and-down">
                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ route('tos') }}">TOS</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile">
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
        <a href="#latest" class="btn-floating btn waves-effect waves-light red down-btn center-align"><i class="fa fa-long-arrow-down"></i></a>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <br>
                    <h3 id="latest">Latest Work</h3>
                    <div class="gallery_menu">
                        <ul id="filter" class="filter-menu">
                            <li class="waves-effect waves-light btn disabled" data-filter="*">All
                                <div class="ripple-container"></div>
                            </li>
                            <li class="waves-effect waves-light btn" data-filter=".chibi">Chibi
                                <div class="ripple-container"></div>
                            </li>
                            <li class="waves-effect waves-light btn" data-filter=".disney">Disney</li>
                            <li class="waves-effect waves-light btn" data-filter=".real">Realistic</li>
                            <li class="waves-effect waves-light btn" data-filter=".other">Other</li>
                        </ul>
                    </div>
                    <div class="gallery_items grid" style="position: relative; height: 722px;">
                        <div class="grid-item chibi">
                            <div class="card hoverable">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="{{ asset('img/home/2.png') }}">
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">qtae Pt 1<i class="material-icons right">close</i></span>
                                    <p><a href="https://www.youtube.com/watch?v=iRPoNY0806I">Youtube</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item grid-item2 chibi disney">
                            <div class="card hoverable">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="{{ asset('img/home/1.png') }}">
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Ariel Speedart<i class="material-icons right">close</i></span>
                                    <p>Ariel from the little mermaid. <a href="https://www.youtube.com/watch?v=LkPHF4C_7es">Click here for the video</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item chibi">
                            <div class="card hoverable">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="{{ asset('img/home/3.png') }}">
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">ddolpali<i class="material-icons right">close</i></span>
                                    <p><a href="https://www.youtube.com/watch?v=jejqJoKfM_s">Youtube</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item chibi">
                            <div class="card hoverable">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="{{ asset('img/home/2.png') }}">
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">qtae Pt 2<i class="material-icons right">close</i></span>
                                    <p><a href="https://www.youtube.com/watch?v=t_JvdcVw6nI">Youtube</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item chibi">
                            <div class="card hoverable">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="{{ asset('img/home/4.png') }}">
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">ddolpali<i class="material-icons right">close</i></span>
                                    <p><a href="https://www.youtube.com/watch?v=ySktUNvmBm8">Youtube</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item real disney">
                            <div class="card hoverable">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="{{ asset('img/home/6.png') }}">
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Quick Doodle of Moana<i class="material-icons right">close</i></span>
                                    <p><a href="https://www.youtube.com/watch?v=H-sr7lrmZzw">Youtube</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item real disney">
                            <div class="card hoverable">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="{{ asset('img/home/5.png') }}">
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Jasmine<i class="material-icons right">close</i></span>
                                    <p><a href="https://www.youtube.com/watch?v=b0xQkFx5PkY">Youtube</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.1/SmoothScroll.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
