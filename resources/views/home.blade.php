@extends('layouts.master')

@section('content')
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
                        <li class="waves-effect waves-light btn" data-filter=".real">Semi-Realistic</li>
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
@endsection
