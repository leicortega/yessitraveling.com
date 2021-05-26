@extends('landing.layout.app')

@section('title') Blog @endsection

@section('content')
    <section class="medium-gap single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-post">
                                    <div class="post-image">
                                        <div class="meta-category">
                                            <span>{{ $post->post_category }}</span>
                                        </div>
                                        <img src="/files/images/{{ $post->image }}" alt="" width="770" height="420">
                                    </div>
                                    <div class="down-content">
                                        <h4>{{ $post->title }}</h4>
                                        <ul class="post-info">
                                            <li><a href="javascript:void(0)">{{ $post->created_at->diffForHumans() }}</a></li>
                                            <li><a href="javascript:void(0)">{{ $post->author }}</a></li>
                                            <li><a href="javascript:void(0)">{{$post->comments->count()}} Comentarios</a></li>
                                        </ul>
                                        <?php echo $post->body ?>
                                        {{-- <p class="first-paragraph">Lorem ipsum dolor amet swag typewriter meditation iceland
                                            air plant, direct trade tacos kale chips ugh. Fashion axe single-origin coffee
                                            organic edison bulb prism. Green juice sriracha kogi iceland. Single-origin
                                            coffee leggings gluten-free asymmetrical biodiesel jianbing hoodie crucifix blog
                                            cray bitters shabby chic chillwave four dollar toast. Hexagon neutra irony
                                            organic jean shorts pop-up fashion axe prism ethical four loko small batch meh
                                            plaid tumeric chia, enamel pin vegan.<br><br></p>
                                        <blockquote>” Bicycle rights keytar meggings kickstarter messenger bag dreamcatcher
                                            crufix iceland bitters single-origin coffee. “</blockquote><br>
                                        <p class="last-paragraph">Bitters jianbing pok pok direct trade kombucha. Organic
                                            wolf af, PBRB tacos four loko hoodie chambray. Forage master cleanse kogi vice
                                            salvia flannel deep v. Portland gentrify jean shorts, vaporware umami kale chips
                                            cray shoreditch freegan kickstarter selfies. Migas mumblecore semiotics neutra
                                            everyday carry green juice dreamcheater vegans model.</p> --}}
                                        <div class="row">
                                            {{-- <div class="col-lg-7 col-md-6">
                                                <div class="tags">
                                                    <ul class="tags">
                                                        <li><i class="fa fa-tag"></i></li>
                                                        <li><a href="#">Beauty</a>,</li>
                                                        <li><a href="#">Fashion</a>,</li>
                                                        <li><a href="#">Lifestyle</a></li>
                                                    </ul>
                                                </div>
                                            </div> --}}
                                            <div class="col-lg-12 col-md-6">
                                                <ul class="share-post">
                                                    <li><i class="fa fa-share-alt"></i></li>
                                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{request()->fullUrl()}}&title={{$post->title}}">Facebook</a>,</li>
                                                    <li><a href="https://twitter.com/intent/tweet?url={{request()->fullUrl()}}&text={{$post->title}}&via={{config('app.name', 'TexvnOnline')}}&hashtags={{config('app.name', 'TexvnOnline')}}">Twitter</a></li>
                                                    {{-- <li><a href="https://www.pinterest.com/pin/create/button/?url={{request()->fullUrl()}}&media={{$post->image}}">Pinterest</a></li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- seccion de comentarios -->
                            <div class="col-lg-12">
                                <div class="widget-post comments">
                                    <div class="widget-header">
                                        <h4>{{$post->comments->count()}} Comentarios</h4>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="comments">
                                            @foreach ($post->comments as $comentario)
                                                <li>
                                                    <div class="comment-author-image">
                                                        <img src="http://placehold.it/90x90" alt="">
                                                    </div>
                                                    <div class="right-content">
                                                        <h6>{{$comentario->nombre}} <span>{{$comentario->created_at->toFormattedDateString()}}</span></h6>
                                                        {{-- <a class="reply-button">Respuestas</a> --}}
                                                        <?php echo $comentario->comentario; ?>
                                                    </div>
                                                </li>
                                            @endforeach
                                            

                                            {{-- <li class="replied">
                                                <div class="comment-author-image">
                                                    <img src="http://placehold.it/90x90" alt="">
                                                </div>
                                                <div class="right-content">
                                                    <h6>Kate Luise <span>January 11, 2020</span></h6>
                                                    <a href="#" class="reply-button">Reply</a>
                                                    <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed
                                                        kinfolk cronut short ditch freegan kistrater selfies.</p>
                                                </div>
                                            </li> --}}

                                            {{-- <li>
                                                <div class="comment-author-image">
                                                    <img src="http://placehold.it/90x90" alt="">
                                                </div>
                                                <div class="right-content">
                                                    <h6>Antonio Matters <span>January 09, 2020</span></h6>
                                                    
                                                    <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed
                                                        kinfolk cronut short ditch freegan kistrater selfies.</p>
                                                </div>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- seccion de realizar comentarios -->
                            <div class="col-lg-12">
                                <div class="widget-post leave-comment">
                                    <div class="widget-header">
                                        <h4>Deja tu comentario</h4>
                                    </div>
                                    <div class="widget-content">
                                        <div class="contact-form">
                                            <form  action="/blog/post/{{$post->slug}}/comentar" id="contact" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                                        <fieldset>
                                                            <input name="name" type="text" class="form-control" id="name"
                                                                placeholder="Tu nombre..." required>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                                        <fieldset>
                                                            <input name="email" type="text" class="form-control" id="email"
                                                                pattern="[^ @]*@[^ @]*"
                                                                placeholder="Tu correo electronico...">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <fieldset>
                                                            <textarea name="message" rows="6" class="form-control"
                                                                id="message" placeholder="Escribe tu comentario..."
                                                                required></textarea>
                                                        </fieldset>
                                                        <input type="hidden" name="post_id" value="{{$post->id}}">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <fieldset>
                                                            <button type="submit" id="form-submit" onclick="this.form.submit()"
                                                                class="filled-button">Comentar post</button>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- seccion de ultimos posts -->
                <div class="col-lg-4">
                    <div class="main-sidebar right-sidebar">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="widget-sidebar latest-posts">
                                    <div class="widget-header">
                                        <h4>Ultimas Publicaciones</h4>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="latest-post-list">
                                            @foreach ($latest_post as $posts)
                                                <li>
                                                    <a href="{{route('post', $posts->slug)}}">
                                                        <div class="left-image">
                                                            <img src="/files/images/{{ $posts->image }}" alt="" width="80" height="80">
                                                            <span>{{$posts->comments->count()}}</span>
                                                        </div>
                                                        <div class="right-content">
                                                            <h6>{{$posts->title}}</h6>
                                                            <span>{{$posts->created_at->toFormattedDateString()}}</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach


                                            {{-- <li>
                                                <a href="single-standard-post.html">
                                                    <div class="left-image">
                                                        <img src="http://placehold.it/80x80" alt="">
                                                        <span>3</span>
                                                    </div>
                                                    <div class="right-content">
                                                        <h6>The Ultimate Women Guide Latest Fashion</h6>
                                                        <span>January 12, 2020</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-standard-post.html">
                                                    <div class="left-image">
                                                        <img src="http://placehold.it/80x80" alt="">
                                                        <span>7</span>
                                                    </div>
                                                    <div class="right-content">
                                                        <h6>wayfarers man braid marfa typewriter</h6>
                                                        <span>January 10, 2020</span>
                                                    </div>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
