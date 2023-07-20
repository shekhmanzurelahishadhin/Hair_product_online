@extends('frontend.master')
@section('title')
    About
@endsection
@section('content')

    <section class="ttm-row aboutus-section clearfix" style="padding-top:200px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 res-767-center d-flex">
                    <div class="my-md-5">
                        <img src="{{asset($about->image1)}}" class="img-fluid" alt="bg-image">
                    </div>
                </div>
                <div class="col-md-6 res-767-pt-40">
                    <!--  featured-icon-box -->
                    <div class="spacing-1 ttm-bgcolor-grey">
                        <!-- section title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h6 class="" style="font-size: 24px;color: #CA8D33">About Us</h6>
                                <h2 class="title">{{$about->title}}</h2>
                            </div>
                            <div class="title-desc">{!! $about->details1 !!}</div>
                        </div><!-- section title end -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
