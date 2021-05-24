<!DOCTYPE html>
<html lang="es">
    <head>
        @include('landing.layout.head')
    </head>
    <body>

        <div id="js-preloader" class="js-preloader">
        <div class="cp-preloader cp-preloader_type1">
            <span class="cp-preloader__letter" data-preloader="Y">Y</span>
            <span class="cp-preloader__letter" data-preloader="E">E</span>
            <span class="cp-preloader__letter" data-preloader="S">S</span>
            <span class="cp-preloader__letter" data-preloader="S">S</span>
            <span class="cp-preloader__letter" data-preloader="I">I</span>
            <span class="cp-preloader__letter" data-preloader="T">T</span>
            <span class="cp-preloader__letter" data-preloader="R">R</span>
            <span class="cp-preloader__letter" data-preloader="A">A</span>
            <span class="cp-preloader__letter" data-preloader="V">V</span>
            <span class="cp-preloader__letter" data-preloader="E">E</span>
            <span class="cp-preloader__letter" data-preloader="L">L</span>
            <span class="cp-preloader__letter" data-preloader="I">I</span>
            <span class="cp-preloader__letter" data-preloader="N">N</span>
            <span class="cp-preloader__letter" data-preloader="G">G</span>
        </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-nav-wrapper">
            <div class="mobile-menu-inner">
                <ul class="mobile-menu">
                <li class="has-sub"><a href="{{route('home')}}">Inicio</a>
                    {{-- <ul class="sub-menu">
                    <li><a href="index.html">Standard Posts</a></li>
                    <li><a href="home-recent.html">Recent Posts</a></li>
                    <li><a href="home-masonry.html">Masonry Posts</a></li>
                    <li><a href="home-list.html">List Posts</a></li>
                    <li><a href="home-full-width.html">Full Width Posts</a></li>
                    <li><a href="home-without-sidebar.html">Without Sidebar</a></li>
                    </ul> --}}
                </li>
                {{-- <li class="has-sub"><a href="#">Sliders <i class="sub-icon fa fa-angle-down"></i></a>
                    <ul class="sub-menu">
                    <li><a href="slider-boxed.html">Boxed Slider</a></li>
                    <li><a href="slider-full-width.html">Full Width Slider</a></li>
                    <li><a href="slider-medium.html">Two Big Posts</a></li>
                    <li><a href="slider-small.html">Three Big Posts</a></li>
                    <li><a href="slider-infinity.html">Infinity Scroll</a></li>
                    </ul>
                </li> --}}
                <li><a href="#">Tienda</a></li>
                {{-- <li class="has-sub"><a href="#">Pages <i class="sub-icon fa fa-angle-down"></i></a>
                    <ul class="sub-menu">
                    <li><a href="pages-left-sidebar.html">Left Sidebar</a></li>
                    <li><a href="pages-right-sidebar.html">Right Sidebar</a></li>
                    <li><a href="pages-without-sidebar.html">Without Sidebar</a></li>
                    <li><a href="pages-about-me-v1.html">About Version 1</a></li>
                    <li><a href="pages-about-me-v2.html">About Version 2</a></li>
                    <li><a href="pages-contact-me-v1.html">Contact Version 1</a></li>
                    <li><a href="pages-contact-me-v2.html">Contact Version 2</a></li>
                    <li><a href="pages-error-404.html">Error Page 404</a></li>
                    <li><a href="pages-coming-soon.html">Coming Soon Page</a></li>
                    </ul>
                </li> --}}
                <li class="has-sub"><a href="{{route('blog')}}">Blog</a>
                    {{-- <ul class="sub-menu">
                    <li><a href="single-standard-post.html">Standard Post</a></li>
                    <li><a href="single-audio-post.html">Audio Post</a></li>
                    <li><a href="single-video-post.html">Video Post</a></li>
                    <li><a href="single-gallery-post.html">Gallery Post</a></li>
                    <li><a href="single-quote-post.html">Quote Post</a></li>
                    <li><a href="single-post-left-sidebar.html">Left Sidebar Post</a></li>
                    <li><a href="single-post-right-sidebar.html">Right Sidebar Post</a></li>
                    <li><a href="single-post-without-sidebar.html">Without Sidebar Post</a></li>
                    </ul> --}}
                </li>
                <li><a href="{{route('contacto')}}">Contácto</a></li>
                </ul>
            </div>
        </div>
        <div class="mobile-menu-overlay"></div>

        <!-- Header -->
        @include('landing.layout.header')
        <!-- /Header -->

        <!-- change class -->
        <div class="change-class"></div>

        <div id="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="Buscar..." />
                <button type="submit" class="primary-button"><i class="icon_search"></i></button>
            </form>
        </div>

        @yield('content')

        <div class="instagram-footer">
            <div class="container">
                <div class="row">
                <div class="col-lg-12">
                    <div class="instagram-account">
                    <div class="widget-content">
                        <div class="widget-header">
                        <h4><a href="#">@yessitraveling</a></h4>
                        </div>
                        <div class="row">
                        <div class="col-lg-3">
                            <div class="instagram-item">
                            <img src="http://placehold.it/255x220" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="instagram-item">
                            <img src="http://placehold.it/255x220" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="instagram-item">
                            <img src="http://placehold.it/255x220" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="instagram-item">
                            <img src="http://placehold.it/255x220" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        @include('landing.layout.footer')

        <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

        <!-- Scripts -->
        @include('landing.layout.javascript')


    </body>
</html>
