<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Sylin - Beauty salon and Spa HTML Template" />
    <meta name="author" content="https://www.themetechmount.com/" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @php $logo = \App\Models\Logo::latest()->first()@endphp
    <title>{{$logo->site_name}}</title>
    @include('frontend.includes.style')

</head>

<body>

<!--page start-->
<div class="page">

    <!-- preloader start -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- preloader end -->

   @include('frontend.includes.header')
    @yield('content')

    <!--footer start-->
    @include('frontend.includes.footer')
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->

<!-- Javascript -->

@include('frontend.includes.script')

<!-- Javascript end-->

</body>

</html>
