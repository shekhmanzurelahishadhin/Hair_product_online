@extends('frontend.master')
@section('title')
    details
@endsection
@section('content')



    <!--site-main start-->
    <div class="site-main" style="padding-top: 200px">
        <!-- sidebar -->
        <div class="ttm-row sidebar service-detail clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12 content-area order-lg-2">
                        <div class="ttm-service-single-content-area">
                            <div class="ttm_single_image-wrapper mb-35 res-767-mb-15">
                                <img class="img-fluid" src="{{asset($product->details_image1??null)}}" width="100%" alt="single-img-twelve">
                            </div>
                            <h3>{{$product->name??null}}</h3>
                            <p><b>Price:</b>&nbsp;{{$product->price??null}}</p>
                            <p class="btn" style="background-color: #BF9456;color: white">Call To Order:&nbsp;<a style="color: white" href="tel:{{$product->number??null}}">{{$links->number??null}}</a></p>
                            <div class="ttm-service-description">
                                {!! $product->product_details1??null !!}
                                <div class="row mb-35 res-767-mb-15">
                                    <div class="col-md-6 col-sm-6 d-flex align-items-center">
                                        <div>
                                            {!! $product->product_details2??null !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <!-- col-img-bg-img-ten-->
                                        <div class=" res-767-pb-20">
                                            <!-- col-img-bg-img-eleven-->
                                            <img src="{{asset($product->details_image2??null)}}" class="w-100" alt="bg-image">

                                            <!-- col-img-bg-img-eleven end-->
                                        </div>
                                        <!-- col-img-bg-img-ten end-->
                                    </div>
                                </div>
                                <div class="row mb-35 res-767-mb-15">
                                    <div class="col-12">
                                        <div class="ttm-tabs tabs-style-03" data-effect="fadeIn">
                                            <div class="content-tab">
                                                <!-- content-inner -->
                                                <div class="content-inner active">
                                                    <div class="row">
                                                        <div class="col-md-6 res-767-pb-20">
                                                            <!-- col-img-bg-img-eleven-->
                                                            <img src="{{asset($product->details_image3??null)}}" class="w-100" alt="bg-image">

                                                            <!-- col-img-bg-img-eleven end-->
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="">
                                                                {!! $product->product_details3??null !!}
                                                            </div>
                                                            <p><b>Price:</b>&nbsp;{{$product->price??null}}</p>
                                                            <p class="btn" style="background-color: #BF9456;color: white">Call To Order:&nbsp;<a style="color: white" href="tel:{{$product->number??null}}">{{$links->number??null}}</a></p>
                                                        </div>
                                                    </div>
                                                </div><!-- content-inner end-->

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- ttm-service-single-content-are end -->
                    </div>

                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->
    </div>
    <!--site-main end-->
@endsection
