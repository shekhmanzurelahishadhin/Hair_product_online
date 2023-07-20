@extends('frontend.master')
@section('title')
    Packages
@endsection
@section('content')

    {{--        address and location start--}}
    <div class="container" style="padding-top: 230px">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h2 class="mb-20 pt-55 res-1199-fs-24 res-991-pt-30 res-991-mb-0">Our Office Inforamtion</h2>
                <div class="featured-icon-box icon-align-before-content icon-ver_align-top style8">
                    <div class="featured-icon">
                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                            <i class="flaticon-location"></i>
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5>Location</h5>
                        </div>
                        <div class="featured-desc">
                            <p>{{$links->address}}</p>
                        </div>
                    </div>
                </div>
                <div class="featured-icon-box icon-align-before-content icon-ver_align-top style8">
                    <div class="featured-icon">
                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                            <i class="flaticon-house"></i>
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5>Call Us</h5>
                        </div>
                        <div class="featured-desc">
                            <p><a href="tel:{{$links->number}}">{{$links->number}}</a></p>
                        </div>
                    </div>
                </div>
                <div class="featured-icon-box icon-align-before-content icon-ver_align-top style8">
                    <div class="featured-icon">
                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                            <i class="flaticon-message"></i>
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5>Email</h5>
                        </div>
                        <div class="featured-desc">
                            <a href="mailto:{{$links->email}}">{{$links->email}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="contact-section-wrapper ttm-bgcolor-grey res-767-mb-15">
                    <div class="spacing-10">
                        <!-- section title -->
                        {{--                        <div class="section-title with-desc clearfix">--}}
                        {{--                            <div class="title-header">--}}
                        {{--                                <h5 class="ttm-textcolor-skincolor">Testimonials</h5>--}}
                        {{--                                <h2 class="title">DO YOU HAVE ANY QUESTIONS?</h2>--}}
                        {{--                            </div>--}}
                        {{--                        </div><!-- section title end -->--}}
                        {{--                        <form id="ttm-quote-form" class="row ttm-quote-form clearfix" method="post" action="#">--}}
                        {{--                            <div class="col-sm-6 col-md-6">--}}
                        {{--                                <div class="form-group">--}}
                        {{--                                    <input name="name" type="text" class="form-control" placeholder="Your Name*" required="required">--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-sm-6 col-md-6">--}}
                        {{--                                <div class="form-group">--}}
                        {{--                                    <input name="phone" type="email" placeholder="Your Phone*" required="required" class="form-control">--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-sm-6 col-md-6">--}}
                        {{--                                <div class="form-group">--}}
                        {{--                                    <input name="email" type="email" placeholder="Email Address*" required="required" class="form-control">--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-sm-6 col-md-6">--}}
                        {{--                                <div class="form-group">--}}
                        {{--                                    <input name="url" type="text" placeholder="Website URL" required="required" class="form-control">--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-sm-12">--}}
                        {{--                                <div class="form-group">--}}
                        {{--                                    <textarea name="Massage" rows="4" placeholder="Massage" required="required" class="form-control"></textarea>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-md-12 mb-50 res-767-mb-0">--}}
                        {{--                                <button type="submit" id="submit" class="ttm-btn ttm-btn-size-md ttm-textcolor-white ttm-btn-color-darkgrey" value="">--}}
                        {{--                                    Send Message--}}
                        {{--                                </button>--}}
                        {{--                            </div>--}}
                        {{--                        </form>--}}
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14599.679308560486!2d90.4219536!3d23.8214498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1686731889883!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--        address and location end--}}
@endsection
