<section class="above-header">
    <div class="container">
        <div class="row">
        <div class="col-lg-4 align-self-center">
            <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            {{-- <li><a href="#"><i class="fa fa-behance"></i></a></li> --}}
            </ul>
        </div>
        <div class="col-lg-4 align-self-center">
            <div class="logo">
            <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
            </div>
        </div>
        <div class="col-lg-4 align-self-center">
            <ul class="search-item">
            <li class="menu-item menu-search">
                <a href="#search" id="menu-search-btn">
                <i class="icon_search"></i>
                </a>
            </li>
            </ul>
        </div>
        </div>
    </div>
</section>

<header class="site-header fixed-header">
    <div class="container expanded">
        <div class="header-wrap">
        <div class="header-logo">
            <a href="/"><img src="images/logo.png" alt=""></a>
        </div>
        <div class="header-nav">
            <ul class="main-menu">
                <li class="menu-item-has-children {{request()->routeIs('home*') ? 'active' : ''}}"><a href="{{route('home')}}">Inicio</a>
                {{-- <ul class="sub-menu">
                    <li><a href="/">Standard Posts</a></li>
                    <li><a href="home-recent.html">Recent Posts</a></li>
                    <li><a href="home-masonry.html">Masonry Posts</a></li>
                    <li><a href="home-list.html">List Posts</a></li>
                    <li><a href="home-full-width.html">Full Width Posts</a></li>
                    <li><a href="home-without-sidebar.html">Without Sidebar</a></li>
                </ul> --}}
                </li>
                {{-- <li class="menu-item-has-children"><a href="#">Sliders</a>
                <ul class="sub-menu">
                    <li><a href="slider-boxed.html">Boxed Slider</a></li>
                    <li><a href="slider-full-width.html">Full Width Slider</a></li>
                    <li><a href="slider-medium.html">Two Big Posts</a></li>
                    <li><a href="slider-small.html">Three Big Posts</a></li>
                    <li><a href="slider-infinity.html">Infinity Scroll</a></li>
                </ul>
                </li> --}}
                <li><a href="#">Tienda</a></li>
                {{-- <li class="menu-item-has-children"><a href="#">Pages</a>
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
                <li class="menu-item-has-children {{request()->routeIs('blog*') ? 'active' : ''}}"><a href="{{route('blog')}}">Blog</a>
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
                <li><a href="#">Contácto</a></li>
            </ul>
        </div>
        <div class="header-widgets">
            <ul class="right-menu">
            <li class="menu-item menu-mobile-nav">
                <a href="#" class="menu-bar" id="menu-show-mobile-nav">
                <span class="hamburger"></span>
                </a>
            </li>
            </ul>
        </div>
        </div>
    </div>
</header>
