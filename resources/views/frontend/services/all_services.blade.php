@extends('frontend.master')
@section('title')
    Services
@endsection
@section('content')

    <!-- service-section title-->
    <section class="ttm-row service-section bg-img1 clearfix" style="padding-top: 200px">
        <div class="container">
            <div class="row"><!-- row -->
                <div class="col-lg-7 col-md-7 col-sm-9 m-auto">
                    <!-- section title -->
                    <div class="section-title with-desc text-center clearfix">
                        <div class="title-header">
                            <h2 class="title">{{$service_title->title??null}}</h2>
                        </div>
                        <div class="title-desc">{{$service_title->small_details??null}}</div>
                    </div><!-- section title end -->
                </div>
            </div>
            <!-- row end -->
        </div>
    </section>
    <!-- service-section title end-->
    <!-- service-section content-->
    <section class="ttm-row mt_100 p-0 mb-100 res-991-mt_80">
        <div class="container">
            <!-- row -->
            <div class="row">
                @foreach($services as $service)
                    <div class="col-md-4 col-lg-3">
                        <div class="featured-imagebox featured-imagebox-post style1 res-767-mb-15">
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="img-fluid" src="{{asset($service->main_image)}}" alt="image">
                            </div>
                            <div class="featured-content box-shadow">
                                <div class="featured-title"><!-- featured-title -->
                                    <h5><a href="{{route('services.details',['id'=>$service->id])}}">{{$service->service_title}}</a></h5>
                                </div>
                                <div class="featured-desc"><!-- featured-title -->

                                    {!! $service->service_details_small !!}
                                </div>
                                <div class="ttm-border-seperator"></div>
                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-10" href="{{route('services.details',['id'=>$service->id])}}">Read More <i class="ti ti-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!-- row end-->

        </div>
    </section>
    <!-- service-section content end -->


@endsection
