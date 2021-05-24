@extends('landing.layout.app')

@section('title') Blog @endsection

@section('content')
    <section class="large-gap standard-home recent-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="standard-posts">
                        <div class="row">
                            @foreach ($posts as $post)
                                <div class="col-lg-4">
                                    <div class="standard-post recent-post">
                                        <div class="post-image">
                                            <a href="#"><img src="/files/images/{{$post->image}}" width="370" height="305"
                                                    alt="370x305"></a>
                                        </div>
                                        <div class="down-content">
                                            <a href="{{route('post', $post->slug)}}">
                                                <h4>{{$post->title}}</h4>
                                            </a>
                                            <ul class="post-info">
                                                <li><a href="#">{{ $post->created_at->toFormattedDateString() }}</a></li>
                                                <li><a href="#">{{$post->author}}</a></li>
                                            </ul>
                                            <?php echo substr($post->body, 0, 150)." ..."; ?>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                            {{-- <div class="col-lg-4">
                                <div class="standard-post recent-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/370x305"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <a href="single-standard-post.html">
                                            <h4>The Ultimate <em>Women’s Bag</em> Guide Latest Fashion <em>Trends</em></h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer fest ethical forage four
                                            family craft fanny pack.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="standard-post recent-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/370x305"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <a href="single-standard-post.html">
                                            <h4>Fingerstache <em>flexitarian</em> raw denim <em>godard</em> leggings</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer fest ethical forage four
                                            family craft fanny pack.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="standard-post recent-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/370x305"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <a href="single-standard-post.html">
                                            <h4><em>Godard</em> gochujang keffiyeh you probably subway <em>gentrify</em>
                                            </h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer fest ethical forage four
                                            family craft fanny pack.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="standard-post recent-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/370x305"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <a href="single-standard-post.html">
                                            <h4>Everyday <em>carry</em> chartreuse hexagon kombucha <em>poutine</em></h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer fest ethical forage four
                                            family craft fanny pack.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="standard-post recent-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/370x305"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <a href="single-standard-post.html">
                                            <h4>helvetica mlkshk <em>listicle microdosing</em> kitsch</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer fest ethical forage four
                                            family craft fanny pack.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="standard-post recent-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/370x305"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <a href="single-standard-post.html">
                                            <h4>The Ultimate <em>Women’s Bag</em> Guide Latest Fashion Trends</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer fest ethical forage four
                                            family craft fanny pack.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="standard-post recent-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/370x305"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <a href="single-standard-post.html">
                                            <h4>waistcoat <em>chicharrones</em> snack williamsburg fashion</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer fest ethical forage four
                                            family craft fanny pack.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="standard-post recent-post">
                                    <div class="post-image">
                                        <a href="single-standard-post.html"><img src="http://placehold.it/370x305"
                                                alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <a href="single-standard-post.html">
                                            <h4>Fingerstache <em>flexitarian</em> raw denim <em>godard</em> leggings</h4>
                                        </a>
                                        <ul class="post-info">
                                            <li><a href="#">January 10, 2020</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                        <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer fest ethical forage four
                                            family craft fanny pack.</p>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-lg-12">
                                {{$posts->links()}}
                                {{-- <ul class="pagination">
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
