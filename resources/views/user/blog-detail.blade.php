@extends('user.layout.app')
@section('content')
    <div class="wrapper white_bg">
        <div class="breadcrumbs overlay-black" style="background:url(url('user-assets/img/banner.jpg'))">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumbs-title text-center">
                                <h1>PROPERTIES</h1>
                            </div>
                            <div class="breadcrumbs-menu">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-pages pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-sidbar">
                            <aside class="single-side-box categories">
                                <div class="aside_title">
                                    <h5>Categories</h5>
                                </div>
                                <div class="categories-list">
                                    <ul>
                                        @foreach($categories as $value)
                                        <li><a href="#">{{ $value->name }}</a></li>
                                        @endforeach
                                        {{--<li><a href="#">Apartment Building <span>780</span></a></li>--}}
                                        {{--<li><a href="#">Bungalow<span>670</span></a></li>--}}
                                        {{--<li><a href="#">Corporate House<span>530</span></a></li>--}}
                                        {{--<li><a href="#">Duplex Villa<span>350</span></a></li>--}}
                                        {{--<li><a href="#">Garend House<span>210</span></a></li>--}}
                                    </ul>
                                </div>
                            </aside>
                            <aside class="single-side-box recent-post">
                                <div class="aside_title">
                                    <h5>Recent post</h5>
                                </div>
                                <div class="recent-post-inner">
                                    <div class="single-recent-post fix">
                                        <div class="recent-post-thumbnail">
                                            <a href="article.html"><img src="{{ url('application-file/img/'.$blog->feature_image) }}" alt=""></a>
                                        </div>
                                        <div class="recent-post-desc">
                                            <div class="post-title">
                                                <h6><a href="article.html">Latest Design Home</a></h6>
                                            </div>
                                            <div class="post-publish">
                                                <p>Ronchi / 10 March, 2017</p>
                                            </div>
                                            <div class="post-content">
                                                <p>Lorem must explain to ten how all this mistakenea </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-recent-post fix">
                                        <div class="recent-post-thumbnail">
                                            <a href="article.html"><img src="{{ url('user-assets/img/blog/r-2.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="recent-post-desc">
                                            <div class="post-title">
                                                <h6><a href="article.html">Real Estate Expo</a></h6>
                                            </div>
                                            <div class="post-publish">
                                                <p>Ronchi / 15 March, 2017</p>
                                            </div>
                                            <div class="post-content">
                                                <p>Lorem must explain to ten how all this mistakenea </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-recent-post fix">
                                        <div class="recent-post-thumbnail">
                                            <a href="article.html"><img src="{{ url('user-assets/img/blog/r-3.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="recent-post-desc">
                                            <div class="post-title">
                                                <h6><a href="article.html">Corporate House</a></h6>
                                            </div>
                                            <div class="post-publish">
                                                <p>Ronchi / 18 March, 2017</p>
                                            </div>
                                            <div class="post-content">
                                                <p>Lorem must explain to ten how all this mistakenea </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>


                            <aside class="single-side-box guide">
                                <div class="property-buying-guide">
                                    <div class="single-guide">
                                        <div class="guide-icon">
                                            <img src="{{ url('user-assets/img/blog/g-1.png') }}" alt="">
                                        </div>
                                        <div class="guide-title">
                                            <h6><a href="#">Property Buying Guide</a></h6>
                                        </div>
                                    </div>
                                    <div class="single-guide">
                                        <div class="guide-icon">
                                            <img src="{{ url('user-assets/img/blog/g-1.png') }}" alt="">
                                        </div>
                                        <div class="guide-title">
                                            <h6><a href="#">Property Buying Guide</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <aside class="single-side-box discount">
                                <div class="discount-inner">
                                    <div class="discount-img">
                                        <img src="{{ url('user-assets/img/blog/discount.jpg') }}" alt="">
                                    </div>
                                    <div class="discount-text">
                                        <p>
                                            25% off <br>
                                            Build Your  <br>
                                            Dream with Us
                                        </p>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <article class="blog-details">
                            <div class="blog-thubmnail">
                                <a href="#">
                                    <img src="{{ url('application-file/img/'.$blog->feature_image) }}" alt="">
                                </a>
                                <div class="blog-post">
                                    <span class="post-day">
{{ $blog->created_at->format('d') }}
                                    </span>
                                    <span class="post-month">
{{ $blog->created_at->format('M') }}
                                    </span>
                                </div>
                            </div>
                            <div class="article-desc bg-1">
                                <div class="post-title">
                                    <h4>{{ $blog->title }}</h4>
                                </div>
                                <div class="post-content">
                                    <p class="text-1">
                                        {{ $blog->post }}
                                    </p>
                                    <p>
                                        Author: {{ $blog->author }}

                                    </p>
                                </div>
                                <div class="article-action">
                                    <div class="article-tag">
                                        <p> <span>Tags :</span>
                                            @foreach($blog_category as $value)
                                            {{ $value->category->name }} ,

                                            @endforeach</p>
                                    </div>

                                </div>
                            </div>
                            <div class="article-comment-box">
                                <div class="comment-title">
                                    <h5>Comment</h5>
                                </div>
                                @foreach($blog_comment as $value)
                                <div class="single-comment-box fix">
                                    <div class="comment-thumbnail">
                                        <img src="{{ url('user-assets/img/blog/comment-1.jpg') }}" alt="">
                                    </div>
                                    <div class="comment-desc">
                                        <div class="comment-name">
                                            <h6>{{ $value->name }}</h6>
                                        </div>
                                        <div class="comment-post">
                                            <p>12 hour ago,   10 likes</p>
                                        </div>
                                        <div class="comment-content">
                                            <p>{{$value->message}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                {{--<div class="single-comment-box fix">--}}
                                    {{--<div class="comment-thumbnail">--}}
                                        {{--<img src="{{ url('user-assets/img/blog/comment-3.jpg') }}" alt="">--}}
                                    {{--</div>--}}
                                    {{--<div class="comment-desc">--}}
                                        {{--<div class="comment-name">--}}
                                            {{--<h6>Thomas Albert</h6>--}}
                                        {{--</div>--}}
                                        {{--<div class="comment-post">--}}
                                            {{--<p>10 hour ago,   20 likes</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="comment-content">--}}
                                            {{--<p>There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>--}}
                                        {{--</div>--}}
                                        {{--<div class="reply-button">--}}
                                            {{--<a href="#">Reply</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                            <div class="comment-form">
                                <div class="comment-title">
                                    <h5>Leave a Comment</h5>
                                </div>
                                <div class="comment-form-box">
                                    <form action="{{ url('blog-comment/'.$blog->id) }}" method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                        <div class="form-top">
                                            <div class="input-filed">
                                                <input type="text" name="name" placeholder="Your name">
                                            </div>
                                            <div class="input-filed">
                                                <input type="text" name="email" placeholder="Email here">
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <textarea name="message" placeholder="Write here"></textarea>
                                        </div>
                                        <div class="submit-form">
                                            <button type="submit">SUBMIT COMMENT</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>
            </div>
        </div>
        <!--Latest blog end-->

        <!--Brand section start-->
        <div class="brand-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="brand-list">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/1.png" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/2.png" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/3.png" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/4.png" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/5.png" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/1.png" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/2.png" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/3.png" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/4.png" alt=""></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/5.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Brand section end-->

    </div>


@stop