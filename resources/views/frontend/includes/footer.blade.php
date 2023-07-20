<footer class="footer widget-footer clearfix">

    <div class="second-footer ttm-textcolor-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 widget-area">
                    <div class="widget widget_text clearfix">
                        <div class="footer-logo">
                            @php $logo = \App\Models\Logo::latest()->first()@endphp
                            <img id="footer-logo-img" class="img-center" src="{{asset($logo->logo_image)}}" style="max-height: 100px; max-width: 150px" alt="">
                        </div>
                        <div class="textwidget widget-text">
                            {{$footer->details}}
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                    <div class="widget widget_text clearfix">
                        <h3 class="widget-title">Latest Product</h3>
                        <ul class="widget-post ttm-recent-post-list">
                            @foreach($products as $product)
                            <li>
                                <a href="{{route('products.details',['id'=>$product->id])}}"><img src="{{asset($product->main_image)}}" class="lazyload" alt="post-img"></a>
                                <a href="{{route('products.details',['id'=>$product->id])}}">{{$product->name}}</a>
                                <p><b>Price:</b>&nbsp;{{$product->price??null}}</p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                    <div class="widget flicker_widget clearfix">
                        <h3 class="widget-title">Get In  Touch</h3>
                        <div class="textwidget widget-text">
                            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style3">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-sm">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-desc">
                                        <p>{{$links->address}} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style3">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-sm">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-desc">
                                        <p><a href="mailto:{{$links->email}}">{{$links->email}}</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style3">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-sm">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-desc">
                                        <p><a href="tel:{{$links->number}}">{{$links->number}}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-text">
        <div class="container">
            <div class="row copyright">
                <div class="col-md-9">
                    <div class="ttm-textcolor-white">
                        <span>&copy; {{$footer->credit}}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex flex-row align-items-center justify-content-end social-icons">
                        <ul class="social-icons list-inline">
                            <li><a href="{{$links->facebook}}" class=" tooltip-top" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="{{$links->linkedIn}}" class=" tooltip-top" data-tooltip="Linkedin"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="{{$links->youtube}}" class=" tooltip-top" data-tooltip="Youtube"><i class="fa fa-youtube-play"></i></a>
                            </li>
                            <li><a href="{{$links->instagram}}" class=" tooltip-top" data-tooltip="Instagram"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
