<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="logo">
                        <a href="{{ url('/landing') }}"><img src="{{ url($config->photo) }}" alt="" style="width: 100%;"></a>
                    </div>
                </div>
                <div class="col-md-10 hidden-sm hidden-xs">
                    <div class="mgea-full-width">
                        <div class="header-menu">
                            <nav>
                                <ul>
                                    @foreach($nav as $value)
                                        @if($value->link == '#######')
                                            <li><a href="#">{{$value->name}}</a>
                                                <ul class="dropdown_menu">
                                                    <li><a href="{{ url('sale-condo') }}">For Sale</a></li>
                                                    <li><a href="{{ url('rent-condo') }}">For Rent</a></li>
                                                </ul>
                                            </li>
                                            @else
                                            <li><a href="{{ url(''.$value->link) }}">{{$value->name}}</a>

                                        @endif

                                    @endforeach

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile menu start -->
        <div class="mobile-menu-area hidden-lg hidden-md">
            <div class="container">
                <div class="col-md-12">
                    <nav id="dropdown">
                        <ul>
                            <li><a href="index.html">Home</a>
                                <ul>
                                    <li><a href="index.html">Home Version 1</a></li>
                                    <li><a href="index-2.html">Home Version 2</a></li>
                                    <li><a href="index-3.html">Home Version 3</a></li>
                                    <li><a href="index-4.html">Home Version 4</a></li>
                                    <li><a href="index-5.html">Home Version 5</a></li>
                                    <li><a href="index-6.html">Home Version 6</a></li>
                                    <li><a href="index-7.html">Home Version 7</a></li>
                                    <li><a href="index-8.html">Home Version 8</a></li>
                                    <li><a href="index-9.html">Home Version 9</a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">About</a></li>
                            <li><a href="blog.html"> BLOG</a>
                                <ul>
                                    <li><a href="blog.html">Blog pages</a></li>
                                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog right Sidebar</a></li>
                                    <li><a href="article.html">Blog details</a></li>
                                    <li><a href="article-left-sidebar.html">Blog details left sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#">pages</a>
                                <ul>
                                    <li><a href="about-us.html">About us</a></li>
                                    <li><a href="contact.html">contact us</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="add-property.html">Add property</a></li>
                                    <li><a href="feature.html">Feature</a></li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="register.html">register</a></li>
                                    <li><a href="my-account.html">My account</a></li>
                                    <li><a href="services.html">Services page</a></li>
                                    <li><a href="single-services.html">Single Services</a></li>
                                    <li><a href="single-services-2.html">Single Services 2 </a></li>
                                </ul>
                            </li>

                            <li><a href="properties.html">PROPERTIES </a>
                                <ul >
                                    <li><a href="properties.html">Properties page</a></li>
                                    <li><a href="single-properties.html">Single Properties</a></li>
                                    <li><a href="properties-sidebar.html">Properties sidebar</a></li>
                                    <li><a href="properties-right-sidebar.html">Properties right sidebar</a></li>
                                    <li><a href="properties-list-sidebar.html">Properties list sidebar</a></li>
                                    <li><a href="properties-list-right-sidebar.html">Properties list right sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="agent.html">AGENT</a>
                                <ul>
                                    <li><a href="agent.html">Agent page</a></li>
                                    <li><a href="agent-details.html">Agent Details</a></li>
                                    <li><a href="agency.html">Agency page</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Elements</a>
                                <ul>
                                    <li><a href="#" class="title">Column 1</a>
                                        <ul>
                                            <li><a href="elements-accordion.html">Accordion</a></li>
                                            <li><a href="elements-agent.html">Agent</a></li>
                                            <li><a href="elements-alerts.html">Alerts</a></li>
                                            <li><a href="elements-audio.html">Audio</a></li>
                                            <li><a href="elements-video.html">Video</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="title">Column 2</a>
                                        <ul>
                                            <li><a href="elements-blog.html">Blog</a></li>
                                            <li><a href="elements-client-review.html">Cleint review</a></li>
                                            <li><a href="elements-contact-form.html">Contact form</a></li>
                                            <li><a href="elements-fun-factor.html">Fun factor</a></li>
                                            <li><a href="elements-progressbar.html">progress bar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="title">Column 3</a>
                                        <ul>
                                            <li><a href="elements-properties.html">Properties</a></li>
                                            <li><a href="elements-map.html">Map</a></li>
                                            <li><a href="elements-map-2.html">Map 2</a></li>
                                            <li><a href="elements-services.html">Services</a></li>
                                            <li><a href="elements-tab.html">Tab</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="title">Column 4</a>
                                        <ul>
                                            <li><a href="elements-sticky.html">Sticky page</a></li>
                                            <li><a href="elements-table.html">Table</a></li>
                                            <li><a href="elements-typography.html">typography</a></li>
                                            <li><a href="single-services.html">single services</a></li>
                                            <li><a href="single-properties.html">single properties</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact.html"> Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Mobile menu end -->
    </div>

    <div class="header-bottom home-map">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="haven-call">
                        <p>{{ $config->contact }}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>