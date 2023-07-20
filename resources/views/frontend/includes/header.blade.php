<!--header start-->
<header id="masthead" class="header ttm-header-style-01">

    <!-- ttm-header-wrap -->
    <div class="ttm-header-wrap">
        <!-- ttm-stickable-header-w -->
        <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
            <!-- ttm-topbar-wrapper -->
            <div class="ttm-topbar-wrapper ttm-textcolor-white clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="ttm-topbar-content">
                                <ul class="top-contact text-left">

                                    <li><i class="fa fa-map-marker ttm-textcolor-skincolor"></i>{{$links->address}}</li>
                                    <li><i class="fa fa-envelope-o ttm-textcolor-skincolor"></i><a href="mailto:{{$links->email}}">{{$links->email}}</a></li>
                                </ul>
                                <div class="topbar-right text-right">
                                    <div class="ttm-social-links-wrapper list-inline">
                                        <ul class="social-icons">
                                            <li><a href="{{$links->facebook}}" class=" tooltip-bottom" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="{{$links->linkedIn}}" class=" tooltip-bottom" data-tooltip="LinkedIn"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                            <li><a href="{{$links->youtube}}" class=" tooltip-bottom" data-tooltip="Youtube"><i class="fa fa-youtube-play"></i></a>
                                            </li>
                                            <li><a href="{{$links->instagram}}" class=" tooltip-bottom" data-tooltip="Instagram"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ttm-topbar-wrapper end -->
            <div id="site-header-menu" class="site-header-menu">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation d-flex flex-row">
                                    <div class="site-branding mr-auto">
                                        <!-- site-branding -->
                                        <a class="home-link" href="{{route('front.page')}}" title="Sylin Beauty" rel="home">
                                            @php $logo = \App\Models\Logo::latest()->first()@endphp

                                            <img id="logo-img" class="img-center lazyload" style="max-height: 60px; max-width: 100px" src="{{asset($logo->logo_image)}}" alt="logo">
                                        </a>
                                        <!-- site-branding end -->
                                    </div>
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                            <li class="{{Request::routeIs('front.page') ? 'active' : ''}}"><a href="{{route('front.page')}}">Home</a></li>
                                            <li class="{{Request::routeIs('about.page') ? 'active' : ''}}"><a href="{{route('about.page')}}">about us</a></li>
                                            <li class="{{Request::routeIs('products') ? 'active' : ''}}"><a href="{{route('products')}}">All Products</a></li>
{{--                                            <li class="{{Request::routeIs('services') ? 'active' : ''}}"><a href="{{route('services')}}">services</a></li>--}}
                                            <li class="{{Request::routeIs('products.by.category') ? 'active' : ''}}"><a href="">Categories</a>
                                                <ul>
                                                    @foreach($categories as $category)
                                                    <li><a href="{{route('products.by.category',['id'=>$category->id])}}">{{$category->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="{{Request::routeIs('gallery.page') ? 'active' : ''}}"><a href="">Gallery</a>
                                                <ul>
                                                    <li><a href="{{route('gallery.page')}}">Photo Gallery</a></li>
                                                    <li><a href="{{route('video.gallery.page')}}">Video Gallery</a></li>
                                                </ul>
                                            </li>
                                            <li class="{{Request::routeIs('contacts') ? 'active' : ''}}"><a href="{{route('contacts')}}">CONTACT US</a></li>
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- ttm-stickable-header-w end-->
    </div><!--ttm-header-wrap end -->

</header><!--header end-->
