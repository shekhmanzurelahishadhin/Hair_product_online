<!-- category-section title-->
<section class="ttm-row service-section bg-img1 clearfix">
    <div class="container">
        <div class="row"><!-- row -->
            <div class="col-lg-7 col-md-7 col-sm-9 m-auto">
                <!-- section title -->
                <div class="section-title with-desc text-center clearfix">
                    @foreach($titles as $title)
                        @if($title->page=='category')
                    <div class="title-header">
                        <h2 class="title">{{$title->title??null}}</h2>
                    </div>
                    <div class="title-desc">{{$title->small_details??null}}</div>
                        @endif
                    @endforeach
                </div><!-- section title end -->
            </div>
        </div>
        <!-- row end -->
    </div>
</section>
<!-- category-section title end-->
<!-- category-section content-->
<section class="ttm-row mt_100 p-0 mb-100 res-991-mt_80">
    <div class="container">
        <!-- row -->
        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-4 col-lg-3 mb-20">
                    <div class="featured-imagebox featured-imagebox-post style1 res-767-mb-15">
                        <div class="ttm-post-thumbnail featured-thumbnail">
                            <img class="" src="{{asset($category->image)}}" height="150px" width="100%" alt="image">
                        </div>
                        <div class="featured-content box-shadow">
                            <div class="featured-title"><!-- featured-title -->
                                <h5><a href="{{route('products.by.category',['id'=>$category->id])}}">{{$category->name}}</a></h5>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- row end-->
    </div>
</section>
<!-- category-section content end -->
