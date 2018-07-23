@extends('user.layout.app')
@section('content')
    <div class="breadcrumbs overlay-black" style="background:url('user-assets/img/banner.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs-inner" >
                        <div class="breadcrumbs-title text-center">
                            <h1>Blog Of Selling</h1>
                        </div>
                        <div class="breadcrumbs-menu">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feature-property pt-130">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    @foreach($blog_category as $blog)
                    @foreach($blog->blog as $value)
                        <article class="blog-details">
                            <div class="blog-thubmnail">
                                <a href="{{ url('blog-detail/'.$value->id) }}">
                                    <img src="{{ url('application-file/img/'.$value->feature_image) }}" alt="" style="width:100%; height: 500px">
                                </a>
                                <div class="blog-post">
                                    <span class="post-day">
                                                                                {{ $value->created_at->format('d') }}

                                    </span>
                                    <span class="post-month">
                                        {{ $value->created_at->format('M') }}
                                    </span>
                                </div>
                            </div>
                            <div class="article-desc bg-1">
                                <div class="post-title">
                                    <a href="{{ url('blog-detail/'.$value->id) }}">
                                        <h4>{{ $value->title }}</h4>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <p class="text-1">
                                        {{ str_limit( $value->post, 400) }}
                                    </p><br>
                                    <h5>
                                        Author: {{ $value->author }}

                                    </h5><br>
                                    <div class="social-buttons">
                                        <h5>Share</h5>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode('http://www.sharjeelkhan.ca/sq1/blog-detail/'.$value->id) }}"
                                           target="_blank">
                                            <i class="fa fa-facebook-official fa-2x"></i>
                                        </a>
                                        <a href="https://twitter.com/share?ref_src={{ urlencode('http://www.sharjeelkhan.ca/sq1/blog-detail/'.$value->id) }}" class="twitter-share-button" data-show-count="false">                                        <i class="fa fa-twitter-official fa-2x"></i>
                                        </a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    </div>

                                </div>

                            </div>
                        </article>
                    @endforeach
                    @endforeach
                    {{--<article class="blog-details">--}}
                    {{--<div class="blog-thubmnail">--}}
                    {{--<a href="#">--}}
                    {{--<img src="{{ url('user-assets/img/blog/article.jpg') }}" alt="">--}}
                    {{--</a>--}}
                    {{--<div class="blog-post">--}}
                    {{--<span class="post-day">--}}
                    {{--20--}}
                    {{--</span>--}}
                    {{--<span class="post-month">--}}
                    {{--March--}}
                    {{--</span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="article-desc bg-1">--}}
                    {{--<div class="post-title">--}}
                    {{--<h4>New Duplex Villa Design with Latest Altra Concept</h4>--}}
                    {{--</div>--}}
                    {{--<div class="post-content">--}}
                    {{--<p class="text-1">--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etre magna liqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eaodo consequat. Duis aute ure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla iatur perspiciatis unde omnis iste natus error sit voluptatem accusantium--}}
                    {{--</p>--}}
                    {{--<p class="text-2">--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etre magna liqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eaodo consequat. Duis aute ure dolor in reprehenderit in voluptate velit esse--}}
                    {{--</p>--}}
                    {{--<blockquote>--}}
                    {{--<p>“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolque laudantium tam rem aperiamue ipsa quae ab illo inventore veritatis et quasi arecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptntur”</p>--}}
                    {{--</blockquote>--}}
                    {{--<p class="text-3">--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etre magna liqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi--}}
                    {{--</p>--}}
                    {{--</div>--}}

                    {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="blog-details">--}}
                    {{--<div class="blog-thubmnail">--}}
                    {{--<a href="#">--}}
                    {{--<img src="{{ url('user-assets/img/blog/article.jpg') }}" alt="">--}}
                    {{--</a>--}}
                    {{--<div class="blog-post">--}}
                    {{--<span class="post-day">--}}
                    {{--20--}}
                    {{--</span>--}}
                    {{--<span class="post-month">--}}
                    {{--March--}}
                    {{--</span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="article-desc bg-1">--}}
                    {{--<div class="post-title">--}}
                    {{--<h4>New Duplex Villa Design with Latest Altra Concept</h4>--}}
                    {{--</div>--}}
                    {{--<div class="post-content">--}}
                    {{--<p class="text-1">--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etre magna liqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eaodo consequat. Duis aute ure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla iatur perspiciatis unde omnis iste natus error sit voluptatem accusantium--}}
                    {{--</p>--}}
                    {{--<p class="text-2">--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etre magna liqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eaodo consequat. Duis aute ure dolor in reprehenderit in voluptate velit esse--}}
                    {{--</p>--}}
                    {{--<blockquote>--}}
                    {{--<p>“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolque laudantium tam rem aperiamue ipsa quae ab illo inventore veritatis et quasi arecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptntur”</p>--}}
                    {{--</blockquote>--}}
                    {{--<p class="text-3">--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etre magna liqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi--}}
                    {{--</p>--}}
                    {{--</div>--}}

                    {{--</div>--}}
                    {{--</article>--}}
                    {{--<article class="blog-details">--}}
                    {{--<div class="blog-thubmnail">--}}
                    {{--<a href="#">--}}
                    {{--<img src="{{ url('user-assets/img/blog/article.jpg') }}" alt="">--}}
                    {{--</a>--}}
                    {{--<div class="blog-post">--}}
                    {{--<span class="post-day">--}}
                    {{--20--}}
                    {{--</span>--}}
                    {{--<span class="post-month">--}}
                    {{--March--}}
                    {{--</span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="article-desc bg-1">--}}
                    {{--<div class="post-title">--}}
                    {{--<h4>New Duplex Villa Design with Latest Altra Concept</h4>--}}
                    {{--</div>--}}
                    {{--<div class="post-content">--}}
                    {{--<p class="text-1">--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etre magna liqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eaodo consequat. Duis aute ure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla iatur perspiciatis unde omnis iste natus error sit voluptatem accusantium--}}
                    {{--</p>--}}
                    {{--<p class="text-2">--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etre magna liqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eaodo consequat. Duis aute ure dolor in reprehenderit in voluptate velit esse--}}
                    {{--</p>--}}
                    {{--<blockquote>--}}
                    {{--<p>“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolque laudantium tam rem aperiamue ipsa quae ab illo inventore veritatis et quasi arecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptntur”</p>--}}
                    {{--</blockquote>--}}
                    {{--<p class="text-3">--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etre magna liqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi--}}
                    {{--</p>--}}
                    {{--</div>--}}

                    {{--</div>--}}
                    {{--</article>--}}

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-sidbar right-side">
                        <aside class="single-side-box search">
                            <div class="blog-search-inner">
                                <h2>Search For Condos</h2>
                            </div>
                        </aside>
                        <aside class="single-side-box categories">
                            <div class="aside_title">
                                <a href="tel:+496170961709" class="Blondie">
                                    <h5>{{ $config->contact }}</h5>
                                </a>
                            </div>

                        </aside>

                        <aside class="single-side-box archive">
                            <div class="aside_title">
                                <h5>Buying</h5>
                            </div>
                            <div class="archive-list">
                                <ul>
                                    @foreach($buying as $blog)
                                        @foreach($blog->blog as $value)
                                            <li><a href="{{ url('blog-detail/'.$value->id) }}">{{ $value->title }}</a></li>
                                        @endforeach
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                        <aside class="single-side-box archive">
                            <div class="aside_title">
                                <h5>Selling</h5>
                            </div>
                            <div class="archive-list">
                                <ul>
                                    @foreach($selling as $blog)
                                        @foreach($blog->blog as $value)
                                            <li><a href="{{ url('blog-detail/'.$value->id) }}">{{ $value->title }}</a></li>
                                        @endforeach
                                    @endforeach
                                </ul>
                            </div>
                        </aside>

                        <aside class="single-side-box guide">
                            <div class="property-buying-guide">
                                <div class="single-guide">
                                    <div class="guide-icon">
                                        <img src="{{ url('user-assets/img/blog/g-1.png') }}" alt="">
                                    </div>
                                    <div class="guide-title">
                                        <h6><a href="{{ url('sale-condo') }}">Property For Sale</a></h6>
                                    </div>
                                </div>
                                <div class="single-guide">
                                    <div class="guide-icon">
                                        <img src="{{ url('user-assets/img/blog/g-1.png') }}" alt="">
                                    </div>
                                    <div class="guide-title">
                                        <h6><a href="{{ url('rent-condo') }}">Property For Rent</a></h6>
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
            </div>
        </div>
    </div>
    <div class="brand-section pd-2">
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
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script>

        var popupSize = {
            width: 780,
            height: 550
        };

        $(document).on('click', '.social-buttons > a', function(e){

            var
                verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
                horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

            var popup = window.open($(this).prop('href'), 'social',
                'width='+popupSize.width+',height='+popupSize.height+
                ',left='+verticalPos+',top='+horisontalPos+
                ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

            if (popup) {
                popup.focus();
                e.preventDefault();
            }

        });
    </script>
@stop