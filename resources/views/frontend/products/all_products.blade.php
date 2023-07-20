@extends('frontend.master')
@section('title')
    Products
@endsection
@section('content')

    <!-- service-section title-->
    <section class="ttm-row service-section bg-img1 clearfix" style="padding-top: 200px">
        <div class="container">
            <div class="row"><!-- row -->

                <div class="col-lg-7 col-md-7 col-sm-9 m-auto">
                    <!-- section title -->
                    @foreach($titles as $title)
                        @if($title->page=='products')
                            <div class="section-title with-desc text-center clearfix">
                                <div class="title-header">
                                    <h2 class="title">{{$title->title??null}}</h2>
                                </div>
                                <div class="title-desc">{{$title->small_details??null}}</div>
                            </div><!-- section title end -->
                        @endif
                    @endforeach

                </div>


            </div>
            <form action="{{route('products.search')}}" method="GET">
                @csrf
            <div class="my-5 w-75 mx-auto">
                <div class="input-group my-3">

                    <input type="text" name="search" class="form-control" placeholder="Search Product" value="{{$search??null}}" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" style="color: #ca8d33" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>

                </div>

            </div>
            </form>

            <!-- row end -->
        </div>
    </section>
    <!-- service-section title end-->
    <!-- service-section content-->
    <section class="ttm-row mt_100 p-0 mb-100 res-991-mt_80">
        <div class="container">
            <!-- row -->
            <div class="row mb-50">
                @foreach($products as $product)
                    <div class="col-md-4 col-lg-3  mb-20">
                        <div class="featured-imagebox featured-imagebox-post style1 res-767-mb-15">
                            <div class="ttm-post-thumbnail featured-thumbnail">
                                <img class="" src="{{asset($product->main_image)}}" height="200px" width="100%" alt="image">
                            </div>
                            <div class="featured-content box-shadow">
                                <div class="featured-title"><!-- featured-title -->
                                    <h5><a href="{{route('services.details',['id'=>$product->id])}}">{{$product->name}}</a></h5>
                                </div>
                                <p><b>Price:</b>&nbsp;{{$product->price??null}}</p>
                                <div class="featured-desc"><!-- featured-title -->
                                    <p class="btn" style="background-color: #BF9456;color: white;font-size: 12px">Call To Order:&nbsp;<a style="color: white" href="tel:{{$product->number??null}}">{{$links->number??null}}</a></p>
                                </div>
                                <div class="ttm-border-seperator"></div>
                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-10" href="{{route('products.details',['id'=>$product->id])}}">See Details <i class="ti ti-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!-- row end-->
            {{$products->links()}}
        </div>
    </section>
    <!-- service-section content end -->


@endsection
