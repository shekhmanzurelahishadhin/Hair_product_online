@extends('frontend.master')
@section('title')
    Services
@endsection
@section('content')

    <!-- Content Wrapper Start -->
    <div class="content-wrapper" style="padding-top:150px">



        <!-- Service Section Start -->
        <section class="service-wrap ptb-100">
            <div class="container">
                <div class="row my-5">
                    @foreach($galleries as $gallery)
                        <div class="col-lg-6 col-12 mb-3">
                            {!! $gallery->video_link !!}
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        <!-- Service Section End -->

    </div>
    <!-- Content wrapper end -->
@endsection
